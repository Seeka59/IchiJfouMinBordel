<?php
if(isset($_POST['calculer']))
{
    if(!empty($_POST["m²"])&&!empty($_SESSION["email"]))
    {
        $mC=htmlspecialchars($_POST["m²"]);
        
    }
}