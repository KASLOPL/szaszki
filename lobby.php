<?php 
session_start();

if(!isset($_SESSION['zalogowany']))
{
    header('location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Szaszki.com</title>
    <link rel="stylesheet" href="lobby.css">
</head>
<body>
<header class="header">
<div class="szaszki">
    <br><br>
<h1>SZASZKI.COM</h1>
</div>
<div id="main">
    <br><br>
    <div id="szachownica">
    <div class="box"></div>
    <div class="box czarny"></div>
    <div class="box"></div>
    <div class="box czarny"></div>
    <div class="box"></div>
    <div class="box czarny"></div>
    <div class="box"></div>
    <div class="box czarny"></div>
    <br>
    <div class="box czarny"></div>
    <div class="box"></div>
    <div class="box czarny"></div>
    <div class="box"></div>
    <div class="box czarny"></div>
    <div class="box"></div>
    <div class="box czarny"></div>
    <div class="box"></div>
    <br>
    <div class="box"></div>
    <div class="box czarny"></div>
    <div class="box"></div>
    <div class="box czarny"></div>
    <div class="box"></div>
    <div class="box czarny"></div>
    <div class="box"></div>
    <div class="box czarny"></div>
    <br>
    <div class="box czarny"></div>
    <div class="box"></div>
    <div class="box czarny"></div>
    <div class="box"></div>
    <div class="box czarny"></div>
    <div class="box"></div>
    <div class="box czarny"></div>
    <div class="box"></div>
    <br>
    <div class="box"></div>
    <div class="box czarny"></div>
    <div class="box"></div>
    <div class="box czarny"></div>
    <div class="box"></div>
    <div class="box czarny"></div>
    <div class="box"></div>
    <div class="box czarny"></div>
    <br>
    <div class="box czarny"></div>
    <div class="box"></div>
    <div class="box czarny"></div>
    <div class="box"></div>
    <div class="box czarny"></div>
    <div class="box"></div>
    <div class="box czarny"></div>
    <div class="box"></div>
    <br>
    <div class="box"></div>
    <div class="box czarny"></div>
    <div class="box"></div>
    <div class="box czarny"></div>
    <div class="box"></div>
    <div class="box czarny"></div>
    <div class="box"></div>
    <div class="box czarny"></div>
    <br>
    <div class="box czarny"></div>
    <div class="box"></div>
    <div class="box czarny"></div>
    <div class="box"></div>
    <div class="box czarny"></div>
    <div class="box"></div>
    <div class="box czarny"></div>
    <div class="box"></div>
</div>
<div id="zawartosc_div">
    <p id="zawartosc_p">
    <?php 
    echo '<a href="logout.php">wyloguj się</a><br>';
    ?>
    </p>
</div>
</div>
</header>
</body>
</html>