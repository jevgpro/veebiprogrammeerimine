<<?php
	//echo "Siin on minu esimene PHP!";
	$name = "Jevgeni";
	$surname = "Prostsenko";
	$todayDate = date("d.m.Y");
	$weekDayNow = date("N");
	$hourNow = date("H");
	//echo $hourNow;
	$partOfDay = "";
	$weekDayNamesET = ["esmapäev", "teisipäev", "kolmapäev", "neljapäev", "reede", "laupäev", "pühapäev"];
	var_dump ($weekDayNamesET);
	echo $weekDayNamesET[0];
		if ($hourNow < 8) {
			$partOfDay = "varajane hommik";
		}
		if ($hourNow >= 8) {
			$partOfDay = "kooliaeg";
		}
		if ($hourNow >= 16) {
			$partOfDay = "vaba aeg";
		}
		
		//loosime juhusliku pildi
		$picNum = mt_rand(2, 43); //random
		//echo $picNum;
		$picURL = "http://www.cs.tlu.ee/~rinde/media/fotod/TLU_600x400/tlu_";
		$picEXT = ".jpg";
		$picFileName = $picURL .$picNum .$picEXT;
		echo $weekDayNow;
		//echo $picFileName;
		//echo $weekDayNow;
		
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
	<h1 align="center">Siin on Jevgeni Prostsenko õpetööd</h1>
		<?php
			echo $name ." " .$surname;
		?>
	<p>Siin on minu <a href="http://www.tlu.ee" target="_blank"> TLÜ</a> õpetöö raames valminud veebilehed. Nende ei oma mingit sügavat sisu ja nende kooperimine ei oma mõtet. </p>
	<p>Tervist, mina olen 1 kursuse TLÜ informaatika student. Enne õppimist mul oli väga meeldiv proovida programmeerida ning 3D animeerida. Selleks ma kasutasin Unity 3D. See oli väga põnev ja huvitav minu jaoks :)</p>
	<!-- <img src="http://greeny.cs.tlu.ee/~rinde/veebiprogrammeerimine2018s/tlu_terra_600x400_2.jpg" alt="TLÜ Terra õppehoone"> -->
	<img src="../../../~rinde/veebiprogrammeerimine2018s/tlu_terra_600x400_1.jpg" alt="TLÜ Terra õppehoone">
	<p> Mul on sõber, kes ka teeb <a href="../../../~vadizig/index.html">veebi</a>.</p>
	<img src="<?php echo $picFileName; ?>" alt="juhuslik pilt Tallinna Ülikoolist">
	<?php
		echo "<p>Täna on " .$weekDayNamesET[$weekDayNow - 1] .", " .$todayDate ."</p> \n";
		echo "<p> Tänane kuupäev on: " .$todayDate ."</p> \n";
		echo "<p>Lehe avamise hetkel oli kell " .date("H:i:s") .", käes on " .$partOfDay .".</p> \n>"; 
		echo "<p> Time : " .$hourNow ."</p> \n";
	?>
</body>
</html>