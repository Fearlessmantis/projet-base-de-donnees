<?php 
	$user = "root";
	$psw="";
	$server = "localhost";
	$db="mniprojet";


	try {
		$connexion= new PDO("mysql:hote=$server;dbname=$db",$user,$psw);
		// preparation de la requetes
		$requete=$connexion->prepare("SELECT p.Pers_id,p.Pers_nom,p.Pers_prenom,v.voiture_nom,v.voiture_matricule FROM personnes p LEFT join voiture v on p.Pers_id=v.Pers_id ;");
		$requete->execute();
		$affichage=$requete->fetchAll();

	} catch (Exception $e) {
		echo"erreur";
	}
 ?>