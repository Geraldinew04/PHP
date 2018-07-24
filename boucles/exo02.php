<?php
		$nombre_while = 1;

	while ( $nombre_while <= 120) 
	{
		echo $nombre_while . '<br>';
		$nombre_while++;
	}


	$nombre_for = 1;

	for ($nombre_for = 1; $nombre_for < 120; $nombre_for++) { 
		echo $nombre_for . '<br>';
	}

	$johnson = ['Adrien', 'Thibault', 'Guillaume', 'Cédric', 'Charlotte', 'Massimo', 'Cookie', 'Alex', 'Jesse', 'JF', 'Geraldine', 'Ajay', 'Marie', 'Colombe'];

	foreach ($johnson as &$value) {
	
		echo '<pre>';
		print_r($value);
		echo '</pre>';
	}


?>