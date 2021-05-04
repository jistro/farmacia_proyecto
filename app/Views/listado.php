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
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Codigo de barras</span>
                        </div>
                        <input type="number" name="CODIGO_DE_BARRAS" id="CODIGO_BARRAS" class="form-control" 
                        placeholder="Ej. 123456789" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <!-- Nombre medicamento -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Nombre de medicamento</span>
                        </div>
                        <input type="text" name="NOMBRE_MEDICAMENTO" id="NOMBRE_MEDICAMENTO" class="form-control" 
                        placeholder="Ej. Tylenol" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <!-- Activo -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Nombre de activo</span>
                        </div>
                        <input type="text" name="ACTIVO" id="ACTIVO" class="form-control" 
                        placeholder="Ej. Paracetamol" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <!-- Tipo medicamento -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Tipo</span>
                        </div>
                        <input type="text" name="TIPO_MEDICAMENTO" id="TIPO_MEDICAMENTO" class="form-control" 
                        placeholder="Ej. Patente" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <!-- Descripcion -->
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Descripcion</span>
                        </div>
                        <textarea class="form-control"  name="DESCRIPCION" id="DESCRIPCION" aria-label="With textarea"></textarea>
                    </div>
                    <br>

                    <!-- Stock -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Stock disponible</span>
                        </div>
                        <input type="number" name="STOCK_DISPONIBLE" id="STOCK_DISPONIBLE" class="form-control" 
                        placeholder="Ej. 35" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                    </div>

                    <button class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
        <hr>

        


        <h2>Lista de medicamentos</h2>
        <div class="row">
            <div class="col-sm-12">
                <div class="table table-responsive">
                    <table class="table table-hover table-bordered " >
                        <thead >
                            <tr>
                                <th>Codigo de barras</th>
                                <th>Nombre del medicamento</th>
                                <th>Activo</th>
                                <th>Tipo</th>
                                <th>Descripcion</th>
                                <th>Stock disponible</th>
                                <th colspan="3" class="thead-dark">Acciones</th>
                            </tr>
                            <?php foreach($datos as $key):?>
                                <tr>
                                    <td><?php echo $key-> CODIGO_DE_BARRAS      ?></td>
                                    <td><?php echo $key-> NOMBRE_MEDICAMENTO    ?></td>
                                    <td><?php echo $key-> ACTIVO                ?></td>
                                    <td><?php echo $key-> TIPO_MEDICAMENTO      ?></td>
                                    <td><?php echo $key-> DESCRIPCION           ?></td>
                                    <td><?php echo $key-> STOCK_DISPONIBLE      ?></td>
                                    <td>
                                        <a href="<?php echo site_url('/obtenerDatos').'/'.$key->CODIGO_DE_BARRAS?>" class="btn btn-warning btn-sm">Editar</a>
                                    </td>
                                    <td>
                                        <a href="<?php echo site_url('/eliminar').'/'.$key->CODIGO_DE_BARRAS?>" class="btn btn-danger btn-sm">Eliminar</a>
                                    </td>
                                    <td>
                                        <a href="<?php echo site_url('/surtir_med').'/'.$key->CODIGO_DE_BARRAS?>" class="btn btn-primary btn-sm">Surtir</a>
                                    </td>
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
        else if (mensaje == '6')
        {
            swal('Listo.','Se ha modificado la cantidad de stock','success');
        }
        else if (mensaje == '7')
        {
            swal('Ehhh, esto es incomodo...','Fallo al modificar el stock','error');
        }
        else if (mensaje == '8')
        {
            swal('Y... ya no hay nada','Se acabo el stock del producto','error');
        }
        else if (mensaje == '9')
        {
            swal('Checa bien tus datos','Estas solicitando mas del stock disponible','error');
        }
        else if (mensaje == '10')
        {
            swal('ERROR','Movimiento ilegal','error');
        }

    </script>
  </body>
</html>