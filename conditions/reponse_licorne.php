<?php
	
	$genre = isset($_POST['genre']) ? $_POST['genre'] : NULL;


	$human = "<iframe src='https://giphy.com/embed/l46Cj9QLmsgtR3qsU' width='480' height='256' frameBorder='0' class='giphy-embed' allowFullScreen></iframe><p><a href='https://giphy.com/gifs/nicki-minaj-human-being-im-a-l46Cj9QLmsgtR3qsU'></a></p>";
	$cat = "<iframe src='https://giphy.com/embed/JIX9t2j0ZTN9S' width='480' height='480' frameBorder='0' class='giphy-embed' allowFullScreen></iframe><p><a href='https://giphy.com/gifs/JIX9t2j0ZTN9S'></a></p>";
	$unicorn = "<iframe src='https://giphy.com/embed/FsogHRKZoEZLa' width='480' height='290' frameBorder='0' class='giphy-embed' allowFullScreen></iframe><p><a href='https://giphy.com/gifs/unicorn-unicorns-FsogHRKZoEZLa'></a></p>";


	$gifResult = $genre == "humain" ? $human : ($genre == "licorne" ? $unicorn : $cat);

	if (empty($gifResult)) {
		echo  NULL;
	} else {
		echo $gifResult;		
	}

	echo "<br>
		  <a href='licorne.php'>Retour</a>"

?>
