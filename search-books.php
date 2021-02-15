<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('function/boostrap.php') ?>
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>

<body>
    <?php include('header.php') ?>
    <?php
            include('function/db.php');
            $recherche = isset($_POST['recherche']) ? $_POST['recherche'] :'';

            $sql = "SELECT * FROM books WHERE title LIKE'$recherche%'";
            $RESULTS = mysqli_query($connection, $sql);

            while($row= mysqli_fetch_assoc($RESULTS))
            {
                ?>
        <h1 style="color: rgb(99, 20, 228);font-size:x-large;text-align:left;margin-top:20px;margin-left:20px;">
            <?php echo $row['title'] ?>
        </h1>
        <div class="container">
            <div class="row">




                <div class=" col-lg-6  col-md-8">
                    <form action="" style="background-color: rgba(128, 128, 128, 0.719);width:90%;height: 400px;margin-left: 50px;border-radius:10px;margin-top: 50px;">
                        <span style="color: rgb(99, 20, 228);font-size:x-large;display: block;margin-top:20px;margin-left: 50px;">  NAME: <?php echo $row['title'] ?></span>
                        <span style="color: rgb(99, 20, 228);font-size:x-large;display: block;margin-top:20px;margin-left: 50px;">AUTHOR : <?php echo $row['auteur'] ?></span>
                        <span style="color: rgb(99, 20, 228);font-size:x-large;display: block;margin-top:20px;margin-left: 50px;"> PRIX : <?php echo $row['Prix'] ?></span>
                        <span style="color: rgb(99, 20, 228);font-size:x-large;display: block;margin-top:20px;margin-left: 50px;">QUANTITE AU STOCK : <?php echo $row['QStock'] ?></span>
                        <span style="color: rgb(99, 20, 228);font-size:x-large;display: block;margin-top:20px;margin-left: 50px;">DATE DE PUBLICATION : <?php echo $row['publishedat'] ?></span>
                    </form>
                </div>

                <div class="col-lg-6 col-md-4">
                    <center><img class="card-img-top" src="upload/<?php echo $row['image'] ?>" alt="Card image cap" style="border:2px solid black;margin-top:90px;width:50%;"></center>

                </div>
                <?php 

            }
        

           ?>

            </div>
        </div>

</body>

</html>