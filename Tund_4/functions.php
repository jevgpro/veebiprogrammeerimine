<?php
require("../../../config.php");
//echo ;
//echo $GLOBALS["serverUserName"];
//echo ;
$database = "if18_Jevgeni_Pro_1";

function saveAMsg($msg) {
	//echo "Tõõtab!";
	$notice = ""; //see on teade, mis antakse salvestamise kohta
	//loome ühenduse andmebaasiserveriga
	$mysqli = new mysqli($GLOBALS["serverHost"], $GLOBALS["serverUsername"], $GLOBALS["serverPassword"], $GLOBALS["database"]);
	//Valmistame ette SQL päringu
	$stmt = $mysqli -> prepare("INSERT INTO vpamsg3 (message) VALUES(?)");
	echo $mysqli -> error;
	$stmt -> bind_param("s", $msg);//s - string(text), i - integer(taisarv), d - decimal(muudarv)
	if($stmt -> execute()) {
		$notice = 'Sõnum : "' .$msg .'" on salvestatud!';
	} else {
		$notice = "Sõnumi salvestamisel tekkis tõrge: " .$stmt -> error;
	}
	$stmt -> close();
	$mysqli -> close();
	return $notice;
}
?>