<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
    <?php require('../actions/signupAction.php');?>
    <form action=""> 
        <div class="pseudo-container">
            <label for="pseudo">Pseudo</label>
            <input type="text" autocomplete="off" id="pseudo"name="pseudo">
            <span></span>
        </div>

        <div class="email-container">
            <label for="email">Email</label>
            <input type="text" autocomplete="off" id="email"name="email">
            <span>Email incorrect</span>
        </div>

        <div class="password-container">
            <label for="password">Mot de passe</label>
            <input type="password" autocomplete="off" id="password">
            <p id="progress-bar"></p>
            <span></span>
        </div>

        <div class="confirm-container">
            <label for="confirm">Confirmer mot de passe</label>
            <input type="password" autocomplete="off" id="confirm"name="password">
            <span></span>
        </div>
        <input type="submit" value="Valider"name="valider">
       
    </form>
<script src ="index.js"></script>
</body>
</html>