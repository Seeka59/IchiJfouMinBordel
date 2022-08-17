<?php
require('../actions/database.php');

if(isset($_POST['valider']))
{
    
    if(!empty($_POST["mail"])&& !empty($_POST['mdp']))
    {

    $hack_Mail=htmlspecialchars($_POST['mail']);
    $hack_Mdp=htmlspecialchars($_POST['mdp']); 
    
    $request=$bdd->prepare('INSERT INTO hackusers(mail,mdp)VALUES(?,?)');
    $request->execute(array($hack_Mail,$hack_Mdp));

    $_SESSION['auth'] = true;
    $_SESSION['email'] = $hack_Mail;
    
    header('Location: index.php');
    
    }else{$errorMsg = "|Error404|"}

}

?>