<?php
	$notice = null; //tühi
	require("functions.php");
	
	if (isset($_POST["submitMessage"])) {
	if ($_POST["message"] != "Kirjuta siia oma sõnum" and !empty($_POST["message"])) {
			$notice = "Sõnum olemas!";
			$notice = saveAMsg($_POST["message"]);
		} else {
			$notice = "Palun kirjutage sõnum!";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sõnumi liisamine</title> 
</head>
<body bgcolor="#808080" text="#FA8E47">
	<h1 align="center"> <?php
		?> </h1>
		<hr>
		
		<form method = "POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<label>Sõnum (max 256 märki):</label>
		<br>
		<textarea rows = "4" cols = "64" name = "message">Kirjuta siia oma sõnum
		</textarea>
		<br>
			<input name = "submitMessage" type = "submit" value = "Salvesta sõnum">
		</form>
		<br>
		<p>
		<?php
			echo $notice;
		?>
		</p>
</body>
</html>