<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/style.css">

</head>

<body>
    <?php include('header.php') ?>
    <h2 style="color:rgb(37, 37, 185);margin-left:50px;margin-top:30px">OUR BOOKS:</h2>

    <div class="container" style="margin-top:50px;">
        <div class="card-deck row">
            <?php
 include('function/db.php');

    $query = "SELECT * FROM Books";
    $query_run = mysqli_query($connection,$query);
   
      if(mysqli_num_rows($query_run)>0)
      {
        while($row = mysqli_fetch_assoc($query_run))
        {
          ?>

                <div class="card col-sm-6 col-md-4" style="border:5px solid black;max-width:100%;">
                    <img class="card-img-top" src="upload/<?php echo $row['image'] ?>" alt="Card image cap" style="height:100% ;">
                    <div class="card-body">
                        <center>
                            <h5 class="card-title" style="color:rgb(37, 37, 185);">
                                <?php echo $row['title'] ?>
                            </h5>
                        </center>


                    </div>
                </div>
                <?php
        }
      }else {
        echo "404";
      }
    ?>





        </div>
    </div>
</body>

</html>