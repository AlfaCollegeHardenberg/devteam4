<?php
    require_once ("db-connect.php");
    $page = 'one';
    require_once('Vervolgpagina.php');
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Actie Alfa College</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Roboto:300italic,400,400italic,700' rel='stylesheet' type='text/css'></head>
<body>

<script type="text/javascript">
      $(document).ready(function(){
        $('.slider').slick({
          setting-name: setting-value
        });
      });
</script>

<header>
        <img class="rareVormenBoven" src="Afbeeldingen/raareVormenBoven.png">
    <div id="logo_header">
        <a href="Vervolgpagina.php">
            <img src="Afbeeldingen/actieLogo.png">
        </a>
    </div>
<?php
    $nav = "<div id=\"nav_header\">
        <ul>
            <li><a ".(($page == 'one') ? 'class="active"' : '')." class=\"home\" href=\"Vervolgpagina.php\">Home</a></li>
            <li><a class=\"wegwijzer\" href=\"#\">Wegwijzer</a>
		<ul class=\"hidden\">
			<li><a href=\"#\">Lesmaterialen</a></li>
			<li><a href=\"#\">Roosters</a></li>
		</ul>
			</li>
            <li><a class=\"mijnSchool\" href=\"#\">Mijn school</a></li>
            <li><a class=\"programmas\" href=\"#\">Programma's</a>
		<ul class=\"hidden\">
			<li><a href=\"#\">Koken met Denis</a></li>
		</ul>
			</li>
        </ul>
    </div>";
 ?>
 <?php echo $nav; ?>
    <div id="login_gegevens">
       <?php
        echo "<a> Ingelogd als, " . $_SESSION['username'];
		echo "</a>";
		echo "<a class='uitloggen' href='log-out.php'> Uitloggen </a> ";
        ?>
    </div>
</header>

<div class="slider">
  <div><img src="Afbeeldingen/sliderAfbeelding.png"></div>
  <div>your content</div>
  <div>your content</div>
</div>
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
<center><p>Stage</p></center>
</div>
<footer>
	 <img src="Afbeeldingen/footer.png">
	 <p>&copy;Devteam4</p>
</footer>
</body>
</html>
