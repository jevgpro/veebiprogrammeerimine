<<?php
	// https://www.w3schools.com/php/php_form_validation.asp
	//echo "Siin on minu esimene PHP!";
	$name = "Tundmatu";
	$surname = "inimene";
	$fullName = $name . " " .$surname;
	$birthMonth = date("m");
	$birthYear = date("Y") - 15;
	$birthDay = date("d");
	$monthNamesET = ["jaanuar", "veebruar", "märts", "aprill", "mai", "juuni","juuli", "august", "september", "oktoober", "november", "detsember"];
	
	//var_dump($_POST);
	if (isset($_POST["firstName"])) {
		//$name = $_POST["firstName"];
		$name = test_input($_POST["firstName"]);
		
	}
	if (isset($_POST["surName"])) {
		//$surname = $_POST["surName"];
		$surname = test_input($_POST["surName"]);
		
	}
	function test_input($data) {
		echo "Koristan! \n";
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
	return $data;
	}
	function fullName()	{
		$GLOBALS["fullName"] = $GLOBALS["name"] . " " .$GLOBALS["surname"];
		//echo $fullName;
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
		
		<form method = "POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<label> Eesnimi: </label>
			<input name = "firstName" type = "text" value = "">
			<label> Perekonnanimi: </label>
			<input name = "surName" type = "text" value = "">
			<label> Sünniaasta: </label>
			<input name = "birtYear" type = "number" min = "1924" max = "2003" value = "1994">
		<select name="birthMonth">
			<option value="1">jaanuar</option>
			<option value="2">veebruar</option>
			<option value="3">märts</option>
			<option value="4">aprill</option>
			<option value="5">mai</option>
			<option value="6">juuni</option>
			<option value="7">juuli</option>
			<option value="8">august</option>
			<option value="9" selected>september</option>
			<option value="10">oktoober</option>
			<option value="11">november</option>
			<option value="12">detsember</option>
		</select>
		?>
<label>Sünnipäev: </label>

	  <?php

	    echo '<select name="birthDay">' ."\n";
		for ($i = 1; $i < 32; $i ++){
			echo '<option value="' .$i .'"';
			if ($i == $birthDay){
				echo " selected ";
			}
			echo ">" .$i ."</option> \n";
			
		}
		echo "</select> \n";

	  ?>
	  <label>Sünnikuu: </label>

	  <?php
	    echo '<select name="birthMonth">' ."\n";
		for ($i = 1; $i < 13; $i ++){
			echo '<option value="' .$i .'"';
			if ($i == $birthMonth){
				echo " selected ";
			}

			echo ">" .$monthNamesET[$i - 1] ."</option> \n";
		}

		echo "</select> \n";

	  ?>
	  <label>Sünniaasta: </label>

	  <!--<input name="birthYear" type="number" min="1914" max="2003" value="1998">-->

	  <?php

	    echo '<select name="birthYear">' ."\n";
		for ($i = $birthYear; $i >= date("Y") - 100; $i --){
			echo '<option value="' .$i .'"';
			if ($i == $birthYear){
				echo " selected ";
			}
			
			echo ">" .$i ."</option> \n";
		}
		echo "</select> \n";
		 ?>

			<br>
			<input name = "submitUserData" type = "submit" value = "Saada andmed">
		</form>
		
		<?php
			if (isset($_POST["firstName"])) {
				//demoks üks väike funktsioon (tegelikult mõtetu)
				fullName();
				echo "<br><p>" .$fullName . "Olete elanud järgnevatel aastatel:</p>";
				echo "<ul> \n";
				for ($i = $_POST["birtYear"]; $i <= date("Y"); $i ++) {
					echo "<li>" . $i . "</li> \n";
				}
				
				echo "</ul> \n";
			}
		?>
</body>
</html>