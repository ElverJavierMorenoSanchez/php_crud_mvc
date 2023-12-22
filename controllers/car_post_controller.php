<?php

if (!empty($_POST['btn_submit'])) {

  include "../models/connection.php";
  $name = $_POST['name'];
  $brand = $_POST['brand'];
  $model = $_POST['model'];
  $color = $_POST['color'];

  $sql = $connection->query("INSERT INTO cars (name, brand, model, color) VALUES ('$name', '$brand', '$model', '$color')");

  if ($sql == 1) {
    echo "<div class='alert alert-success'>Carro registrado correctamente</div>";
    header("Location: ../php_mvc_crud/index.php");
  } else {
    echo "<div class='alert alert-success'>Error al insertar datos</div>";
  }
}
?>