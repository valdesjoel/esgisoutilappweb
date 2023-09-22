<?php 

?>  

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap-3.4.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Ajouter Etudiant</title>
</head>
<body>
    
    <form action="" class="container col-md-6 col-xs-12 col-md-offset-3 espaceur">
        <h1 class="">Ajouter un Etudiant</h1>
        <div>
            <label class="control-label" for="nom">Nom:</label>
            <input class="form-control" type="text" name="nom" placeholder="Entrer votre nom" >
        </div>


        <div>
            <label class="control-label" for="prenom">Prenom:</label>
            <input class="form-control" type="text" name="prenom" placeholder="Entrer votre prénom">
        </div>
        <div>
            <label class="control-label" for="mail">Email:</label>
            <input class="form-control" type="text" name="mail" placeholder="example@mail.com">
        </div>
        <div>
            <label class="control-label" for="dateNaissance">Date de Naissance:</label>
            <input class="form-control" type="date" name="dateNaissance">
        </div>
        <div class="form-check">
            <label class="form-check-label" for="sexe">Sexe:</label>
            <input class="form-check-input" type="radio" name="sexe">Homme
            <input class="form-check-input" type="radio" name="sexe">Femme
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</body>
</html>