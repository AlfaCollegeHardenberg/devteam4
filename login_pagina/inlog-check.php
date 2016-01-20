<?php
require_once "db-connect.php";

$username = $_POST['user'];
$user = mysql_real_escape_string($username);
$password = $_POST['password'];
$pass = mysql_real_escape_string($password);


$query = "SELECT username, password 
                  FROM login
                  WHERE username = '$user'
                  AND password = '$pass' LIMIT 1
                  ";
$checkDb = mysql_query($query, $connect);

if (mysql_num_rows($checkDb) == 1) {
        while($row = mysql_fetch_array($checkDb)) {

                if ($user == $row['username'] && $pass == $row['password']){
                                header("Location: Vervolgpagina.php");
                $_SESSION['username'] = $_POST['user'];
                $_SESSION['loggedin'] = true;
                } else {
         header("Location: login.php");
                }
        }
} else {
    header("Location: login.php");
}
?>