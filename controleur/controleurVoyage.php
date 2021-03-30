<?php

$action = $_GET['action']; //action=? dans lurl

switch ($action) {
    case "sejour":
        $lesSejours = Sejour::getSejourByDestination($_GET['code']);
        $maDestination = Destination::getDestinationPhoto($_GET['code']);
        
        require 'vue/lesSejour.php';
        break;
    
    
    
    case "reservation": 
      
        require 'vue/reservation.php';
        break;
		
    case "validerReservation": 
        extract($_POST) ;
		
        Client::ajouter($nom, $prenom, $adresse,  $cp, $ville, $tel, $email) ;
		$client=Client::dernierClient();
		
		Reservation::enregisterReservation($codeS, $client->idMax, date('Y-m-d'), $nb) ;
    
		$resa=Reservation::voirReservation() ;
	
        require 'vue/reservationOK.php';
        break;
}