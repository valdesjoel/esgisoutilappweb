<!DOCTYPE html>
<html>
<head>
	<title>Formulaire</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Formulaire d'inscription</h1>
	<form>
		<div>
			<label>Nom:</label>
			<input type="text" name="">
		</div>
		<div>
			<label>Prenom:</label>
			<input type="text" name="">
		</div>
		<div>
			<label>E-Mail:</label>
			<input type="email" name="">
		</div>
		<div>
			<label>Date de Naissance:</label>
			<input type="date" name="">
		</div>
		<div>
			<label>Sexe :</label>
			<input type="radio" name="sexe">H
			<input type="radio" name="sexe">F
		</div>
		<div>
			<label>Filiere</label>
			<select>
				<option>SG</option>
				<option>DAF</option>
				<option selected>IIRT</option>
			</select>
		</div>
		<div>
			<label>Matieres</label>
			<input type="checkbox" name="">Reseaux
			<input type="checkbox" name="">Programmation
			<input type="checkbox" name="">Securite
		</div>
		<div>
			<label>Dernier Bulletin</label>
			<input type="file" name="">
		</div>
		<input type="submit" value="Envoyer" name="">
		<input type="reset" value="Annuler" name="">
	</form>

</body>
</html>