
<?php

	$web_development = [ 
					'front_end' => array(),
					'back_end' => array(),
	];

	$web_development['front_end'][] = 'xhtml';
	$web_development['back_end'][] = 'Ruby on Rails';
	$web_development['front_end'][] = 'CSS';
	$web_development['back_end'][] = 'Flash';
	$web_development['back_end'][] = 'JavaScript';

	$web_development['front_end'][0] = 'html';

	unset($web_development['back_end'][1]);


	echo '<pre>';
	print_r($web_development);
	echo '</pre>';




?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Array</title>
</head>
<body>

</body>
</html>