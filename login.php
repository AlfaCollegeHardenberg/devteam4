<!-- verbinding maken met db-connect en kijken of er iemand is ingelogd-->
<?php 
    require_once "login-pagina/db-connect.php";

if (($_SESSION['loggedin'] == true)){
		echo "<a href='login-pagina/log-out.php'> Uitloggen </a> ";
} else {
    header("Location: login.php");
}
?>

<!-- Als er niet is ingelogd komt die hier uit -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login pagina</title>
    <link rel="stylesheet" href="login-pagina/login.css">
</head>
<body>
      
<!-- Header met het logo van de pagina -->
   
    <header>
       <center>
        <img class="logo" src="logo-paginalogo.jpg" height="10%" width="30%">
        </center>
    </header>
                
<!-- Div met alle text en login velden -->
    
    <div id="login">
        <h1>Log in mijn actie.</h1>
        <hr>
        <p>Welkom. volgt u een opleiding bij het alfa-college of werkt u bij het afla-college? Log hier in op de digitale voorzieningen van het alfa-college.</p>
        <hr>

<!-- login verlden -->

        <form action="inlog-check.php" method="post">
        <p>
        Inlognaam: <input class="inlognaam" type="text" name="user"><br>
        Wachtwoord: <input class="wachtwoord" type="password" name="password"><br>
            <button type="submit" value="Aanmelden" class="login-button">Inloggen</button>
        </p>
        </form>



        <hr>
        <li><p>Uw wachtwoord (en/of gebruikersnaam) vergeten? Ga dan naar het servicepunt/receptie op uw locatie.</p></li>
        <li><p>Voor het wijzigen van uw wachtwoord dient u eerst in te loggen.</p></li>
        <li><p>klik <a href="https://registratie.alfa-college.nl/secure/Conditions.aspx">hier</a> voor de gebruikersvoorwaarden.</p></li>
    </div>

<!-- Footer met footer afbeelding -->

    <footer>
        <img class="footer" src="footer.png">
    </footer>

</body>
</html>