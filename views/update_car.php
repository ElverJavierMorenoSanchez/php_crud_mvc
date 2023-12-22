<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Actualizar registro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <form class="col-4 m-auto mt-5" method="POST">
      <h3 class="text-center p-3 bg-info">Modificar auto</h3>
      <?php
      require "../controllers/car_update_controller.php";
      require "../models/connection.php";

      $id = $_GET['id'];
      $sql = $connection->query("SELECT * FROM cars WHERE id = $id");
      ?>

      <?php
      while ($data = $sql->fetch_object()) {
        ?>

        <input type="hidden" name="id" value="<?= $data->id ?>">
        <div class="mb-3">
          <label for="name" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="name" name="name" value="<?= $data->name ?>">
        </div>
        <div class="mb-3">
          <label for="brand" class="form-label">Marca</label>
          <input type="text" class="form-control" id="brand" name="brand" value="<?= $data->brand ?>">
        </div>
        <div class="mb-3">
          <label for="model" class="form-label">Modelo</label>
          <input type="text" class="form-control" id="model" name="model" value="<?= $data->model ?>">
        </div>
        <div class="mb-3">
          <label for="color" class="form-label">Color</label>
          <input type="text" class="form-control" id="color" name="color" value="<?= $data->color ?>">
        </div>

        <?php
      }
      ?>

      <button type="submit" class="btn btn-primary" name="btn_update" value="ok">Guardar</button>
      <button type="reset" class="btn btn-secondary">Limpiar</button>
    </form>
  </div>
</body>

</html>