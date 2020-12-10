<?php

    include_once 'DBconnection.php';

function Ban()
{
    //id=post
    require 'DBconnection.php';
    try {
        $query = $pdo->prepare('UPDATE utilisateurs SET ban = '1' WHERE id= EMAIL');
        $query->execute();
        echo $query->rowcount() . "blocked successfully";
        }
  /*  catch (PDOException $e)
    {
        echo "Erreur : " . $e->getMessage();
    }*/
}


/*function Unban()
{
     require 'DBconnection.php';
    try {
        $query = $pdo->prepare('UPDATE users SET ban = '0' WHERE id= EMAIL');
        $query->execute();
        echo $query->rowcount() . "deblocked successfully";
        }
    catch (PDOException $e)
    {
        echo "Erreur : " . $e->getMessage();
    }
}
function Delete()
{
    require 'DBconnection.php';
    try {
        $query = $pdo->prepare('DELETE FROM users WHERE id = :user_idelete');
        $query->execute();
        echo $query->rowcount() . "deleted successfully";
        }
    catch (PDOException $e)
    {
        echo "Erreur : " . $e->getMessage();
    }
}
?>
*/