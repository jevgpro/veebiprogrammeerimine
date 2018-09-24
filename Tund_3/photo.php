<<?php
	//echo "Siin on minu esimene PHP!";
	$name = "Jevgeni";
	$surname = "Prostsenko";
	$dirToRead = "../../pics/";
	$allFiles = scandir ($dirToRead);
	// tahan võtta alates kolmandast elemedist
	$allFiles = array_slice(scandir($dirToRead), 2);
	//var_dump($allFiles);
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		<?php
			echo $name;
			echo " ";
			echo $surname;
		?>
	, õpetöö</title>
</head>
<body bgcolor="#808080" text="#FA8E47">
	<h1 align="center">Jevgeni Prostsenko</h1>
	<?php
	for ($i = 0; $i < count($allFiles); $i ++) {
	echo '<img src ="' .$dirToRead .$allFiles[$i] .'" alt="pilt"><br>';
	}
	?>
</body>
</html>