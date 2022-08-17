<?php
 $user = "id18450933_kevin";
 $mdp = "\*-xh1K^~ouFH*q%";

 try{
     $db = new PDO ("mysql:HOST=localhost;id18450933_dbkevin",$user,$mdp);

 }catch(PDOException $e)
 {
     echo "Probleme De Connection" . $e->getMessage();
 } 
?>