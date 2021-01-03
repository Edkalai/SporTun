<?PHP
include "C://wamp64/www/SporTun/config.php";
require_once 'C://wamp64/www/SporTun/model/publicites.php';

class publiciteC
{

    public function ajouterpublicite($publicite)
    {
        $sql = "INSERT INTO publicite(titre,description,image,lien) 
			VALUES (:titre,:description,:image,:lien)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);

            $query->execute([
                'titre' => $publicite->gettitre(),
                'description' => $publicite->getdescription(),
                'image' => $publicite->getimage(),
                'lien' => $publicite->getlien()

            ]);
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }

    public function afficherpublicite()
    {

        $sql = "SELECT * FROM publicite";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }



    function supprimerpublicite($id)
    {
        $sql = "DELETE FROM publicite WHERE idpublicite = :idpublicite";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':idpublicite', $id);
        try {
            $req->execute();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    function modifierpublicite($publicite, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE publicite SET 
						titre = :titre, 
					    description = :description,
						image = :image,
						 lien = :lien
					WHERE idpublicite = :idpublicite'
            );
            $query->execute([
                'titre' => $publicite->gettitre(),
                'description' => $publicite->getdescription(),
                'image' => $publicite->getimage(),
                'lien' => $publicite->getlien(),
                'idpublicite' => $id
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }


    function recupererpublicite($id)
    {
        $sql = "SELECT * from publicite where idpublicite=$id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $user = $query->fetch();
            return $user;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
}
