<?php 
	$user = "root";
	$psw="";
	$server = "localhost";
	$db="mniprojet";

	$nom=$_POST['Nom'];
	$prenom=$_POST['Prenom'];
	$voiture=$_POST['Voiture'];
	try {
		$connexion= new PDO("mysql:hote=$server;dbname=$db",$user,$psw);
		$connexion->exec("INSERT INTO `personnes` (`Pers_nom`, `Pers_prenom`, `voiture_id`) VALUES ('$nom','$prenom','$voiture');");
		echo "Inscription reussie";
	} catch (Exception $e) {
		echo"erreur";
	}
	include('index.php');
 ?>