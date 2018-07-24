
<?php

	$pays = ['Belgium', 'UK', 'Australia', 'Peru', 'France', 'Portugal', 'Canada', 'Japan', 'South Africa', 'Russia'];

	$pays2 = [
			'BE' => 'Belgium',
			'BG' => 'UK',
			'AU' => 'Australia',
			'PE' => 'Peru',
			'FR' => 'France',
			'PT' => 'Portugal',
			'CA' => 'Canada',
			'JP' => 'Japan',
			'ZA' => 'South Africa',
			'RU' => 'Russia'
	]


?>


<!DOCTYPE html>
<html>
<head>
	<title>boucle While</title>
</head>
<body>
	<div class="main_container">

		<form method="get" action="pays.php">

			<label>Dans quel pays aimerais-tu voyager ?</label> 
	 	 	<!-- <select class="form-control" name="grade">
		  		<option value="belgium">Belgium</option>
		  		<option value="england">England</option>
		  		<option value="australia">Australia</option>
		  		<option value="peru">Peru</option>
		  		<option value="france">France</option>
		  		<option value="portugal">Portugal</option>
		  		<option value="canada">Canada</option>
		  		<option value="japan">Japan</option>
		  		<option value="southafrica">South Africa</option>
		  		<option value="russia">Russia</option>
			</select> -->

			<?php 

				echo "<select name='country'>";
				foreach ($pays as $value) {
					
					echo "<option>" .$value . "</option>";
				
				}
				echo "</select>";

				echo "<select name='country2'>";
				foreach ($pays2 as $key => $value) {
					
					echo "<option value=' " . $key . " '>" .$value . "</option>";
				
				}
				echo "</select>";

			?>

			 <button type="submit" class="btn btn-danger disabled" aria-disabled="true">Valider</button>

		 </form>

	</div>

</body>
</html>