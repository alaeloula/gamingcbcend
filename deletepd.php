<?php
include("config.php");
 $id=$_GET['id'];
$sql= "DELETE FROM `produit` WHERE `produit`.`id` = :id";
$req=$connect->prepare($sql);
$req->execute(['id'=> $_GET['id']]);
header("Location: index.php")
?>
