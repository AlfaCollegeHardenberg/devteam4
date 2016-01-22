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

<!-- bjqs.css contains the *essential* css needed for the slider to work -->
    <link rel="stylesheet" href="bjqs.css">

    <!-- demo.css contains additional styles used to set up this demo page - not required for the slider --> 
    <link rel="stylesheet" href="demo.css">

    <!-- load jQuery and the plugin -->
    <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src="js/bjqs-1.3.js"></script>
<link href='https://fonts.googleapis.com/css?family=Roboto:300italic,400,400italic,700' rel='stylesheet' type='text/css'></head>
<body>

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
			</li>
            <li><a class=\"mijnSchool\" href=\"#\">Mijn school</a>
		<ul class=\"hidden\">
			<li><a href=\"lesmaterialen_pagina.php\">Lesmaterialen</a></li>
			<li><a href=\"rooster.php\">Roosters</a></li>
			<li><a href=\"#\">Mijn contactgegevens</a></li>
			<li><a href=\"#\">Mijn profiel</a></li>
		</ul></li>
            <li><a class=\"programmas\" href=\"#\">Programma's</a>
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

<!--  Outer wrapper for presentation only, this can be anything you like -->
      <div id="banner-slide">
	  
	<ul class="bjqs">
          <li><img src="img/banner01.jpg"></li>
          <li><img src="img/banner02.jpg"></li>
          <li><img src="img/banner03.jpg"></li>
	</ul>
	
	        <!-- end Basic jQuery Slider -->

      </div>
      <!-- End outer wrapper -->
      
      <!-- attach the plug-in to the slider parent element and adjust the settings as required -->
      <script class="secret-source">
        jQuery(document).ready(function($) {
          
          $('#banner-slide').bjqs({
            animtype      : 'slide',
            height        : 500,
            width         : 1903,
            responsive    : true,
            randomstart   : true
          });
          
        });
      </script>
<a class="opleiding" href="#">Applicatie ontwikkelaar</a>
<a class="informatie" href="informatie_pagina.php">Informatie</a>
<a class="lesmaterialen" href="lesmaterialen_pagina.php">Lesmaterialen</a>
<a class="stage" href="stage_pagina.php">Stage (BPV)</a>
<a class="roosters" href="rooster.php">Roosters</a>
<a class="upload" href="uploadpagina.php">Bestanden uploaden</a>

<div class="inhoud">
<br>
<br>
<center><p>Home pagina</p></center>
</div>
<footer>
	 <img src="footer.png">
	 <p>&copy;Devteam4</p>
</footer>
</body>
</html>
