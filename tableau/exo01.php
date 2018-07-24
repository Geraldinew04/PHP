
<?php

$family = ['Papsou', 'Mamsou', 'Bichon', 'Ge', 'Doud', 'Anna', 'Louis'];

echo '<pre>';
print_r($family);
echo '<pre>';

$food = ['guacamole', 'pizza', 'pasta', 'burger', 'fruit'];

echo '<pre>';
print_r($food);
echo '<pre>';

$film_tv = ['Peaky Blinders', 'Game of Thrones', 'Narcos', 'Inception', 'Lord of the rings'];

echo '<pre>';
print_r($film_tv[0]);
echo '<pre>';

$papa = [
	'firstname' => 'Alain',
	'lastname' => 'Winand',
	'age' => 63,
	'city' => 'Durbuy',
	'sportive' => true,
	'hobbies' => array('tennis', 'travel', 'food', 'rotary'),
];
var_dump(count($papa['hobbies']));

$moi = [
	'firstname' => 'Geraldine',
	'lastname' => 'Winand',
	'age' => 32,
	'city' => 'Liege',
	'sportive' => false,
	'hobbies' => array('tv_shows', 'travel', 'food', 'festivals'),
	'papa' => $papa
];
var_dump(count($moi['hobbies']));
$moi['hobbies'][] = 'taxidermie';
$moi['lastname'] = 'Dieudonne';
echo $moi['lastname'];

echo '<pre>';
print_r($moi);
echo '</pre>';

$sum_hobbies = count($papa['hobbies']) + count($moi['hobbies']);
echo $sum_hobbies;
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