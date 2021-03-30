

<h1 class="text-center">Nos Sejours</h1>

<?php
            
            foreach ($maDestination as $uneDestination) {
               $photo=$uneDestination->getPhoto() ;        
            }
           
?>
<div class="container">
<div class="row">
<div class="col">
    <img class="card-img-top"  src="images/<?= $photo ?> "  alt="une Destination" id="imC">
<br>
<br>
<table class="table">
    <thead class="table-dark">
    <th>Prix</th>
    <th>Date de depart</th>
    <th>Duree</th>
    <th>Tenté ?</th>
    </thead>
    <tbody>
    <?php
    foreach ($lesSejours as $unSejour) {
		//gestion de l'affichage de la date
		$date=$unSejour->dateDepart ;
		$dateFr = new DateTime($date);
		
        ?>
        <tr>
			
            <td> <?php echo $unSejour->prix?> €</td>
		    <td> <?php echo $dateFr->format('d/m/Y')?></td>
            <td> <?php echo $unSejour->duree?></td>
            <td> <a href="index.php?uc=voyage&action=reservation&codeS=<?php echo $unSejour->id?>" class="btn btn-danger">Reserver </a></td>
            
        </tr>
                <?php
            }
            ?>
    </tbody>
</table>
</div>
</div>
</div>