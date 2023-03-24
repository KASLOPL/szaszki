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
    <scripttype="text/javascript" src="message.js"></script>
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
    <div class="box"><img src="figury/cz_w.png" style="margin-top: 5px;"></div>
    <div class="box czarny"><img src="figury/cz_s.png" style="margin-top: 5px;"></div>
    <div class="box"><img src="figury/cz_g.png" style="margin-top: 5px;"></div>
    <div class="box czarny"><img src="figury/cz_h.png" style="margin-top: 9px;"></div>
    <div class="box"><img src="figury/cz_k.png" style="margin-top: 5px;"></div>
    <div class="box czarny"><img src="figury/cz_g.png" style="margin-top: 5px;"></div>
    <div class="box"><img src="figury/cz_s.png" style="margin-top: 5px;"></div>
    <div class="box czarny"><img src="figury/cz_w.png" style="margin-top: 5px;"></div>

    <br>

    <div class="box czarny"><img src="figury/cz_p.png" style="margin-top: 17px;"></div>
    <div class="box"><img src="figury/cz_p.png" style="margin-top: 17px;"></div>
    <div class="box czarny"><img src="figury/cz_p.png" style="margin-top: 17px;"></div>
    <div class="box"><img src="figury/cz_p.png" style="margin-top: 17px;"></div>
    <div class="box czarny"><img src="figury/cz_p.png" style="margin-top: 17px;"></div>
    <div class="box"><img src="figury/cz_p.png" style="margin-top: 17px;"></div>
    <div class="box czarny"><img src="figury/cz_p.png" style="margin-top: 17px;"></div>
    <div class="box"><img src="figury/cz_p.png" style="margin-top: 17px;"></div>

    <br>

    <div class="box"><img src="figury/nic.png" id="" style="margin-top: 17px;"></div>
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

    <div class="box"><img src="figury/b_p.png" style="margin-top: 17px;"></div>
    <div class="box czarny"><img src="figury/b_p.png" style="margin-top: 17px;"></div>
    <div class="box"><img src="figury/b_p.png" style="margin-top: 17px;"></div>
    <div class="box czarny"><img src="figury/b_p.png" style="margin-top: 17px;"></div>
    <div class="box"><img src="figury/b_p.png" style="margin-top: 17px;"></div>
    <div class="box czarny"><img src="figury/b_p.png" style="margin-top: 17px;"></div>
    <div class="box"><img src="figury/b_p.png" style="margin-top: 17px;"></div>
    <div class="box czarny"><img src="figury/b_p.png" style="margin-top: 17px;"></div>

    <br>

    <div class="box czarny"><img src="figury/b_w.png" style="margin-top: 5px;"></div>
    <div class="box"><img src="figury/b_s.png" style="margin-top: 5px;"></div>
    <div class="box czarny"><img src="figury/b_g.png" style="margin-top: 5px;"></div>
    <div class="box"><img src="figury/b_h.png" style="margin-top: 10px;"></div>
    <div class="box czarny"><img src="figury/b_k.png" style="margin-top: 5px;"></div>
    <div class="box"><img src="figury/b_g.png" style="margin-top: 5px;"></div>
    <div class="box czarny"><img src="figury/b_s.png" style="margin-top: 5px;"></div>
    <div class="box"><img src="figury/b_w.png" style="margin-top: 5px;"></div>
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
    </p>
</div>
</div>
</header>
</body>
</html>