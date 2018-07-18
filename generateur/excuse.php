<?php



?>


<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Générateur d'excuses</title>
</head>
<body>

	<form method="get" action="excuse.php">

		Nom de l'enfant : 
		<br>
			<input type="text" name="name">
		<br>

		Genre :

		<br>
			<input type="radio" name="sexe" value="garcon">
			Garçon
			<br>
			<input type="radio" name="sexe" value="fille">
			Fille
		<br>

		Nom du professeur :
		<br>
			<input type="text" name="name">
		<br>

		Raisons de l'absence : 
		<br>
			<input type="radio" name="absence" value="maladie">
			Maladie
			<br>
			<input type="radio" name="absence" value="décès">
			Décès
			<br>
			<input type="radio" name="absence" value="activité">
			Activité extra-scolaire importante
			<br>
			<input type="radio" name="absence" value="envie">
			Pas envie de venir	

			<br>

			<input type="submit" name="button">

	</form>


</body>
</html>