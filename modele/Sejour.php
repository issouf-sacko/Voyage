<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Sejour
 *
 * @author GMTE94
 */
class Sejour {

    //put your code here

    private $id;
    private $prix;
    private $dateDepart;
    private $duree;
    private $codeDestination;
    
    
            
    function getId() {
        return $this->id;
    }

    function getPrix() {
        return $this->prix;
    }

    function getDateDepart() {
        return $this->dateDepart;
    }

    function getDuree() {
        return $this->duree;
    }

    function getCodeDestination() {
        
        return Destination::getDestinationById($this->codeDestination);
    }


    function setId($id): void {
        $this->id = $id;
    }

    function setPrix($prix): void {
        $this->prix = $prix;
    }

    function setDateDepart($dateDepart): void {
        $this->dateDepart = $dateDepart;
    }

    function setDuree($duree): void {
        $this->duree = $duree;
    }

    function setCodeDestination($codeDestination): void {
        $this->codeDestination = $codeDestination;
    }

    
    public static function getSejour() {

        $req = MonPdo::getInstance()->prepare("select * from sejour");
        $req->setFetchMode(PDO::FETCH_OBJ);
        $req->execute();
        $lesResultats = $req->fetchAll();
        return $lesResultats;
    }
    
    public static function getSejourByDestination($codeDes) {

        $req = MonPdo::getInstance()->prepare("select * from sejour where codeDestination=:code");
        
        $req->setFetchMode(PDO::FETCH_OBJ);
        $req->execute(array(':code' =>$codeDes));
        $lesResultats = $req->fetchAll();
        return $lesResultats;
    }


}
