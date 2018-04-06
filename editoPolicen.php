<?php

  // Nese eshte GET request dhe ID nuk eshte e zbrazte!
  if(isset($_GET['id'])) {
    echo "<h2>", $_GET['id'], "</h2>";
  }



  // perndryshe redirekto
  else {
    header("Location:ListaPolicave.html");
  }
?>
