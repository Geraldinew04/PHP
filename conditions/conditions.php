<?php
	$chambre_est_sale = true;

	if ($chambre_est_sale == true){

		echo "Qu'est-ce qu'il se passe ? Pourquoi c'est rangé ? T'as quelque chose à nous demander ?";

	}else{

		echo "Tu vis dans une porcherie!";
	
	}


	$heure = date("G");

	if ($heure > '05:00' && $heure < '09:00') {

		echo "<br>Bonjour";
	
	}elseif($heure > '09:01'&& $heure < '16:00'){

		echo "<br>Bon après-midi";

	}elseif ($heure > '16:01' && $heure < '21:00') {
		
		echo "<br>Bonne soirée";

	}elseif($heure > '21:01' && $heure < '04:59'){

		echo "<br>Bonne nuit";
	}


	$age = isset($_GET['age']) ? $_GET['age'] : NULL;
	$sexe = isset($_GET['sexe']) ? $_GET['sexe'] : NULL;
	$langue = isset($_GET['langue']) ? $_GET['langue'] : NULL;
	$result_age = '';

	if ($sexe == "femme") {

		if ($langue == "francais") {

			if ($age < 12 && $age > 0){

				$result_age = "<br> Salut Petite";

			}elseif ($age > 12 && $age < 18) {
			
				$result_age =  "Salut l'adolescente";
			
			}elseif ($age > 18 && $age < 115) {
				
				$result_age = "Salut Madame";

			}elseif ($age > 115) {
				
				$result_age =  "WOW, toujours vivante ?";
			}

		}else{

			if ($age < 12 && $age > 0){

				$result_age = "<br> Hello Girl";

			}elseif ($age > 12 && $age < 18) {
			
				$result_age =  "Hello Teenage girl!";
			
			}elseif ($age > 18 && $age < 115) {
				
				$result_age = "Hello Lady!";

			}elseif ($age > 115) {
				
				$result_age =  "Wow! Still alive, old lady?";
			}

		}

	}else{

		if ($langue == "francais"){

			if ($age < 12 && $age > 0){

				$result_age = "<br> Salut Petit";

			}elseif ($age > 12 && $age < 18) {
			
				$result_age =  "Salut l'ado";
			
			}elseif ($age > 18 && $age < 115) {
				
				$result_age = "Salut l'adulte";

			}elseif ($age > 115) {
				
				$result_age =  "WOW, toujours vivant ?";
			}

		}else{

			if ($age < 12 && $age > 0){

				$result_age = "<br> Hello Boy";

			}elseif ($age > 12 && $age < 18) {
			
				$result_age =  "Hello Teenage Boy!";
			
			}elseif ($age > 18 && $age < 115) {
				
				$result_age = "Hello Sir!";

			}elseif ($age > 115) {
				
				$result_age =  "Wow! Still alive, old Man?";
			}
		}				
	}
?>

<?php

	$a = isset($_GET['note']) ? $_GET['note'] : NULL;
	$note = number_format($a, 1);

	if ($note >= 19) {

	 	echo "<br> Police ! Arrêtez ce tricheur";

	 }elseif ($note >= 15) {

	 	echo "<br> Bravo";

	}elseif ($note >= 11) {
		
		echo "<br> Pas mal";

	}elseif ($note == 10) {
		
		echo "<br> Tout juste";

	}elseif ($note >= 6) {
		
		echo "<br> Ce travail n'est pas terrible !";

	}elseif ($note >= 1) {
		
		echo "<br> Ce travail est nul";

	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exercices conditions</title>
</head>
<body>

	<form method="get" action="conditions.php">

	Quel âge avez-vous?	
	 
	 <input type="number" name="age">

	 <br>

	 Vous êtes ?
	 <br>
	 une femme 
	 <input type="radio" name="sexe" value="femme" id="femme">
	 <br>
	 un homme
	 <input type="radio" name="sexe" value="homme" id="homme">

	 <br>

	 Parles-tu anglais ?
	 <br>
	 oui
	 <input type="radio" name="langue" value="oui" id="oui">
	 <br>
	 non
	 <input type="radio" name="langue" value="non" id="non">

	 <?php

	 echo $result_age;

	 ?>
	 
	</form>

	
	<form method="get" action="conditions.php">

		Quelle note as-tu eu à ton contrôle ?
		<br>
		<input type="text" name="note">
		
	</form>



</body>
</html>