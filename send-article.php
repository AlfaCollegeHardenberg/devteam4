<?php
    require_once "db-connect.php";

$cleanData = array();
foreach ($_POST as $key => $item){
	$cleanData[$key] = mysql_real_escape_string($connect, $item);
}

$uploadedFile = $_FILES['post_file']['tmp_name'];
    $newFile = 'Content/' . $_FILES['post_file']['name'];
    move_uploaded_file($uploadedImage, $newImage);

$query = "INSERT INTO lesmaterialen (auteur, datum, bestand)
VALUES ('$cleanData[post_naam]', '$cleanData[post_datum]', '$newFile')";

mysql_query($connect, $query);

header("Location: Vervolgpagina.php");
?>
