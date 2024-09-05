<?php
session_start();     // crée une session ou restaure celle trouvée sur le serveur.

?>

<!DOCTYPE html>
<html>
    <head>
        <title>lycloudagency</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="">
    </head>
    <body>



<?php
 // Etape 1: Ouvrir une connexion avec la base de donnée. / Nom de la bdd, mot de passe ..
 $mysqli = new mysqli("localhost", "root", "root", "lycloudagency");
 //verification
 if ($mysqli->connect_errno) {
     echo "<article>";
     echo ("Échec de la connexion : " . $mysqli->connect_error);
     echo ("<p>Indice: Vérifiez les parametres de <code>new mysqli(...</code></p>");
     echo "</article>";
     exit();
 }
 $laQuestionEnSql = "
SELECT *
FROM connexion
 " ;
 
 // Au début nous somme dans la table post on sélectionne les collones post.id etccc..

 // Le AS permet de modifier le nom // Nous faisont une simple jointure de la tables users ou userid = postuserid
 // LEFT voir image google // LEFT permet de joindre les éléments de la table b à a // RIGHT inverse

 // Where post .. IS NULL cela permet de trier les éléments et de renvoyer ce qui n'ont pas de post.parent.id (ce qui corresponde pas)
 // Group by post permet de regrouper tout dans un groupe qui s'appelle post.id
 // order by permet de classé dans la colone posts.created dans l'ordre décroissant.




$lesInformations = $mysqli->query($laQuestionEnSql);

        ?>

</body>
</html>