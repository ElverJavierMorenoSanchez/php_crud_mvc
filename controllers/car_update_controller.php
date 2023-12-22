<?php
if (!empty($_POST['btn_update'])) {

  include "../models/connection.php";
  $id = $_POST['id'];
  $name = $_POST['name'];
  $brand = $_POST['brand'];
  $model = $_POST['model'];
  $color = $_POST['color'];

  $sql = $connection->query("UPDATE cars SET name = '$name', brand = '$brand', model = '$model', color = '$color' WHERE id = $id");

  if ($sql == 1) {
    echo "<div class='alert alert-success'>Carro actualizado correctamente</div>";
    header("Location: ../index.php");
  } else {
    echo "<div class='alert alert-success'>Error al actualizar datos</div>";
  }
}
?>