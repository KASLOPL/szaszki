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
    <div class="box" ><img src="figury/cz_w.png" style="margin-top: 5px;" id="ah" onclick="ruch_figury(this.id)"></div>
    <div class="box czarny" id="bh" onclick="ruch_figury(this.id)"><img src="figury/nic.png" style="margin-top: 5px;" id="bh" onclick="ruch_figury(this.id)"></div>
    <div class="box" id="ch" onclick="ruch_figury(this.id)"><img src="figury/nic.png" style="margin-top: 5px;" id="ch" onclick="ruch_figury(this.id)"></div>
    <div class="box czarny" id="dh" onclick="ruch_figury(this.id)"><img src="figury/nic.png" style="margin-top: 5px;" id="dh" onclick="ruch_figury(this.id)"></div>
    <div class="box" id="eh" onclick="ruch_figury(this.id)"><img src="figury/nic.png" style="margin-top: 5px;" id="eh" onclick="ruch_figury(this.id)"></div>
    <div class="box czarny" id="fh" onclick="ruch_figury(this.id)"><img src="figury/nic.png" style="margin-top: 5px;" id="fh" onclick="ruch_figury(this.id)"></div>
    <div class="box" id="gh" onclick="ruch_figury(this.id)"><img src="figury/nic.png" style="margin-top: 5px;" id="gh" onclick="ruch_figury(this.id)"></div>
    <div class="box czarny" id="hh" onclick="ruch_figury(this.id)"><img src="figury/nic.png" style="margin-top: 5px;" id="hh" onclick="ruch_figury(this.id)"></div>

    <br>

    <div class="box czarny" id="ag" onclick="ruch_figury(this.id)"><img src="figury/nic.png" style="margin-top: 5px;" id="ag" onclick="ruch_figury(this.id)"></div>
    <div class="box" id="bg" onclick="ruch_figury(this.id)"><img src="figury/nic.png" style="margin-top: 5px;" id="bg" onclick="ruch_figury(this.id)"></div>
    <div class="box czarny" id="cg" onclick="ruch_figury(this.id)"><img src="figury/nic.png" style="margin-top: 5px;" id="cg" onclick="ruch_figury(this.id)"></div>
    <div class="box" id="dg" onclick="ruch_figury(this.id)"><img src="figury/nic.png" style="margin-top: 5px;" id="dg" onclick="ruch_figury(this.id)"></div>
    <div class="box czarny" id="eg" onclick="ruch_figury(this.id)"><img src="figury/nic.png" style="margin-top: 5px;" id="eg" onclick="ruch_figury(this.id)"></div>
    <div class="box" id="fg" onclick="ruch_figury(this.id)"><img src="figury/nic.png" style="margin-top: 5px;" id="fg" onclick="ruch_figury(this.id)"></div>
    <div class="box czarny" id="gg" onclick="ruch_figury(this.id)"><img src="figury/nic.png" style="margin-top: 5px;" id="gg" onclick="ruch_figury(this.id)"></div>
    <div class="box" id="hg" onclick="ruch_figury(this.id)"><img src="figury/nic.png" style="margin-top: 5px;" id="hg" onclick="ruch_figury(this.id)"></div>

    <br>

    <div class="box" id="af" onclick="ruch_figury(this.id)"><img src="figury/nic.png" style="margin-top: 5px;" id="af" onclick="ruch_figury(this.id)"></div>
    <div class="box czarny" id="bf" onclick="ruch_figury(this.id)"><img src="figury/nic.png" style="margin-top: 5px;" id="bf" onclick="ruch_figury(this.id)"></div>
    <div class="box" id="cf" onclick="ruch_figury(this.id)"><img src="figury/nic.png" style="margin-top: 5px;" id="cf" onclick="ruch_figury(this.id)"></div>
    <div class="box czarny" id="df" onclick="ruch_figury(this.id)"><img src="figury/nic.png" style="margin-top: 5px;" id="df" onclick="ruch_figury(this.id)"></div>
    <div class="box" id="ef" onclick="ruch_figury(this.id)"><img src="figury/nic.png" style="margin-top: 5px;" id="ef" onclick="ruch_figury(this.id)"></div>
    <div class="box czarny" id="ff" onclick="ruch_figury(this.id)"><img src="figury/nic.png" style="margin-top: 5px;" id="ff" onclick="ruch_figury(this.id)"></div>
    <div class="box" id="gf" onclick="ruch_figury(this.id)"><img src="figury/nic.png" style="margin-top: 5px;" id="gf" onclick="ruch_figury(this.id)"></div>
    <div class="box czarny" id="hf" onclick="ruch_figury(this.id)"><img src="figury/nic.png" style="margin-top: 5px;" id="hf" onclick="ruch_figury(this.id)"></div>

    <br>

    <div class="box czarny" id="ae" onclick="ruch_figury(this.id)"><img src="figury/nic.png" style="margin-top: 5px;" id="ae" onclick="ruch_figury(this.id)"></div>
    <div class="box" id="be" onclick="ruch_figury(this.id)"><img src="figury/nic.png" style="margin-top: 5px;" id="be" onclick="ruch_figury(this.id)"></div>
    <div class="box czarny" id="ce" onclick="ruch_figury(this.id)"><img src="figury/nic.png" style="margin-top: 5px;" id="ce" onclick="ruch_figury(this.id)"></div>
    <div class="box" id="de" onclick="ruch_figury(this.id)"><img src="figury/nic.png" style="margin-top: 5px;" id="de" onclick="ruch_figury(this.id)"></div>
    <div class="box czarny" id="ee" onclick="ruch_figury(this.id)"><img src="figury/nic.png" style="margin-top: 5px;" id="ee" onclick="ruch_figury(this.id)"></div>
    <div class="box" id="fe" onclick="ruch_figury(this.id)"><img src="figury/nic.png" style="margin-top: 5px;" id="fe" onclick="ruch_figury(this.id)"></div>
    <div class="box czarny" id="ge" onclick="ruch_figury(this.id)"><img src="figury/nic.png" style="margin-top: 5px;" id="ge" onclick="ruch_figury(this.id)"></div>
    <div class="box" id="he" onclick="ruch_figury(this.id)"><img src="figury/nic.png" style="margin-top: 5px;" id="he" onclick="ruch_figury(this.id)"></div>

    <br>

    <div class="box" id="ad" onclick="ruch_figury(this.id)"><img src="figury/nic.png" style="margin-top: 5px;" id="ad" onclick="ruch_figury(this.id)"></div>
    <div class="box czarny" id="bd" onclick="ruch_figury(this.id)"><img src="figury/nic.png" style="margin-top: 5px;" id="bd" onclick="ruch_figury(this.id)"></div>
    <div class="box" id="cd" onclick="ruch_figury(this.id)"><img src="figury/nic.png" style="margin-top: 5px;" id="cd" onclick="ruch_figury(this.id)"></div>
    <div class="box czarny" id="dd" onclick="ruch_figury(this.id)"><img src="figury/nic.png" style="margin-top: 5px;" id="dd" onclick="ruch_figury(this.id)"></div>
    <div class="box" id="ed" onclick="ruch_figury(this.id)"><img src="figury/nic.png" style="margin-top: 5px;" id="ed" onclick="ruch_figury(this.id)"></div>
    <div class="box czarny" id="fd" onclick="ruch_figury(this.id)"><img src="figury/nic.png" style="margin-top: 5px;" id="fd" onclick="ruch_figury(this.id)"></div>
    <div class="box" id="gd" onclick="ruch_figury(this.id)"><img src="figury/nic.png" style="margin-top: 5px;" id="gd" onclick="ruch_figury(this.id)"></div>
    <div class="box czarny" id="hd" onclick="ruch_figury(this.id)"><img src="figury/nic.png" style="margin-top: 5px;" id="hd" onclick="ruch_figury(this.id)"></div>

    <br>

    <div class="box czarny" id="ac" onclick="ruch_figury(this.id)"><img src="figury/nic.png" style="margin-top: 5px;" id="ac" onclick="ruch_figury(this.id)"></div>
    <div class="box" id="bc" onclick="ruch_figury(this.id)"><img src="figury/nic.png" style="margin-top: 5px;" id="bc" onclick="ruch_figury(this.id)"></div>
    <div class="box czarny" id="cc" onclick="ruch_figury(this.id)"><img src="figury/nic.png" style="margin-top: 5px;" id="cc" onclick="ruch_figury(this.id)"></div>
    <div class="box" id="dc" onclick="ruch_figury(this.id)"><img src="figury/nic.png" style="margin-top: 5px;" id="dc" onclick="ruch_figury(this.id)"></div>
    <div class="box czarny" id="ec" onclick="ruch_figury(this.id)"><img src="figury/nic.png" style="margin-top: 5px;" id="ec" onclick="ruch_figury(this.id)"></div>
    <div class="box" id="fc" onclick="ruch_figury(this.id)"><img src="figury/nic.png" style="margin-top: 5px;" id="fc" onclick="ruch_figury(this.id)"></div>
    <div class="box czarny" id="gc" onclick="ruch_figury(this.id)"><img src="figury/nic.png" style="margin-top: 5px;" id="gc" onclick="ruch_figury(this.id)"></div>
    <div class="box" id="hc" onclick="ruch_figury(this.id)"><img src="figury/nic.png" style="margin-top: 5px;" id="hc" onclick="ruch_figury(this.id)"></div>

    <br>

    <div class="box" id="ab" onclick="ruch_figury(this.id)"><img src="figury/nic.png" style="margin-top: 5px;" id="ab" onclick="ruch_figury(this.id)"></div>
    <div class="box czarny" id="bb" onclick="ruch_figury(this.id)"><img src="figury/nic.png" style="margin-top: 5px;" id="bb" onclick="ruch_figury(this.id)"></div>
    <div class="box" id="cb" onclick="ruch_figury(this.id)"><img src="figury/nic.png" style="margin-top: 5px;" id="cb" onclick="ruch_figury(this.id)"></div>
    <div class="box czarny" id="db" onclick="ruch_figury(this.id)"><img src="figury/nic.png" style="margin-top: 5px;" id="db" onclick="ruch_figury(this.id)"></div>
    <div class="box" id="eb" onclick="ruch_figury(this.id)"><img src="figury/nic.png" style="margin-top: 5px;" id="eb" onclick="ruch_figury(this.id)"></div>
    <div class="box czarny" id="fb" onclick="ruch_figury(this.id)"><img src="figury/nic.png" style="margin-top: 5px;" id="fb" onclick="ruch_figury(this.id)"></div>
    <div class="box" id="gb" onclick="ruch_figury(this.id)"><img src="figury/nic.png" style="margin-top: 5px;" id="gb" onclick="ruch_figury(this.id)"></div>
    <div class="box czarny" id="hb" onclick="ruch_figury(this.id)"><img src="figury/nic.png" style="margin-top: 5px;" id="hb" onclick="ruch_figury(this.id)"></div>

    <br>

    <div class="box czarny" id="aa" onclick="ruch_figury(this.id)"><img src="figury/nic.png" style="margin-top: 5px;" id="aa" onclick="ruch_figury(this.id)"></div>
    <div class="box" id="ba" onclick="ruch_figury(this.id)"><img src="figury/nic.png" style="margin-top: 5px;" id="ba" onclick="ruch_figury(this.id)"></div>
    <div class="box czarny" id="ca" onclick="ruch_figury(this.id)"><img src="figury/nic.png" style="margin-top: 5px;" id="ca" onclick="ruch_figury(this.id)"></div>
    <div class="box" id="da" onclick="ruch_figury(this.id)"><img src="figury/nic.png" style="margin-top: 5px;" id="da" onclick="ruch_figury(this.id)"></div>
    <div class="box czarny" id="ea" onclick="ruch_figury(this.id)"><img src="figury/nic.png" style="margin-top: 5px;" id="ea" onclick="ruch_figury(this.id)"></div>
    <div class="box" id="fa" onclick="ruch_figury(this.id)"><img src="figury/nic.png" style="margin-top: 5px;" id="fa" onclick="ruch_figury(this.id)"></div>
    <div class="box czarny" id="ga" onclick="ruch_figury(this.id)"><img src="figury/nic.png" style="margin-top: 5px;" id="ga" onclick="ruch_figury(this.id)"></div>
    <div class="box" id="ha" onclick="ruch_figury(this.id)"><img src="figury/nic.png" style="margin-top: 5px;" id="ha" onclick="ruch_figury(this.id)"></div>
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