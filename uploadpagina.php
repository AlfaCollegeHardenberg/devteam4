<?php
    require_once ("db-connect.php");
    session_start();
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
            <li><a class="home" href="Vervolgpagina.php">Home</a>
            <li><a class="wegwijzer" href="#">Wegwijzer</a>x
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
    </div>
    <div id="login_gegevens">
       <?php
        echo "<a> Ingelogd als, " . $_SESSION['username'];
		echo "</a>";
		echo "<a class='uitloggen' href='log-out.php'> Uitloggen </a> ";
        ?>
    </div>
</header>


<form class="formulier"enctype="multipart/form-data" name="form" action="send-article.php" method="post">
	<h1> Gegevens </h1>
			    <input class="text" type="text" placeholder="Naam bijv: Bart Schrap" name="post_naam" required>
			    <input class="text" type="text" placeholder="Datum bijv: 14-05-1996" name="post_datum" required>
	<h1> Bestand uploaden </h1>
			    <input type="file" name="post_file">
			    <br><br><br><br>
			    <input type="submit" value="Upload bestand" id="submitje">
</form>


<footer>
	 <img src="footer.png">
	 <p>&copy;Devteam4</p>
</footer>
</body>
</html>
