<?php

require_once "db-connect.php";
    
$result = mysql_query("SELECT bestand FROM lesmaterialen WHERE id =" .$_GET['id'], $connect);  
if (!$result) {
    $message  = 'Invalid query: ' . mysql_error() . "\n";
    $message .= 'Whole query: ' . $query;
    die($message);
}

while ($row = mysql_fetch_assoc($result)) {
    $filename = $row['bestand'];
}

header('Pragma: public');
header('Expires: 0');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Cache-Control: private', false); 
header('Content-Type: application/octet-stream');

header('Content-Disposition: attachment; filename="'.$filename . '";');
header('Content-Transfer-Encoding: binary');
header('Content-Length: ' . filesize($filename));

readfile($filename);

exit;


?>