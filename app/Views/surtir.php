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
        <h1><?php echo 'Hay '.$stock.' disponibles de '.$nombre; ?></h1>
        <div class="row">
            <div class="col-sm-12">
                <form method="POST" action="<?php echo site_url('/surtir')?>">
                    <input type="text" id="CODIGO_DE_BARRAS" name="CODIGO_DE_BARRAS" hidden="" 
                    value="<?php echo $codigoBarras; ?>">
                    <input type="text" id="NOMBRE_MEDICAMENTO" name="NOMBRE_MEDICAMENTO" hidden="" 
                    value="<?php echo $nombre; ?>">
                    <input type="text" id="ACTIVO" name="ACTIVO" hidden="" 
                    value="<?php echo $activo; ?>">
                    <input type="text" id="TIPO_MEDICAMENTO" name="TIPO_MEDICAMENTO" hidden="" 
                    value="<?php echo $tipo; ?>">
                    <input type="text" id="DESCRIPCIONS" name="DESCRIPCION" hidden="" 
                    value="<?php echo $descripcion; ?>">
                    <input type="text" id="STOCK_DISPONIBLE" name="STOCK_DISPONIBLE" hidden="" 
                    value="<?php echo $stock; ?>">
                    
                    <!-- medicamento -->
                    <label for="Cantidad">Cantidad</label>
                    <input type="number" name="Cantidad" id="Cantidad" class="form-control" 
                    value="<?php echo 'Hay '.$stock.' disponibles'; ?>">
                    <!-- Codigo de receta -->
                    <label for="CODIGO_RECETA">Codigo receta</label>
                    <input type="number" name="CODIGO_RECETA" id="CODIGO_RECETA" class="form-control" 
                    value="<?php echo 'Ejemplo 5589798552'; ?>">
                    <!-- Doctor -->
                    <label for="NOMBRE_DOCTOR">Doctor que receto</label>
                    <input type="text" name="NOMBRE_DOCTOR" id="NOMBRE_DOCTOR" class="form-control" 
                    value="<?php echo 'Nombre(s) Apellidos'; ?>">
                    <!-- Institucion medica -->
                    <label for="INSTITUCION_MED">Institucion</label>
                    <input type="text" name="INSTITUCION_MED" id="INSTITUCION_MED" class="form-control" 
                    value="<?php echo 'Ejemplo imss'; ?>">
                    <input type="text" id="CDB_SURTIDO" name="CDB_SURTIDO" hidden="" 
                    value="<?php echo $codigoBarras; ?>">

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