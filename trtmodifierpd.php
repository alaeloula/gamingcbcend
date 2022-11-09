<?php 
    session_start();
    include("config.php");
        $id=$_SESSION['id'] ;
        $nm = $_POST['name'];
        $cat = $_POST['cat'];
        $prix = $_POST['prix'];
        $qte = $_POST['qte'];
    
        // hadii khdamaaaa
        $sql="UPDATE `produit` SET `nom` = :nom , `qte` = $qte, `prix` = $prix, `id_cat` = '$cat' WHERE `produit`.`id` = $id";
        // $sql = "INSERT INTO `produit` (`id`, `nom`, `qte`, `prix`, `id_cat`) VALUES (NULL, '$name', '$qte', '$prix', '$cat');";
        $resultat = $connect->prepare($sql);
        $resultat->execute(['nom'=> $_POST['name']]) or die("Erreur lors de l'execution de la requete: ".mysql_error());
        echo 'bien modifier';
        // ******************************
            
    ?>