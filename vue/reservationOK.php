<?php
//gestion de l'affichage de la date
		$date=$resa->dateDepart ;
		$dateFr = new DateTime($date);
		$date=$dateFr->format('d/m/Y') ;
echo "<div class='alert alert-info' role='alert'>

 Cher $resa->prenom $resa->nom, votre réservation pour $resa->nbPersonnes personnes $resa->libelle, pour une durée de $resa->duree jours est confirmée ! <br><br> " ;
                                    echo "Vous partirez le ". $date ."<br>" ;
									$prixTotal=$resa->prix * $resa->nbPersonnes ;
                                    echo "Prix total : $prixTotal € <br>" ;
                                    echo "Votre numéro de réservation est RESA". $resa->idResa ."<br></div>";
                                    
                                            echo "<h1>Nous vous souhaitons un excellent séjour </h1>" ;
											?>