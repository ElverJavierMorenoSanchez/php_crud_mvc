<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MVC CRUD PHP</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

  <div class="container-fluid row mt-5">
    <form class="col-4" method="POST">
      <h3 class="text-center text-secondary">Registro de autos</h3>
      <?php
      include "models/connection.php";
      include "controllers/car_post_controller.php";
      ?>
      <div class="mb-3">
        <label for="name" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="mb-3">
        <label for="brand" class="form-label">Marca</label>
        <input type="text" class="form-control" id="brand" name="brand" required>
      </div>
      <div class="mb-3">
        <label for="model" class="form-label">Modelo</label>
        <input type="text" class="form-control" id="model" name="model" required>
      </div>
      <div class="mb-3">
        <label for="color" class="form-label">Color</label>
        <input type="text" class="form-control" id="color" name="color" required>
      </div>
      <button type="submit" class="btn btn-primary" name="btn_submit" value="ok">Guardar</button>
      <button type="reset" class="btn btn-secondary">Limpiar</button>
    </form>
    <div class="col-8">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Marca</th>
            <th scope="col">Modelo</th>
            <th scope="col">Color</th>
            <th scope="col">Opciones</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include "models/connection.php";
          include "controllers/car_delete_controller.php";
          $sql = $connection->query("SELECT * FROM cars");
          while ($datos = $sql->fetch_object()) { ?>
            <tr>
              <th scope="row">
                <?= $datos->id ?>
              </th>
              <td>
                <?= $datos->name ?>
              </td>
              <td>
                <?= $datos->brand ?>
              </td>
              <td>
                <?= $datos->model ?>
              </td>
              <td>
                <?= $datos->color ?>
              </td>
              <td>
                <a href="views/update_car.php?id=<?= $datos->id ?>" class="btn btn-warning">Editar</a>
                <a href="index.php?id=<?= $datos->id ?>" class="btn btn-danger">Eliminar</a>
              </td>
            </tr>
          <?php } ?>

        </tbody>
      </table>
    </div>
  </div>
</body>

</html>