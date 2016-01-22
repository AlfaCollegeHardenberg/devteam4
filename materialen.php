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
    <?php
    $sql = mysql_query("SELECT * FROM lesmaterialen", $connect);

    while($results = mysql_fetch_array($sql))
    {
        echo $results['auteur'] . " " . $results['datum'];
        echo ' <a class="download" href="download.php?id='.$results['id'] . '">Download bestand</a><br><hr><br>';
    }

    ?>

<footer>
</footer>
</body>
</html>
