<?php 
	$user = "root";
	$psw="";
	$server = "localhost";
	$db="mniprojet";

	$num_voiture = $_POST['num_voiture'];

	try {
		$connexion= new PDO("mysql:hote=$server;dbname=$db",$user,$psw);
		// preparation de la requetes
		$connexion->exec("DELETE FROM `voiture` WHERE voiture_matricule='$num_voiture';");
		echo "Suppression reussie";
		include('index-1.php');
	} catch (Exception $e) {
		echo"erreur";
	}
 ?>