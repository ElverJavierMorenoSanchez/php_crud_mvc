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
    <form class="col-4">
      <h3 class="text-center text-secondary">Registro de autos</h3>
      <div class="mb-3">
        <label for="brand" class="form-label">Marca</label>
        <input type="text" class="form-control" id="brand" name="brand">
      </div>
      <div class="mb-3">
        <label for="model" class="form-label">Modelo</label>
        <input type="text" class="form-control" id="model" name="model">
      </div>
      <div class="mb-3">
        <label for="color" class="form-label">Color</label>
        <input type="text" class="form-control" id="color" name="color">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
      <button type="reset" class="btn btn-secondary">Reset</button>
    </form>
    <div class="col-8">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Marca</th>
            <th scope="col">Modelo</th>
            <th scope="col">Color</th>
            <th scope="col">Opciones</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</body>

</html>