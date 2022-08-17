<?php require('../actions/navAction.php');?>
<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link active" href="#">Accueil</a>
  </li>

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Willems</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Maçonnerie</a>
      <a class="dropdown-item" href="#">Carrelage</a>
      <a class="dropdown-item" href="#">Faïllance</a>
      <a class="dropdown-item" href="#">Autres</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Separated link</a>
    </div>
  </li>



  <?php if( $_SESSION['auth'] = true)
  {
    ?>

  <li class="nav-item">
    <input type="text" name="email" placeholder="Email">
  </li>
  <li class="nav-item">
    <input type="text" name="mdp" placeholder="Password">
  </li>
  <li class="nav-item">
<button type="submit" name="valider">Envoyer</button>
  </li>

  <?php 
  }
  else
  {
  ?>

<li class="nav-item">
    <a class="nav-link" href="/form/sub.php">S'inscrire</a>
  </li>
  
  <?php}  ?>

</ul>