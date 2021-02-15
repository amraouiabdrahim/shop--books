<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('function/boostrap.php') ?>
    <link rel="stylesheet" href="style/style.css">
    <title>Library</title>
    <style>
        *{
            overflow: hidden;
        }
    </style>
</head>

<body>
    <?php include('header.php') ?>
    <div style="width: 100% ;height: 100vh ;background-color: rgba(0, 0, 0, 0.733); position: absolute;  z-index: -1;"></div>
    <div>
        <img class="imgBG" src="image.png" style="width: 100%;height:100%" >

    </div>
    <h1>READ <br> MORE <br> BOOKS</h1>
    <form action="search-books.php" method="POST">
    <center><input type="text" placeholder="FIND YOUR BOOKS HER" id="inp"  name="recherche" ></center> <BR>
    <center><button type="submit" style="width: 100px;height: 50px;background-color: rgb(141, 21, 189);border: none;color: cornsilk;font-size: 20px;font-family: normal;" >SEARCH</button></center>
    
    </form>


    








</body>

</html>