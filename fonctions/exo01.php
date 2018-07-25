
<?php

	function uppercsing($input) {
    	echo ucfirst($input);
  	}
  		echo uppercsing('emile');

	$FName =isset($_POST['firstname']) ? $_POST['firstname'] : NULL;;
	$FName = ucfirst($FName);
	echo "<pre>";
	echo $FName;
	echo "</pre>";


	echo "<pre>";
	echo date("Y");
	echo "</pre>";

	echo "<pre>";
	echo date('d F Y  H:i:s');
	echo "</pre>";

	function sum($number1,$number2){	

		if (is_int($number1) == true && is_int($number2) == true) {
			return $result = $number1 + $number2;
		}else{
			echo "ERROR";
		}
	}

	echo "<pre>";
	echo sum(9,9);
	echo "</pre>";
 
 	function acronyme($string){

 		$words = explode(" ", $string);
 		$initiale = '';
 
			foreach($words as $init){
				$initiale .= $init{0};
		    }
		    return strtoupper($initiale);
 	}

 	echo "<pre>";
	echo acronyme("In code we trust");
	echo "</pre>";

	function replace_ae($string){

		return str_replace('ae','æ',$string);

	}

	echo "<pre>";
	echo replace_ae("caecotrophie") . replace_ae(" chaenichthys") .  replace_ae(" microsphaera") . replace_ae(" sphaerotheca");
	echo "</pre>";
 	
 	function replace_æ($string){

		return str_replace('æ','ae',$string);

	}

	echo "<pre>";
	echo replace_æ("cæcotrophie") . replace_æ(" chænichthys") . replace_æ(" microsphæra") . replace_æ(" sphærotheca") ;
	echo "</pre>";

	function feedback($message,$class){

		return "<div class='" . $class . "'>" . $message . "</div>";
	}
	

	echo "<pre>";
	echo feedback("adresse email incorrecte","warning");
	echo "</pre>";
	

	function feedback2($message, $class = "info"){

		return "<div class='" . $class . "'>" . $message . "</div>";
	}

	echo "<pre>";
	echo feedback2("blabla");
	echo "</pre>";
	


	function minuscule($string){
		$result = mb_strtolower($string);
		return $result;
	}

	echo "<pre>";
	echo minuscule("ARRÊTE DE CRIER JE N'ENTENDS PLUS RIEN!!!"); 
	echo "</pre>";
	
	

// 	// Calcul du volume d'un cône de rayon 5 et de hauteur 2  
// $volume = 5 * 5 * 3.14 * 2 * (1/3);  
// echo 'Le volume du cône de rayon 5 et de hauteur 2 est : ' . $volume . ' cm<sup>3</sup><br />';  
// // Calcul du volume d'un cône de rayon 3 et de hauteur 4  
// $volume = 3 * 3 * 3.14 * 4 * (1/3);  
// echo 'Le volume du cône de rayon 3 et de hauteur 4 est : ' . $volume . ' cm<sup>3</sup><br />';

  function volume_dun_cone($rayon, $hauteur) {
    $volume = pow($rayon, 2) * pi() * $hauteur * (1/3);
    return $volume;
  }

?>



<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Fonctions</title>

<form method="post" action="exo01.php">
  
  <input type="text" class="form-control" name="firstname" placeholder="First Name" ">
  <br><br>

  <input type="submit" value="Submit">
</form> 


</head>
<body>

</body>
</html>