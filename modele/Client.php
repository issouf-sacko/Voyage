<?php

class Client {
    //put your code here
    
    private $nom;
    private $prenom;
    private $adresse;
    private $cp;
    private $ville;
    private $mail;
    private $telephone;
    
    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getAdresse() {
        return $this->adresse;
    }

    function getCp() {
        return $this->cp;
    }

    function getVille() {
        return $this->ville;
    }

    function getMail() {
        return $this->mail;
    }

    function getTelephone() {
        return $this->telephone;
    }


    function setNom($nom): void {
        $this->nom = $nom;
    }

    function setPrenom($prenom): void {
        $this->prenom = $prenom;
    }

    function setAdresse($adresse): void {
        $this->adresse = $adresse;
    }

    function setCp($cp): void {
        $this->cp = $cp;
    }

    function setVille($ville): void {
        $this->ville = $ville;
    }

    function setMail($mail): void {
        $this->mail = $mail;
    }

    function setTelephone($telephone): void {
        $this->telephone = $telephone;
    }


    function __construct($nom, $prenom, $adresse, $cp, $ville, $mail, $telephone) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresse = $adresse;
        $this->cp = $cp;
        $this->ville = $ville;
        $this->mail = $mail;
        $this->telephone = $telephone;
    }

     public static function securiser($donnees) {
        $donnees = trim($donnees);
        $donnees = stripslashes($donnees);
        $donnees = htmlspecialchars($donnees);
        return $donnees;
    }

    public static function ajouter($nom, $prenom, $adresse, $cp, $ville, $tel, $email) {
        $req = MonPdo::getInstance()->prepare("insert into client(nom, prenom,adresse,cp,ville, tel, mail ) values(:nom,:prenom,:adresse,:cp, :ville, :tel, :email)");
        $req->bindParam('nom', $nom);
        $req->bindParam('prenom', $prenom);
		$req->bindParam('adresse', $adresse);
		$req->bindParam('cp', $cp);
        $req->bindParam('ville', $ville);
		$req->bindParam('tel', $tel);
        $req->bindParam('email', $email);
        $nb = $req->execute();
        $_SESSION['alert'] = "Client ajouté";

        return $_SESSION['alert'];
    }
	
	public static function dernierClient()
	{
		$req = MonPdo::getInstance()->prepare("select max(id) as idMax from client") ;
		$req->setFetchMode(PDO::FETCH_OBJ);
        $req->execute();
        $leResultat = $req->fetch();
        return $leResultat;
		
	}
 }
