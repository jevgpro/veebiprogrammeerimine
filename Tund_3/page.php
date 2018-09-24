<<?php
	//echo "Siin on minu esimene PHP!";
	$name = "Tundmatu";
	$surname = "inimene";
	
	//var_dump($_POST);
	if (isset($_POST["firstName"])) {
		$name = $_POST["firstName"];
	}
	if (isset($_POST["surName"])) {
		$surname = $_POST["surName"];
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
	</title>
</head>
<body bgcolor="#808080" text="#FA8E47">
	<h1 align="center"> <?php
			echo $name;
			echo " ";
			echo $surname;
		?> </h1>
		<hr>
		
		<form method = "POST">
			<label> Eesnimi: </label>
			<input name = "firstName" type = "text" value = "">
			<label> Perekonnanimi: </label>
			<input name = "surName" type = "text" value = "">
			<label> Sünniaasta: </label>
			<input name = "birtYear" type = "number" min = "1924" max = "2003" value = "1994">
			<br>
			<input name = "submitUserData" type = "submit" value = "Saada andmed">
		</form>
		
		<?php
			if (isset($_POST["firstName"])) {
				echo "<br><p>Olete elanud järgnevatel aastatel:</p>";
				echo "<ul> \n";
				for ($i = $_POST["birtYear"]; $i <= date("Y"); $i ++) {
					echo "<li>" . $i . "</li> \n";
				}
				
				echo "</ul> \n";
			}
		?>
</body>
</html>