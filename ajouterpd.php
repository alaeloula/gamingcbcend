<?php include'config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="trtpd.php" method="post" enctype="multipart/form-data">
        <!-- <label>Your Image File
        <input type="file" name="myImage" accept="image/png, image/gif, image/jpeg" />
        </label> -->
        <label for="">Select image to upload:</label> 
        <input type="file" name="fileToUpload" id="fileToUpload"><br>
        <label for="">nom</label><input type="text" name="nom" id="">
        <label for="">qte</label><input type="text" name="qte" id="">
        <label for="">prix</label><input type="text" name="prix" id="">
        <label for="">cat</label>
        <!-- <input type="number" name="cat" id=""> -->
        <?php
       $sql = "SELECT * FROM `categorie` ";
       $resultat = $connect->prepare($sql);
       $resultat->execute() ;
       $raw=$resultat->fetchAll();
   
     ?>
        <select name="cat" id="">
            <?php foreach ($raw as $key) {
                echo "<option value=" . $key['id'] . ">" . $key['nom']."</option>";
             } ?>
            <!-- <option value=""></option> -->
        </select>
        <button type="submit">submit</button>
    </form>
</body>
</html>