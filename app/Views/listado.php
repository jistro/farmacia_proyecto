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
        <h1>Registro de stock</h1>
        <?php $autoload['helper'] = array('url'); ?>
        <div class="row">
            <div class="col-sm-12">
                <form method="POST" action=" <?php echo site_url('/crear') ?> ">

                    <!-- Codigo de barras-->
                    <label for="codigo_de_barras">Codigo de barras </label>
                    <input type="number" name="CODIGO_DE_BARRAS" id="CODIGO_BARRAS" class="form-control">
                    <!-- Apellidos -->
                    <label for="nombre_medicamento">Nombre de medicamento </label>
                    <input type="text" name="NOMBRE_MEDICAMENTO" id="NOMBRE_MEDICAMENTO" class="form-control">
                    <!-- Correo -->
                    <label for="activo">Activo </label>
                    <input type="text" name="ACTIVO" id="ACTIVO" class="form-control">
                    <!-- Nombre-->
                    <label for="tipo_medicamento">Tipo de medicamento </label>
                    <input type="text" name="TIPO_MEDICAMENTO" id="TIPO_MEDICAMENTO" class="form-control">
                    <!-- Apellidos -->
                    <label for="descripcion">Decripcion</label>
                    <input type="text" name="DESCRIPCION" id="DESCRIPCION" class="form-control">
                    <!-- Correo -->
                    <label for="stock_disponible">Stock disponible </label>
                    <input type="number" name="STOCK_DISPONIBLE" id="STOCK_DISPONIBLE" class="form-control">
                    <br>
                    <button class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
        <hr>
        <h2>Lista de medicamentos</h2>
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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">
        let mensaje = '<?php echo $mensaje ?>';
        
        if (mensaje == '0')
        {
            swal('Error :c','Fallo al agregar','error');
        }
        else if (mensaje == '1')
        {
            swal('Exito!!!','Agregado con exito','success');
        }
        else if (mensaje == '2')
        {
            swal('Lo que esta reescrito queda reescrito','Actualizado con exito','success');
        }
        else if (mensaje == '3')
        {
            swal('Houston tenemos un problema','Fallo al actualizar','error');
        }
        else if (mensaje == '4')
        {
            swal('Boom baby!!!','Se borro con exito','success');
        }
        else if (mensaje == '5')
        {
            swal('Ehhh, esto es incomodo...','Fallo al borrar','error');
        }
    </script>
  </body>
</html>