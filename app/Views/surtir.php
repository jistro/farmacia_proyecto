<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Registro de stock</title>
  </head>
  <body>
    <div class="container">
        <h1>Surtir receta</h1>
        <hr>
        <h2>Lista de personas</h2>
        <div class="row">
            <div class="col-sm-12">
                <div class="table table-responsive">
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>Codigo de barras</th>
                                <th>Nombre del medicamento</th>
                                <th>Activo</th>
                                <th>Tipo</th>
                                <th>Descripcion</th>
                                <th>Stock disponible</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                            <?php foreach($datos as $key):?>
                                <tr>
                                    <th><?php echo $key-> CODIGO_DE_BARRAS      ?></th>
                                    <th><?php echo $key-> NOMBRE_MEDICAMENTO    ?></th>
                                    <th><?php echo $key-> ACTIVO                ?></th>
                                    <th><?php echo $key-> TIPO_MEDICAMENTO      ?></th>
                                    <th><?php echo $key-> DESCRIPCION           ?></th>
                                    <th><?php echo $key-> STOCK_DISPONIBLE      ?></th>
                                    <th>
                                        <a href="<?php echo site_url('/obtenerDatos').'/'.$key->CODIGO_DE_BARRAS?>" class="btn btn-warning btn-sm">Editar</a>
                                    </th>
                                    <th>
                                        <a href="<?php echo site_url('/eliminar').'/'.$key->CODIGO_DE_BARRAS?>" class="btn btn-danger btn-sm">Eliminar</a>
                                    </th>
                                </tr>
                            <?php endforeach; ?>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>