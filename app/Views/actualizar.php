<?php
    $codigoBarras =$datos[0]['CODIGO_DE_BARRAS'];
    $nombre       =$datos[0]['NOMBRE_MEDICAMENTO'];
    $activo       =$datos[0]['ACTIVO'];
    $tipo         =$datos[0]['TIPO_MEDICAMENTO'];
    $descripcion  =$datos[0]['DESCRIPCION'];
    $stock        =$datos[0]['STOCK_DISPONIBLE'];
?>
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Actualizando datos</title>
  </head>
  <body>
    <div class="container">
        <h1>Actualiza los datos de <?php echo $nombre; ?></h1>
        <div class="row">
            <div class="col-sm-12">
                <form method="POST" action="<?php echo site_url('/actualizar')?>">
                    <input type="text" id="CODIGO_DE_BARRAS" name="CODIGO_DE_BARRAS" hidden="" 
                    value="<?php echo $codigoBarras; ?>">
                    <!-- medicamento -->
                    <label for="nombre_medicamento">Nombre de medicamento </label>
                    <input type="text" name="NOMBRE_MEDICAMENTO" id="NOMBRE_MEDICAMENTO" class="form-control" 
                    value="<?php echo $nombre; ?>">
                    <!-- activo -->
                    <label for="activo">Activo </label>
                    <input type="text" name="ACTIVO" id="ACTIVO" class="form-control" 
                    value="<?php echo $activo; ?>">
                    <!-- tipo de medicamento -->
                    <label for="tipo_medicamento">Tipo de medicamento </label>
                    <input type="text" name="TIPO_MEDICAMENTO" id="TIPO_MEDICAMENTO" class="form-control" 
                    value="<?php echo $tipo; ?>">
                    <!-- descripcion -->
                    <label for="descripcion">Decripcion</label>
                    <input type="text" name="DESCRIPCION" id="DESCRIPCION" class="form-control" 
                    value="<?php echo $descripcion; ?>">
                    <!-- stock -->
                    <label for="stock_disponible">Stock disponible </label>
                    <input type="number" name="STOCK_DISPONIBLE" id="STOCK_DISPONIBLE" class="form-control" 
                    value="<?php echo $stock; ?>">
                    <br>
                    <button class="btn btn-warning">Guardar</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>