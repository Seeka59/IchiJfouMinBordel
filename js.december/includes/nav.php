<link rel="stylesheet" href="../includes/nav.css">

<nav class="navbar fixed-top">

<ul class="nav nav-pills">


  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="../index.php">Accueil</a>
  </li>

  <li class="nav-item dropdown">

    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Friterie</a>
    <ul class="dropdown-menu">
     
      <li><a class="dropdown-item" href="#">Commander</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="../friterie/lacarte.php">La Carte</a></li>
      <li><hr class="dropdown-divider"></li>
      
      
      <li><hr class="dropdown-divider"></li>
       <li><a class="dropdown-item" href="../cv.php">Lien C.V</a></li>
       <li><hr class="dropdown-divider"></li>

    </ul>

  </li>
 </ul>


<ul class="nav justify-content-end">
<li  style="width: 190px; "class="nav-item dropdown">

  <?php if(!empty($_SESSION['pseudo'])){?>
  <?= $_SESSION['pseudo'];?>
</li>
<?php
}else{?>

   <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Se Connecter</a>     <ul class="dropdown-menu">
       
          <li><a class="dropdown-item" href="../login/sub.php">S'inscrire</a></li>
          <li><a class="dropdown-item" href="../login/login.php">Se connecter</a></li>
          
      
    </ul>
  </li>
</ul>
<?php} ?>



<?php
}
?>        
</ul>

</nav>