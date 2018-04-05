<?php
 // Database Connection
 $db = new mysqli('127.0.0.1', 'root', 'njeriop', 'test2');

// $dumped = var_dump($db);
// $serialized = json_encode($dumped);

// echo '<pre>',$serialized, '</pre>';


$policat = $db->query("SELECT * FROM shu");
$x = 1;


// Json Data Preparation
echo '{"data":[';
while($polica = $policat->fetch_assoc()) {
  if($x < $policat->num_rows) {
    echo json_encode($polica), ',';
  } else {
    echo json_encode($polica);
  }
  $x++;
}
echo "]}";
?>
