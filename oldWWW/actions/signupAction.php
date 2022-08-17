<?php

require('../actions/database.php');

if(isset($_POST['valider']))
{
    if(!empty($_POST['email'])&&!empty($_POST['pseudo'])&&!empty($_POST['password']))
    {
        $user_pseudo=htmlspecialchars($_POST['pseudo']);
        $user_email=htmlspecialchars($_POST['email']);
        $user_password=password_hash($_POST['password'], PASSWORD_DEFAULT);

        $checkIfUserAlReadyExists = $bdd->prepare('SELECT email FROM users WHERE email =?');
        $checkIfUserAlReadyExists->execute(array($user_email));

        if($checkIfUserAlReadyExists->rowCount() == 0)
        {
            $insertUserOnWebsite = $bdd->prepare('INSERT INTO users(pseudo,email,password)VALUES(?,?,?)');
            $insertUserOnWebsite ->execute(array($user_pseudo,$user_email,$user_password));

            $getInfoOfThisUserReq = $bdd->prepare('SELECT id,email FROM users WHERE email=?');
            $getInfoOfThisUserReq->execute(array($user_email));

            $usersInfos = $getInfoOfThisUserReq->fetch();

            $_SESSION['auth'] = true;
            $_SESSION['id']=$usersInfos['id'];
            $_SESSION['pseudo']=$usersInfos['pseudo'];
            $_SESSION['email']=$usersInfos['email'];

            header('Location: index.php');

        }else{$errorMsg = "L'utilisateur existe deja sur le site" ;}

    }else{$errorMsg ="Veuillez compléter tous les champs ...";}
}
 ?>