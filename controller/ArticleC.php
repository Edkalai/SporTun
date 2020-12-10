<?PHP
include "C://wamp64/www/SporTun-master (1)/config.php";
require_once 'C://wamp64/www/SporTun-master (1)/model/Articles.php';

class articleC
{

    public function ajouterArticle($article)
    {
        $sql = "INSERT INTO article(titre,texte,auteur,urlImage,notifCreateur,Datearticle) 
			VALUES (:titre,:texte,:auteur,:urlImage,:notifCreateur,:Datearticle)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);

            $query->execute([
                'titre' => $article->getTitre(),
                'texte' => $article->getTexte(),
                'auteur' => $article->getAuteur(),
                'urlImage' => $article->getUrlImage(),
                'notifCreateur' => $article->getNotifCreateur(),
                'Datearticle' => $article->getDatearticle()

            ]);
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }
    public function afficherarticle()
    {

        $sql = "SELECT * FROM article";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }


    function supprimerarticle($id)
    {
        $sql = "DELETE FROM newsarticle WHERE idNewsArticle = :idNewsArticle";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':idNewsArticle', $id);
        try {
            $req->execute();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }


    function modifierarticle($article, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE newsarticle SET 
						titre = :titre, 
						texte= :texte,
						auteur = :auteur,
						urlImage = :urlImage,
                        notifCreateur = :notifCreateur,
                        Datearticle = :Datearticle
					WHERE idNewsArticle = :idNewsArticle'
            );
            $query->execute([
                'titre' => $article->getTitre(),
                'texte' => $article->getTexte(),
                'auteur' => $article->getAuteur(),
                'urlImage' => $article->getUrlImage(),
                'notifCreateur' => $article->getNotifCreateur(),
                'Datearticle' => $article->getDatearticle(),
                'idNewsArticle' => $id
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }


    function recupererarticle($id)
    {
        $sql = "SELECT * from newsarticle where idNewsArticle=$id";
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


    function sortdate1()
    {
        $sql = "SELECT * from newsarticle order by Datearticle desc";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function sortdate2()
    {
        $sql = "SELECT * from newsarticle order by Datearticle asc";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
}
