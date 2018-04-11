<?php

// Headeri JSON
header('Content-Type: application/json');

 // Database Connection
 $db = new mysqli('127.0.0.1', 'root', 'njeriop123!@#', 'test2');

// Lista prej MySQL
$policat = $db->query("SELECT * FROM shu LIMIT 5");

// Array e shprazt per me mush pastaj
$arr = array();


// Mushe array
while ($x = $policat->fetch_assoc()) {
  $arr[] = $x;
}

// Kthe JSON Objekte
echo json_encode($arr);
?>
