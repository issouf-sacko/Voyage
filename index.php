<?php
session_start();
require "vue/header.php" ;
require 'modele/monPdo.php';
require 'modele/Destination.php';
require 'modele/Sejour.php';
require 'modele/Client.php';
require 'modele/Reservation.php';

if(empty($_GET['uc'])) //pas de parametres dans l'url
{
    $uc="accueil";
}

else{
    $uc=$_GET['uc'];//on recupere les parametres de l'url
}

switch($uc){
    
    case "accueil"://uc=accueil
        $lesdestination = Destination::afficherTous(); //on passe lesProduits à listeProduits
        require 'Vue/accueil.php';
        break;
    case "voyage"://uc=accueil
        $lesdestination = Destination::afficherTous(); //on passe lesProduits à listeProduits
        require './controleur/controleurVoyage.php';
        break;
    
    
}
?>


