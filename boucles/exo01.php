<?php

	$pronoms_personnels = array ('Je', 'Tu', 'Il/Elle','Nous', 'Vous', 'Elles/Ils');



	foreach ($pronoms_personnels as $key => $value) {

		switch ($key) {
			case 0:
				echo $value . ' code <br>';
				break;
			case 1:
				echo $value . ' codes <br>';
				break;
			case 2 :
				echo $value . ' code <br>';
				break;
			case 3 : 
				echo $value . ' codons <br>';
				break;
			case 4 :
				echo $value . ' codez <br>';
				break;
			case 5 :
				echo $value . ' codent <br>';
				break;
			
			default:
				
				break;
		}

	
	

	}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Boucles foreach</title>
</head>
<body>

</body>
</html>