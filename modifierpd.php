<?php
session_start();
include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <?php
    $id = $_SESSION['id'] = $_GET['id'];
    $sql1 = 'SELECT p.* , c.nom as cat 
 FROM produit p
 JOIN categorie c
  ON p.id_cat = c.id
 where p.id = ?';

    // $sql1 = "SELECT * FROM `produit` `nom`  WHERE `produit`.`id`=$id";
    $resultat1 = $connect->prepare($sql1);
    $resultat1->execute([$id]);
    $raw1 = $resultat1->fetchAll(); ?>
    

    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>update the product</h3>
                        <p>Fill in the data below.</p>
                        <form class="requires-validation" action="trtmodifierpd.php" method="post" enctype="multipart/form-data" novalidate>

                            <div class="col-md-12">
                                <input class="form-control" type="text" name="name" value="<?php echo $raw1[0]['nom'] ?>">
                            </div>
                            <div class="col-md-12 mt-3">
                                <input type="file" name="fileToUpload" class="form-control" id="fileToUpload" value="<?php echo $raw1[0]['image'] ?> ">
                            </div>

                            <div class="col-md-12">
                                <input class="form-control" type="text" name="qte" value="<?php echo $raw1[0]['qte'] ?>">
                            </div>
                            <div class="col-md-12">
                                <input class="form-control" type="text" name="prix" value="<?php echo $raw1[0]['prix'] ?>">
                            </div>
                            <?php
                            $sql = "SELECT * FROM `categorie` ";
                            $resultat = $connect->prepare($sql);
                            $resultat->execute();
                            $raw = $resultat->fetchAll();

                            ?>

                            <div class="col-md-12">
                                <select class="form-select mt-3" name="cat" required>
                                    <?php foreach ($raw as $key) {
                                        if($key['nom']==$raw1[0]['cat'] ){
                                            echo "<option value=" . $key['id'] . " selected>" . $key['nom'] . "</option>";
                                        }
                                        else{
                                            echo "<option value=" . $key['id'] . ">" . $key['nom'] . "</option>";
                                        }
                                        
                                    } ?>
                                </select>

                            </div>


                            <div class="form-button mt-3 text-center">
                                <button id="submit" type="submit" class="btn btn-primary">enter</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>