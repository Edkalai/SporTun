<?PHP
include "C://wamp64/www/SporTun/config.php";
require_once 'C://wamp64/www/SporTun/model/promos.php';

class promoC
{

    public function ajouterpromotion($promo)
    {
        $sql = "INSERT INTO promotion(titre,description,prix) 
			VALUES (:titre,:description,:prix)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);

            $query->execute([
                'titre' => $promo->gettitre(),
                'description' => $promo->getdescription(), 
                'prix' => $promo->getprix()
            ]);
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }

    public function afficherpromotion()
    {

        $sql = "SELECT * FROM promotion";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }



    function supprimerpromotion($id)
    {
        $sql = "DELETE FROM promotion WHERE idpromo = :idpromo";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':idpromo', $id);
        try {
            $req->execute();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }



    function modifierpromotion($promo, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE promotion SET 
						titre = :titre, 
						description= :description,
                        prix= :prix
					WHERE idpromo = :idpromo'
            );
            $query->execute([
                'titre' => $promo->gettitre(),
                'description' => $promo->getdescription(), 
                'prix' => $promo->getprix(),        
                'idpromo' => $id
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }


    function recupererpromotion($id)
    {
        $sql = "SELECT * from promotion where idpromo=$id";
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
