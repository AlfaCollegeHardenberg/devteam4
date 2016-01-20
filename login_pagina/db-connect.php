<?php
    session_start(); 
    $connect = mysqli_connect("https://mysql21600-devteam4.groundctrl.nl ","root","XMlbncZEjS","agile");
    if($connect == false){
       echo ("Probeer het opnieuw");
    }
?>