
<?php include'config.php';?>
<h1>hello</h1>
<a href="ajouterpd.php">wreek hna</a>
<a href="ajoutercat.php">wreek2 hna</a>

<?php
    
    $sql1 = "SELECT * FROM `produit`";
    $resultat1 = $connect->prepare($sql1);
    $resultat1->execute() ;
    $raw1=$resultat1->fetchAll();?>

<?php foreach ($raw1 as $key) {
        $id=$key['id'];
        echo $id;
        // echo "<option value=" . $key['id'] . ">" . $key['nom']."</option>"; 
        ?>
            <div class="pd">
                <p> <?php echo $key['nom']?></p>
                <p><?php echo $key['qte']?></p>
                <p><?php echo $key['prix']?></p>
                <p><?php echo $key['id_cat']?></p>
                <!-- <img src="<?php echo $key['image']?>" alt="llll" srcset=""> -->
                <img src="..\ayh.png" alt="aaaaaaaaaaaaa" srcset="">
                <?php echo"<a class='btn btn-info' href='modifierpd.php?id=$id'><i class='fa fa-trash-o fa-lg'></i> modifier</a>" ?>
                <?php echo"<a class='btn btn-info' href='deletepd.php?id=$id'><i class='fa fa-trash-o fa-lg'></i> delete</a>" ?>
            </div>
     <?php } ?>




<?php 
     
?>
