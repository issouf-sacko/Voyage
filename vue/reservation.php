    <div class="container">
	<div class="row">
	<div class="col-6">
        <form name="reservation" action="index.php?uc=voyage&action=validerReservation"  method="POST">

                <label for="nom" class="form-label"> Nom :</label>
                <input type="text" name="nom" id="nom" placeholder="votre nom" required class="form-control">
				
                <label for="prenom" class="form-label"> Prenom :</label>
                <input type="text" name="prenom" id="prenom"  placeholder="Prénom "  required class="form-control">
            
                <label class="form-label"> Adresse:</label>
                <input type="text" name="adresse" required placeholder=" ex : 123 rue des plantes" class="form-control">
           
                <label for="cp" class="form-label"> Code Postal :</label>
                <input type="text" name="cp" id="cp" placeholder="ex: 94 230" required="required" class="form-control">
               
			   <label for="ville" class="form-label"> Ville :</label>
                <input type="text" name="ville" id="ville" placeholder="ville"  required class="form-control">
          
                <label for="mail" class="form-label">Mail</label>
                <input name="email" type="email" class="form-control" id="mail" placeholder="toto@example.com" class="form-control">

                <label class="form-label"> Téléphone:</label>
                <input type="text" name="tel" required class="form-control">
         
                <label class="form-label"> Nombre de personne :</label>
                <input type="number" name="nb" required class="form-control">
				
				<input type="hidden" name="codeS" value="<?php echo $_GET["codeS"]?>">
            </p>
            <br>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Réserver</button>
            </div>

        </form>
    </div>
</section>