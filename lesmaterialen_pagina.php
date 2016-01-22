<?php
    require_once ("db-connect.php");
    session_start();
    $page = 'one';
    require_once('Vervolgpagina.php');
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
        <a href="Vervolgpagina.php">
            <img src="Afbeeldingen/actieLogo.png">
        </a>
    </div>
        <ul>
            <li><a class="home" href="Vervolgpagina.php">Home</a>
            <li><a class="wegwijzer\" href="#">Wegwijzer</a>x
		<ul class="hidden">
			<li><a href="lesmaterialen_pagina.php">Lesmaterialen</a></li>
			<li><a href="roosters.php">Roosters</a></li>
		</ul>
			</li>
            <li><a class="mijnSchool" href="#">Mijn school</a></li>
            <li><a class="programmas" href="#">Programma's</a>
		<ul class="hidden">
			<li><a href="#">Koken met Denis</a></li>
		</ul>
			</li>
        </ul>
    </div>";
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
<a class="informatie" href="informatie_pagina.php">Informatie</a>
<a class="lesmaterialen" href="lesmaterialen_pagina.php">Lesmaterialen</a>
<a class="stage" href="stage_pagina.php">Stage (BPV)</a>
<a class="roosters" href="rooster.php">Roosters</a>
<a class="upload" href="uploadpagina.php">Bestanden uploaden</a>

<div class="inhoud">
<br>
<br>
<center><p>Lesmaterialen</p></center>
</div>
<footer>
	 <img src="Afbeeldingen/footer.png">
	 <p>&copy;Devteam4</p>
</footer>
</body>
</html>
