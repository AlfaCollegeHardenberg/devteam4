<?php
    require_once ("db-connect.php");
?>   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Actie Alfa College</title>
<link rel="stylesheet" href="style.css">
<link href='https://fonts.googleapis.com/css?family=Roboto:300italic,400,400italic,700' rel='stylesheet' type='text/css'></head>
<body>

<header>
        <img class="rareVormenBoven" src="Afbeeldingen/raareVormenBoven.png">
    <div id="logo_header">
        <img src="Afbeeldingen/actieLogo.png">
    </div>
    <div id="nav_header">
        <ul>
            <li><a class="home" href="#">Home</a></li>
            <li><a class="wegwijzer" href="#">Wegwijzer</a></li>
            <li><a class="mijnSchool" href="#">Mijn school</a></li>
            <li><a class="programmas" href="#">Programma's</a></li>
        </ul>
    </div>
    <div id="login_gegevens">
       <?php
        echo "<a> Ingelogd als, " . $_SESSION['username'];
		echo "</a>";
		echo "<a class='uitloggen' href='log-out.php'> Uitloggen </a> ";
        ?>
    </div>
</header>

<div id="slider_afbeelding">
    <div id="slider_tekst">
        <h1>Welkom</h1>
            <p>De nieuwe Actie van het Alfa College is online! </br>
               Kijk gerust rond naar alle vernieuwingen!
           </p>
    </div>
<img src="Afbeeldingen/sliderAfbeelding.png">
</div>

<a class="opleiding" href="#">Applicatie ontwikkelaar</a>
<a class="informatie" href="#">Informatie</a>
<a class="lesmaterialen" href="#">Lesmaterialen</a>
<a class="stage" href="#">Stage (BPV)</a>
<a class="roosters" href="rooster.php">Roosters</a>



<footer>
</footer>
</body>
</html>