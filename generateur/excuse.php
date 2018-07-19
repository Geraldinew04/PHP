<?php
	
	// $student = isset($_POST['eleve']) ? $_POST['eleve'] : NULL;
	@$student = filter_var($_POST['eleve'], FILTER_SANITIZE_STRING);
	$sexe = isset($_POST['sexe']) ? $_POST['sexe'] : NULL;
	@$teacher = filter_var($_POST['nameTeacher'], FILTER_SANITIZE_STRING);
	$excuse = isset($_POST['absence']) ? $_POST['absence'] : NULL;
	$date = date('d/m/Y') ;
	$result_excuse = '';
	
	$array_fille_maladie = ['Professeur '. $teacher . ', ma fille ' . $student . " sera absente ce " . $date . " pour cause de 										maladie. Cordialement, " , 
							'Professeur ' . $teacher . ', ma fille ' . $student . " sera absente ce " . $date . " car elle a attrapé un rhume lors de notre randonnée familiale ce weekend. Vous remerciant d'avance pour votre compréhension, je vous prie de bien vouloir accepter mes salutations.", 
							'Professeur ' . $teacher . ', ma fille ' . $student . " sera absente ce " . $date . " car elle a attrapé la varicelle.Vous remerciant d'avance pour votre compréhension, je vous prie de bien vouloir accepter mes salutations. ",
							'Professeur ' . $teacher . ', ma fille ' . $student . " sera absente ce " . $date . " car elle est hospitalisée suite à une appendicite. Cordialement, ",
							'Professeur '. $teacher . ', ma fille ' . $student . " sera absente ce " . $date . ". Elle s'est luxée l'épaule suite à une chute dans les escaliers. Cordialement, "
						];

	$array_boy_maladie = ['Professeur '. $teacher . ', mon fils ' . $student . " sera absent ce " . $date . " pour cause de maladie. 								Cordialement, " , 
							'Professeur ' . $teacher . ', mon fils ' . $student . " sera absent ce " . $date . " car il a attrapé un rhume lors de notre randonnée familiale ce weekend. Vous remerciant d'avance pour votre compréhension, je vous prie de bien vouloir accepter mes salutations.", 
							'Professeur ' . $teacher . ', mon fils ' . $student . " sera absent ce " . $date . " car il a attrapé la varicelle.Vous remerciant d'avance pour votre compréhension, je vous prie de bien vouloir accepter mes salutations. ",
							'Professeur ' . $teacher . ', mon fils ' . $student . " sera absent ce " . $date . " car il est hospitalisé suite à une appendicite. Cordialement, ",
							'Professeur '. $teacher . ', mon fils ' . $student . " sera absent ce " . $date . ". Il s'est luxée l'épaule suite à une chute dans les escaliers. Cordialement, "
						] ;

	$array_fille_deces = ['Professeur '. $teacher . ', ma fille ' . $student . " sera absente ce " . $date . " car notre chat Popcorn est mort 							écrasé par un bus. Cordialement,",
						   'Professeur '. $teacher . ', ma fille ' . $student . " sera absente ce " . $date . " suite au suicide de notre lapin Pampan. Cordialement,",
						   'Professeur '. $teacher . ', ma fille ' . $student . " sera absente ce " . $date . " car notre chat Popcorn a assassiné notre canari Titi en le dévorant pendant la nuit.",
						   'Professeur '. $teacher . ', ma fille ' . $student . " sera absente ce " . $date . " car notre poisson Globule est mort noyé. Cordialement,",
						   'Professeur '. $teacher . ', ma fille ' . $student . " sera absente ce " . $date . " suite au décès du chien de la copine de la voisine. Cordialement,"
						];

	$array_boy_deces = ['Professeur '. $teacher . ', mon fils ' . $student . " sera absent ce " . $date . " car notre chat Popcorn est mort 						écrasé par un bus. Cordialement,",
						   'Professeur '. $teacher . ', mon fils ' . $student . " sera absent ce " . $date . " suite au suicide de notre lapin Pampan. Cordialement,",
						   'Professeur '. $teacher . ', mon fils ' . $student . " sera absent ce " . $date . " car notre chat Popcorn a assassiné notre canari Titi en le dévorant pendant la nuit.",
						   'Professeur '. $teacher . ',mon fils ' . $student . " sera absent ce " . $date . " car notre poisson Globule est mort noyé. Cordialement,",
						   'Professeur '. $teacher . ', mon fils ' . $student . " sera absent ce " . $date . " suite au décès du chien de la copine de la voisine. Cordialement,"
						];

	$array_fille_activite = ['Professeur '. $teacher . ', ma fille ' . $student . " sera absente ce " . $date . " car elle doit 									participer au tournois de cerf-volant en salle, actvité extra-scolaire qu'elle ne peut manquer car, 								comme vous le savez, elle est le capitaine de l'équipe. Cordialement,",
							'Professeur '. $teacher . ', ma fille ' . $student . " sera absente ce " . $date . " car elle doit participer au tournois de poker. Cordialement,",
							'Professeur '. $teacher . ', ma fille ' . $student . " sera absente ce " . $date . " car elle doit participer au championnat du monde de la sieste. Cordialement,",
							'Professeur '. $teacher . ', ma fille ' . $student . " sera absente ce " . $date . " car elle doit participer à une activité extra-scolaire. Cordialement,",
							'Professeur '. $teacher . ', ma fille ' . $student . " sera absente ce " . $date . " car elle doit participer à la cueillette des champignons annuelle. Cordialement,",
						];

	$array_boy_activite = ['Professeur '. $teacher . ', mon fils ' . $student . " sera absent ce " . $date . " car il doit participer au 							tournois de cerf-volant en salle, actvité extra-scolaire qu'elle ne peut manquer car, comme vous le savez, 							il est le capitaine de l'équipe. Cordialement,",
							'Professeur '. $teacher . ', mon fils ' . $student . " sera absent ce " . $date . " car il doit participer au tournois de poker. Cordialement,",
							'Professeur '. $teacher . ', mon fils ' . $student . " sera absent ce " . $date . " car il doit participer au championnat du monde de la sieste. Cordialement,",
							'Professeur '. $teacher . ', mon fils ' . $student . " sera absent ce " . $date . " car il doit participer à une activité extra-scolaire. Cordialement,",
							'Professeur '. $teacher . ', mon fils ' . $student . " sera absent ce " . $date . " car il doit participer à la cueillette des champignons annuelle. Cordialement,",
						];

	$array_fille_envie = ['Professeur '. $teacher . ', ma fille ' . $student . " sera absente ce " . $date . " car elle a décidé qu'elle n'avait 				pas envie de se rendre aux cours, elle paie de la veille",
						  'Professeur '. $teacher . ', ma fille ' . $student . " sera absente ce " . $date . " car je n'avais pas envie de la conduire et elle n'avait pas envie de prendre le bus. Merci pour votre compréhension." ,
						  'Professeur '. $teacher . ', ma fille ' . $student . " sera absente ce " . $date . ", son réveil n'ayant pas sonné. Cordialement." ,
						  'Professeur '. $teacher . ', ma fille ' . $student . " sera absente ce " . $date . " car elle préfère rester à la maison chiller devant Netflix. Merci pour votre compréhension." ,
						  'Professeur '. $teacher . ', ma fille ' . $student . " sera absente ce " . $date . " car n'a pas envie de passer l'interro de math, elle n'a pas eu assez de temps pour réviser. Cordialement,." 
						];

	$array_boy_envie = ['Professeur '. $teacher . ', mon fils ' . $student . " sera absente ce " . $date . " car elle a décidé qu'elle n'avait 						pas envie de se rendre aux cours, elle paie de la veille",
						  'Professeur '. $teacher . ',mon fils ' . $student . " sera absente ce " . $date . " car je n'avais pas envie de la conduire et elle n'avait pas envie de prendre le bus. Merci pour votre compréhension." ,
						  'Professeur '. $teacher . ',mon fils ' . $student . " sera absente ce " . $date . ", son réveil n'ayant pas sonné. Cordialement." ,
						  'Professeur '. $teacher . ', mon fils ' . $student . " sera absente ce " . $date . " car elle préfère rester à la maison chiller devant Netflix. Merci pour votre compréhension." ,
						  'Professeur '. $teacher . ', mon fils' . $student . " sera absente ce " . $date . " car n'a pas envie de passer l'interro de math, elle n'a pas eu assez de temps pour réviser. Cordialement,." 
						];

	$rand_fille_excuse_maladie = array_rand($array_fille_maladie,1);
	$rand_boy_excuse_maladie = array_rand($array_boy_maladie,1);

	$rand_fille_excuse_deces = array_rand($array_fille_deces,1);
	$rand_boy_excuse_deces = array_rand($array_boy_deces,1);

	$rand_fille_excuse_activite = array_rand($array_fille_activite,1);
	$rand_boy_excuse_activite = array_rand($array_boy_activite,1);

	$rand_fille_excuse_envie = array_rand($array_fille_envie,1);
	$rand_boy_excuse_envie = array_rand($array_boy_envie,1);


	if ($sexe == 'fille') {
		
		if ($excuse == 'maladie') {
			
			$result_excuse = $array_fille_maladie[$rand_fille_excuse_maladie];

		}elseif ($excuse == 'deces') {
			 
			$result_excuse = $array_fille_deces[$rand_fille_excuse_deces] ;

		}elseif ($excuse == 'activite') {
			
			$result_excuse = $array_fille_activite[$rand_fille_excuse_activite];

		}elseif ($excuse == 'envie') {
			
			$result_excuse = $array_fille_envie[$rand_fille_excuse_envie];
		}
	
	}else{

		if ($excuse == 'maladie') {
			
			$result_excuse = $array_boy_maladie[$rand_boy_excuse_maladie];

		}elseif ($excuse == 'deces') {
			
			$result_excuse = $array_boy_deces[$rand_boy_excuse_deces];

		}elseif ($excuse == 'activité') {
			
			$result_excuse = $array_boy_activite[$rand_boy_excuse_activite];

		}elseif ($excuse == 'envie') {
			
			$result_excuse = $array_boy_envie[$rand_boy_excuse_envie];
		}

	}


?>


<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Générateur d'excuses</title>
	<link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	

	 	<div class="title">
	 		<h1>Générateur d'excuses</h1>
	 	</div>

	 	 <div class="myform">
	 	
			<form method="post" action="excuse.php">

				<div class="studentName">
					<p>Nom de l'enfant :</p>
					<input type="text" name="eleve">
				</div>
				 
				<div class="sex">
					<p>	Genre :</p>
						<input type="radio" name="sexe" value="garcon">
					 	Garçon
					 	<input type="radio" name="sexe" value="fille">
						Fille
				</div>
		
				<div class="teacherName">
					<p>Nom du professeur :</p>
					<input type="text" name="nameTeacher">
				</div>
				
				<div class="absence">
					<p>Raisons de l'absence : </p>
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

				</div>

				<div class="button">
					<input type="submit" name="button">
				</div>
					
				
					<?php
						echo $result_excuse;
					?>
			</form>
	</div>


</body>
</html>