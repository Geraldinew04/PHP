<?php

	$a = isset($_GET['note']) ? $_GET['note'] : NULL;
	$note = number_format($a, 1);

	switch ($note) {
		case 1 :
		case 2 :
		case 3 :  
			echo "Ce travail est nul !";
			break;
		case 4 :
		case 5 :
		case 6 :
		case 7 :
		case 8 :
		case 9 : 
			echo "Ce travail n'est pas terrible";
			break;
		case 10 : 
			echo "Tout juste";
			break;
		case 11 :
		case 12 :
		case 13 :
		case 14 :  
			echo "Pas mal";
			break;
		case 15 :
		case 16 :
		case 17 :
		case 18 : 
			echo "Bravo !";
		case 19 :
		case 20 : 
			echo "Police ! Arrêtez ce tricheur !";
			break;
		default :
			break;
	}

	$sexe = isset($_GET['sexe']) ? $_GET['sexe'] : NULL;
	$age = isset($_GET['age']) ? $_GET['age'] : NULL;
	$message = "Désolé, vous ne remplissez pas les critères de sélection.";


	if ($sexe == 'femme' && $age > 20 && $age < 41) {
		$message = "Bravo, vous remplissez les critères de sélection";
	}
		echo $message;
	
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulaire</title>
</head>
<body>

	<form method="get" action="conditions-switch.php">

		Quelle note as-tu eu à ton contrôle ?
		<br>
		<input type="text" name="note">
		
	</form>

		<form method="get" action="conditions-switch.php">

			Votre genre :
			<br>
			 une femme 
			 <input type="radio" name="sexe" value="femme" id="femme">
			 <br>
			 un homme
			 <input type="radio" name="sexe" value="homme" id="homme">

			 <br>

			 votre âge : 
			 <input type="number" name="age">
			
		</form>

</body>
</html>