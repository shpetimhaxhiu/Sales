<?php
// TODO: Kontrolla per ruajtjen e informatave te klientit
if(isset($_POST["submit"])) {
  switch ($_POST["submit"]) {
    case "shto":
      echo "rasti shto";
      break;
    case "ruaj":
      echo "rasti ruaj";
      break;
    default:
      echo "nuk keni access";
      break;
  }
}
 ?>
