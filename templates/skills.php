<?php
$requete = $_Get['res'];
$reponse = '';

if($requete == 'Martin'){
    $reponse = "c'est Martin";
}

echo '<br><br><h1>' .$reponse.' ! </h1>';