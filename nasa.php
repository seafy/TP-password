<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>code acces</title>
</head>
<body>



<?php 
	if (isset($_POST['password']) AND $_POST['password'] == "kangourou") // Si le mot de passe est bon
	{
 // On affiche les codes
	?>
		<p>voici les codes acces: </p>
		<p>4245-ECHO-5134-CHARLY-4531-DELTA-3762-BRAVO</p>
		<h3>c'est code sont confidentielle , tous acte de divulgation serons punis par la loi : L'article 225-4-1 !	</h3>
	<?php
    }  
	else {
	   	echo "<p>le code est incorrect!</p>	";
	}

	?>

</body>
</html>
