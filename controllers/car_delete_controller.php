<?php
if (!empty($_GET["id"])) {
  include "../models/connection.php";

  $id = $_GET["id"];
  $sql = $connection->query("DELETE FROM cars WHERE id = $id");

  if ($sql == 1) {
    header("Location: ../php_mvc_crud/index.php");
  } else {
    echo "<div class='alert alert-danger'>Error al eliminar registro</div>";
  }
}
?>