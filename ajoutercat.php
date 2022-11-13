<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
</head>

<body>
    <div class="form-holder">
        <div class="form-content">
            <div class="form-items">
                <h3>Enter the category</h3>
                <p>Fill in the data below.</p>
                <form class="requires-validation" action="trtcat.php" method="post">
                    <div class="col-md-12">
                        <input class="form-control" type="text" name="nom" placeholder="Name of category" required>
                    </div>
                    <div class="form-button mt-3 text-center">
                        <button id="submit" type="submit" class="btn btn-primary">enter</button>
                    </div>
                    <!-- <label for="">nom</label><input type="text" name="nom" id=""> -->
                </form>
            </div>
        </div>
    </div>

</body>

</html>