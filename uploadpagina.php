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
            <li><a class="home" href="Vervolgpagina.php">Home</a></li>
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


<form enctype="multipart/form-data" name="form" action="send-article.php" method="post">
				<h3>Naam:</h3>
			    <input type="text" name="post_naam" required>
			    <h3>Datum:</h3>
			    <input type="text" name="post_datum" required>
			    <h3>Bestand: </h3>
			    <input type="file" name="post_file">
			    <br><br>
			    <input type="submit" value="Artikel toevoegen">
			</form>


<footer>
</footer>
</body>
</html>