

<div class="container">
    <div class="row" justify-content-center>

        <?php
            
            foreach ($lesdestination as $uneDestination) {
                ?>
                <div class="col">
            
            
                <div class="card" style="width: 15rem;">
                    <img class="card-img-top"  src="images/<?= $uneDestination->getPhoto() ?> "  alt="une Destination" id="imC">
                    <div class="card-body">
                        <h5 class="card-title"><?= $uneDestination->getLibelle()?></h5>
                        <a href="index.php?uc=voyage&action=sejour&code=<?= $uneDestination->getCode() ?>" class="btn btn-danger">Voir les sejours </a>
                    </div>
                </div>
            
        </div> 
        <?php
            }
            ?>
    </div>
</div>

