<?php 
session_start();
include'config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $id=$_SESSION['id'] =$_GET['id'];
     $sql1='SELECT p.* , c.nom as cat 
 FROM produit p
 JOIN categorie c
  ON p.id_cat = c.id
 where p.id = ?';

    // $sql1 = "SELECT * FROM `produit` `nom`  WHERE `produit`.`id`=$id";
    $resultat1 = $connect->prepare($sql1);
    $resultat1->execute([$id]);
    $raw1=$resultat1->fetchAll();?>
<form action="trtmodifierpd.php" method="post">
        <label for="">nom</label>
        <input type="text" name="name" id=""value="<?php echo $raw1[0]['nom']?>">
        <label for="">qte</label>
        <input type="text" name="qte" id=""value="<?php echo $raw1[0]['qte']?>">
        <label for="">prix</label>
        <input type="text" name="prix" id=""value="<?php echo $raw1[0]['prix']?>">
        <label for="">cat</label>
        <!-- <input type="number" name="cat" id=""> -->
        <?php
       $sql = "SELECT * FROM `categorie` ";
       $resultat = $connect->prepare($sql);
       $resultat->execute() ;
       $raw=$resultat->fetchAll();
   
    ?>
        <select name="cat" id="">
            <option value="<?php  $raw1[0]['id_cat']?>" selected><?php  echo$raw1[0]['cat']?></option>
            <?php foreach ($raw as $key) {
                echo "<option value=" . $key['id'] . ">" . $key['nom']."</option>";
             } ?>
            <!-- <option value=""></option> -->
        </select>
        <button type="submit" name ="submit">submit</button>
    </form>



    
</body>
</html>