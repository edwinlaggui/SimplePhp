<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Php</title>
</head>
<body>
	<?php include "header.html" ?>
	<form action="index.php" method="post">
		Input Loop:<br> <input type="number" name="loop">Number of Loop<br>
		<input type="submit">
	</form>

<?php
	$loop = $_POST["loop"];
	
	for ($i=1; $i <= $loop ; $i++) { 
		echo $i;

	}
	
?>
<?php include "footer.html" ?>
</body>
</html>