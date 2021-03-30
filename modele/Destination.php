<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Destination
 *
 * @author GMTE94
 */
class Destination {
    //put your code here
    
    private  $code;
    private $libelle;
    private $photo;
    
    function getCode() {
        return $this->code;
    }

    function getLibelle() {
        return $this->libelle;
    }

    function getPhoto() {
        return $this->photo;
    }


    function setCode($code): void {
        $this->code = $code;
    }

    function setLibelle($libelle): void {
        $this->libelle = $libelle;
    }

    function setPhoto($photo): void {
        $this->photo = $photo;
    }


    public static function afficherTous() {

        $req = MonPdo::getInstance()->prepare("select * from destination");
        $req->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'destination');
        $req->execute();
        $lesResultats = $req->fetchAll();
        return $lesResultats;
    }
    
     public static function getDestinationById($codeDes) {

        $req = MonPdo::getInstance()->prepare("select * from destination where code=:code");
        $req->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'destination');
        $req->execute(array(':code' =>$codeDes));
        $lesResultats = $req->fetchAll();
        return $lesResultats;
    }
    
     public static function getDestinationPhoto($codeDes) {

        $req = MonPdo::getInstance()->prepare("select photo from destination where code=:code");
        $req->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'destination');
        $req->execute(array(':code' =>$codeDes));
        $lesResultats = $req->fetchAll();
        return $lesResultats;
    }
    
    
}
