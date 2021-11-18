<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>



	<?php



	$gif = [
		"<img src = 'https://media.giphy.com/media/VbnUQpnihPSIgIXuZv/giphy.gif'>",
		"<img src = 'https://media.giphy.com/media/vvBsAcNyjKk6iOkVx3/giphy.gif'>",
		"<img src = 'https://media.giphy.com/media/jligj6D2MCqOI/giphy.gif'>"
	];

	$valeur = $_GET['style'];

	$response = ($valeur == "cat") ? $gif[0] : (($valeur == "human") ? $gif[1] : $gif[2]);


	echo $response;
	?>






	<form method="get" action="">

		<br>

		<label for=""> Etes vous un humain , une licorne , ou un chat ? : </label>




		<input type="radio" name="style" value="cat"> <label for="style">cat</label>
		<input type="radio" name="style" value="human"><label for="style">human</label>
		<input type="radio" name="style" value="unicorn"><label for="style">unicorn</label>

		<input type="submit" name="submit" value="valid?">



	</form>
</body>

</html>