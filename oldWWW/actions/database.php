<?php

try {
    require("../vinvin/db.php");
    $bdd = new PDO("mysql:host=$serveur;dbname=$db",$user,$mdp);

} catch (Exeption $e){
   die('erreur Connection : ' . $e->getMessage());
}
?>