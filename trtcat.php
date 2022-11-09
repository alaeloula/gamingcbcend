<?php
session_start();
include("config.php");
$name = $_POST['nom'];



$sql = "INSERT INTO `categorie` (`nom`) VALUES ('$name');";
$resultat = $connect->prepare($sql);
$resultat->execute() or die("Erreur lors de l'execution de la requete: ".mysql_error());
header("Location: ./ajoutercat.php");
?>