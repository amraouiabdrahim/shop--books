<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('function/boostrap.php') ?>
    <link rel="stylesheet" href="style/style.css">

</head>

<body>
    <?php include('header.php') ?>   
   
    <H1 style="color:rgb(99, 20, 228);font-size:30px;text-align: left;margin-top:20px;margin-left:20px;">Contact Us :</H1>
    <form action="phpmailer/index.php" method="POST">
        <div class="container">
            <div class="group-input col-sm-4 col-md-12">
                <lebel style="margin-left:10px;color: rgb(99, 20, 228);font-size:x-large;">NAME</lebel>
                <input type="text" name="name" style="display:block;margin: 10px;width: 400px;background-color:rgba(205, 210, 214, 0.726);border: none;height: 40px;">
                <lebel style="margin-left:10px;color: rgb(99, 20, 228);font-size: x-large;">MAIL</lebel>
                <input type="email" name="email"style="display:block;margin: 10px;width: 400px;background-color:rgba(205, 210, 214, 0.726);border: none;height: 40px;">
                <lebel style="margin-left:10px;color: rgb(99, 20, 228);font-size: x-large ;">MESSAGE</lebel>
                <textarea name="message" style="display:block;margin: 10px;width: 400px;background-color:rgba(205, 210, 214, 0.726);border: none;height: 190px;"></textarea>
                <button type="submit" name="send" class="bntStyle" style="margin-left:150px;">SEND</button>

            </div>
        </div>
    </form>


</body>

</html>