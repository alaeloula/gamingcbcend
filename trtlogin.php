<?php
session_start();
include("config.php");


$username = $_POST['username'];
$password = $_POST['password'];


$sql = "SELECT * FROM client WHERE username='$username'  And password='$password'";
$resultat = $connect->prepare($sql);
$resultat->execute() or die("Erreur lors de l'execution de la requete: ".mysql_error());

	if($resultat->rowCount())
	{
      $_SESSION['login'] = true;
      header("Location: ./index.php");
			exit();

	} else {
		header("Location: ./login.php");
		exit();


	}


 ?>