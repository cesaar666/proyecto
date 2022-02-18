<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>tabla costos</title>
  </head>
  <body>
   <?php $moneda="$";?>
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-6 p-5 bg-white shadow-lg rounded">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">costo</th>
      <th scope="col">precio</th>
      <th scope="col">stock</th>
      <th scope="col">stockMinimo</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td> <?php echo $_POST['Nombre'] ?> </td>
      <td> <?php echo $moneda.''. $_POST['Costo']?> </td>
      <td> <?php echo $moneda.''. $_POST['Precio']?> </td>
      <td> <?php echo $_POST['Stock']?> </td>
      <td> <?php echo $_POST['Stockmin']?> </td>

    </tr>

</div>
</div>
</div>
   
  </tbody>
</table>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>