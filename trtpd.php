<?php
session_start();
include("config.php");
$name = $_POST['nom'];
$cat = $_POST['cat'];
$prix = $_POST['prix'];
$qte = $_POST['qte'];

// hadii khdamaaaa
$sql = "INSERT INTO `produit` (`id`, `nom`, `qte`, `prix`, `id_cat`) VALUES (NULL, '$name', '$qte', '$prix', '$cat');";
$resultat = $connect->prepare($sql);
$resultat->execute() or die("Erreur lors de l'execution de la requete: ".mysql_error());
// ******************************



// hadii khdamaaaach
//  $sql = "INSERT IGNORE INTO `produit` (`nom`, `qte`, `prix`, `id_cat`) VALUES ('?', '?', '?', '?')";
//  $resultat = $connect->prepare($sql);
//  $resultat->execute([$name,$qte,$prix,$cat]) or die("Erreur lors de l'execution de la requete: ".mysql_error());
// ******************************
header("Location: ./ajouterpd.php");
?>