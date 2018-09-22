<?php 
	$user = "root";
	$psw="";
	$server = "localhost";
	$db="mniprojet";

	$id = $_POST['id'];

	try {
		$connexion= new PDO("mysql:hote=$server;dbname=$db",$user,$psw);
		// preparation de la requetes
		$connexion->exec("DELETE FROM `personnes` WHERE `personnes`.`Pers_id` = $id ;");
		echo "Suppression reussie";
		include('index-1.php');
	} catch (Exception $e) {
		echo"erreur";
	}
 ?>