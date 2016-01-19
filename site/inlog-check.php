<?php
require_once "db-connect.php";

$username = $_POST['user'];
$user = mysqli_real_escape_string($connect, $username);
$password = $_POST['password'];
$pass = mysqli_real_escape_string($connect, $password);


$query = "SELECT username, password 
		  FROM login
		  WHERE username = '$user'
		  AND password = '$pass' LIMIT 1
		  ";

$checkDb = mysqli_query($connect, $query);

if (mysqli_num_rows($checkDb) == 1) {
	while($row = mysqli_fetch_array($checkDb)) {

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