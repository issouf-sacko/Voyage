<?php


class Reservation {

    private $id;
    private $codeSejour;
    private $codeClient;
    private $dateReservation;
    private $nbPersonne;
    
    function getId() {
        return $this->id;
    }

    function getCodeSejour() {
        return $this->codeSejour;
    }

    function getCodeClient() {
        return $this->codeClient;
    }

    function getDateReservation() {
        return $this->dateReservation;
    }

    function getNbPersonne() {
        return $this->nbPersonne;
    }


    function setId($id): void {
        $this->id = $id;
    }

    function setCodeSejour($codeSejour): void {
        $this->codeSejour = $codeSejour;
    }

    function setCodeClient($codeClient): void {
        $this->codeClient = $codeClient;
    }

    function setDateReservation($dateReservation): void {
        $this->dateReservation = $dateReservation;
    }

    function setNbPersonne($nbPersonne): void {
        $this->nbPersonne = $nbPersonne;
    }


     public static function getReservavation() {

        $req = MonPdo::getInstance()->prepare("select * from reservation");
        
        $req->setFetchMode(PDO::FETCH_OBJ);
        $req->execute();
        $lesResultats = $req->fetchAll();
        return $lesResultats;
    }
    
    
    public static function getReservavationById($id) {

        $req = MonPdo::getInstance()->prepare("select * from reservation where codeDestination=:code");
        
        $req->setFetchMode(PDO::FETCH_OBJ);
        $req->execute(array(':code' =>$id));
        $lesResultats = $req->fetchAll();
        return $lesResultats;
    }
	
	public static function enregisterReservation($codeS, $codeC, $date, $nb){
		
		 $req=MonPdo::getInstance()->prepare("insert into reservation( codeSejour, codeClient, dateReservation, nbPersonnes) values(:codeS, :codeC, :date, :nb)") ;
      
        $req->bindParam('codeS', $codeS);
 
        $req->bindParam('codeC', $codeC);
  
        $req->bindParam('date', $date);
		
		$req->bindParam('nb', $nb);
       
        $nb=$req->execute();
        $_SESSION['alert']="la réservation est enregistrée ! Merci :)" ;
        return $_SESSION['alert'] ;
	}
	
	
	public static function voirReservation(){
		 $req = MonPdo::getInstance()->prepare("select nom, prenom, libelle, reservation.id as idResa, dateReservation, nbPersonnes,prix, dateDepart, duree from destination join sejour on destination.code=sejour.codeDestination join reservation on sejour.id=reservation.codeSejour join client on client.id=reservation.codeClient order by reservation.id desc limit 1");
        
        $req->setFetchMode(PDO::FETCH_OBJ);
        $req->execute();
        $lesResultats = $req->fetch();
        return $lesResultats;
	}
}
