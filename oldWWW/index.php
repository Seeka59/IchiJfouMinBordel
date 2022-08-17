
<!DOCTYPE html>
<html lang="Fr">
<head>
<?php
 include "includes/head.php"; 
 include "includes/nav.php"; 
 ?>
    <title>Seeka</title>
</head>
<header>
    <h3 id="target"></h3>
</header>
<body>
    <?php
    if($_SERVER['auth']=true)
    {?>
    <h1><?echo $_SESSION['email']?></h1>
    <?php}?>
    <section>
    <h5 id="mesDac"></h5>
    </section>
<section>
    <h2 id="h2_1"></h2>
    <img id="img_1" src="" alt="">
</section>
    <h2></h2>
        <script src="actions/index.js"></script>
        <script src="letterMove.js"></script>
</body>
</html>



























