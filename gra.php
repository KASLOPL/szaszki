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
    <div class="box"><img src="figury/nic.png"  id="ha" class="figura"></div>
    <div class="box czarny"><img src="figury/nic.png"  id="hb" class="figura"></div>
    <div class="box"><img src="figury/nic.png"  id="hc" class="figura"></div>
    <div class="box czarny"><img src="figury/nic.png"  id="hd" class="figura"></div>
    <div class="box"><img src="figury/nic.png"  id="he" class="figura"></div>
    <div class="box czarny"><img src="figury/nic.png"  id="hf" class="figura"></div>
    <div class="box"><img src="figury/nic.png"  id="hg" class="figura"></div>
    <div class="box czarny"><img src="figury/nic.png"  id="hh" class="figura"></div>
    <br>
    <div class="box czarny"><img src="figury/nic.png"  id="ga" class="figura"></div>
    <div class="box"><img src="figury/nic.png"  id="gb" class="figura"></div>
    <div class="box czarny"><img src="figury/nic.png"  id="gc" class="figura"></div>
    <div class="box"><img src="figury/nic.png"  id="gd" class="figura"></div>
    <div class="box czarny"><img src="figury/nic.png"  id="ge" class="figura"></div>
    <div class="box"><img src="figury/nic.png"  id="gf" class="figura"></div>
    <div class="box czarny"><img src="figury/nic.png"  id="gg" class="figura"></div>
    <div class="box"><img src="figury/nic.png"  id="gh" class="figura"></div>
    <br>
    <div class="box"><img src="figury/nic.png"  id="fa" class="figura"></div>
    <div class="box czarny"><img src="figury/nic.png"  id="fb" class="figura"></div>
    <div class="box"><img src="figury/nic.png"  id="fc" class="figura"></div>
    <div class="box czarny"><img src="figury/nic.png"  id="fd" class="figura"></div>
    <div class="box"><img src="figury/nic.png"  id="fe" class="figura"></div>
    <div class="box czarny"><img src="figury/nic.png"  id="ff" class="figura"></div>
    <div class="box"><img src="figury/nic.png"  id="fg" class="figura"></div>
    <div class="box czarny"><img src="figury/nic.png"  id="fh" class="figura"></div>
    <br>
    <div class="box czarny"><img src="figury/nic.png"  id="ea" class="figura"></div>
    <div class="box"><img src="figury/nic.png"  id="eb" class="figura"></div>
    <div class="box czarny"><img src="figury/nic.png"  id="ec" class="figura"></div>
    <div class="box"><img src="figury/nic.png"  id="ed" class="figura"></div>
    <div class="box czarny"><img src="figury/nic.png"  id="ee" class="figura"></div>
    <div class="box"><img src="figury/nic.png"  id="ef" class="figura"></div>
    <div class="box czarny"><img src="figury/nic.png"  id="eg" class="figura"></div>
    <div class="box"><img src="figury/nic.png"  id="eh" class="figura"></div>
    <br>
    <div class="box"><img src="figury/nic.png"  id="da" class="figura"></div>
    <div class="box czarny"><img src="figury/nic.png"  id="db" class="figura"></div>
    <div class="box"><img src="figury/nic.png"  id="dc" class="figura"></div>
    <div class="box czarny"><img src="figury/nic.png"  id="dd" class="figura"></div>
    <div class="box"><img src="figury/nic.png"  id="de" class="figura"></div>
    <div class="box czarny"><img src="figury/nic.png"  id="df" class="figura"></div>
    <div class="box"><img src="figury/nic.png"  id="dg" class="figura"></div>
    <div class="box czarny"><img src="figury/nic.png"  id="dh" class="figura"></div>
    <br>
    <div class="box czarny"><img src="figury/nic.png"  id="ca" class="figura"></div>
    <div class="box"><img src="figury/nic.png"  id="cb" class="figura"></div>
    <div class="box czarny"><img src="figury/nic.png"  id="cc" class="figura"></div>
    <div class="box"><img src="figury/nic.png"  id="cd" class="figura"></div>
    <div class="box czarny"><img src="figury/nic.png"  id="ce" class="figura"></div>
    <div class="box"><img src="figury/nic.png"  id="cf" class="figura"></div>
    <div class="box czarny"><img src="figury/nic.png"  id="cg" class="figura"></div>
    <div class="box"><img src="figury/nic.png"  id="ch" class="figura"></div>
    <br>
    <div class="box"><img src="figury/nic.png"  id="ba" class="figura"></div>
    <div class="box czarny"><img src="figury/nic.png"  id="bb" class="figura"></div>
    <div class="box"><img src="figury/nic.png"  id="bc" class="figura"></div>
    <div class="box czarny"><img src="figury/nic.png"  id="bd" class="figura"></div>
    <div class="box"><img src="figury/nic.png"  id="be" class="figura"></div>
    <div class="box czarny"><img src="figury/nic.png"  id="bf" class="figura"></div>
    <div class="box"><img src="figury/nic.png"  id="bg" class="figura"></div>
    <div class="box czarny"><img src="figury/nic.png"  id="bh" class="figura"></div>
    <br>
    <div class="box czarny"><img src="figury/b_w.png"  id="aa" class="figura"></div>
    <div class="box"><img src="figury/b_w.png"  id="ab" class="figura"></div>
    <div class="box czarny"><img src="figury/b_w.png"  id="ac" class="figura"></div>
    <div class="box"><img src="figury/b_w.png"  id="ad" class="figura"></div>
    <div class="box czarny"><img src="figury/b_w.png"  id="ae" class="figura"></div>
    <div class="box"><img src="figury/b_w.png"  id="af" class="figura"></div>
    <div class="box czarny"><img src="figury/b_w.png"  id="ag" class="figura"></div>
    <div class="box"><img src="figury/b_w.png"  id="ah" class="figura"></div>
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
    <input type="button" value="zmień wierzę na nic"class="przycisk" onclick="nic()">
    <br><br>
    <p id="xx" style="font-size: 30px;"></p>
    </p><br><br><br>
    <p id="xxx" style="font-size: 30px;">hej</p>
</div>
</div>
</header>
</body>
</html>