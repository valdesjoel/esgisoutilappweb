<?php 

?>  

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="1">
    <link rel="stylesheet" href="css/bootstrap-3.4.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Ajouter Etudiant</title>
</head>
<body>
    <div class="container col-md-6 col-xs-12 col-md-offset-3 espaceur">
		<div class="panel panel-default">
			<div class="panel-heading">
				AJOUTER UN ETUDIANT
			</div>
			<div class="panel-body">
				<form action="">
                    <div class="form-group">
                        <label class="control-label" for="nom">Nom:</label>
                        <input class="form-control" type="text" name="nom" placeholder="Entrer votre nom" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="prenom">Prenom:</label>
                        <input class="form-control" type="text" name="prenom" placeholder="Entrer votre prénom" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="mail">Email:</label>
                        <input class="form-control" type="text" name="mail" placeholder="example@mail.com">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="dateNaissance">Date de Naissance:</label>
                        <input class="form-control" type="date" name="dateNaissance">
                    </div>
                    <div class="form-group">
                        <label class="form-check-label" for="sexe">Sexe:</label><br>
                        <input class="form-check-input" type="radio" name="sexe" value="Homme"> Homme
                        <input class="form-check-input" type="radio" name="sexe" value="Femme"> Femme
                    </div>
                    <div class="container-fluid b">
                        <button class="btn btn-success  btn-block" type="submit">SAVE</button>
                    </div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>