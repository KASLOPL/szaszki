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
    <link rel="stylesheet" href="gra.css">
    <script type="text/javascript" src="gra.js"></script>
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
    <div class="box"><img src="figury/cz_w.png"  id="wierza" class="figura"></div>
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
        echo $_SESSION['login']." <br>twoje aktualne ELO: ".$_SESSION['elo']."<br>";
        ?>
    <form action="logout.php" method="post">
        <input type="submit" value="Wyloguj się" name="rejestracja" class="przycisk">
    </form>
    <br><br>
    <form action="do_logowania.php" method="post">
        <input type="submit" value="Wróć do lobby" name="rejestracja" class="przycisk">
    </form>
    <br><br>
    <p id="xx" style="font-size: 30px;"></p>
    </p><br><br><br>
    <p id="xxx" style="font-size: 30px;">hej</p>
</div>
</div>
</header>
</body>
</html>