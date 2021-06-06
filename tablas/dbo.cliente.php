<?php include_once('../conect1.php');?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    <link rel="icon" href="../ico/logo.ico">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">
 

    <title>CLIENTE</title>
</head>

<body>

   
    
    <div class="row">
    
        <div class="col-md-12 text-center">
        
        <h1>Clientes</h1>
        </div>

        <div class="col-md-12 text-left">
        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modal_agregar_persona">Create</button>
        </div>
        <div class="col-md-12">
            <table id="example" class="display table" style="width:100%">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Tipo Identificacion</th>
                        <th>No. Identificacion</th>
                        <th>Naturaleza</th>
                        <th>Regimen</th>
                        <th>Digito de Verificacion</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Genero</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Pais</th>
                        <th>Departamento</th>
                        <th>Ciudad</th>
                        <th>Razon Zocial </th>
                        <th>Establecimiento comercial</th>
                        <th>Direccion</th>
                        <th>Telefono 1</th>
                        <th>Telefon 2 </th>
                        <th>Usario</th>
                        <th>Fecha de Registro</th>
                        <th>Estado</th>
                        <th>Impuesto</th>
                       
                    </tr>
                </thead>
                <tbody>
                   <?php $arrContextOption = $arrayName = array('ssl' => array("verify_peer"=>false,"verify_peer_name"=>false,), );
                        $json=file_get_contents('http://186.80.212.253:8081/api/Cliente/',false,stream_context_create($arrContextOption));
                        $datos=json_decode($json,true);

                        foreach ($datos as $key => $row_per) {
                        ?>
                        <tr>
                            <td><?php echo $row_per['id_tercero']; ?></td>
                            <td><?php echo $row_per['id_tipo_identificacion']; ?></td>
                            <td><?php echo $row_per['no_identificacion']; ?> </td>
                            <td><?php echo $row_per['id_naturaleza_tercero']; ?> </td>
                            <td><?php echo $row_per['id_regimen_tercero']; ?></td>
                            <td><?php echo $row_per['digito_verificacion']; ?></td>
                            <td><?php echo $row_per['nombres_terceros']; ?></td>
                            <td><?php echo $row_per['apellidos_terceros']; ?></td>
                            <td><?php echo $row_per['id_genero_tercero']; ?></td>
                            <td><?php echo $row_per['fecha_nacimiento_tercero']; ?></td>
                            <td><?php echo $row_per['id_pais_tercero']; ?></td>
                            <td><?php echo $row_per['id_departamento_tercero']; ?></td>
                            <td><?php echo $row_per['id_ciudad_tercero']; ?></td>
                            <td><?php echo $row_per['razon_social_tercero']; ?> </td>
                            <td><?php echo $row_per['establecimento_comercial_tercero']; ?> </td>
                            <td><?php echo $row_per['direccion_tercero']; ?></td>
                            <td><?php echo $row_per['telefono1_tercero']; ?></td>
                            <td><?php echo $row_per['telefono2_tercero']; ?></td>
                            <td><?php echo $row_per['usuario_registro']; ?></td>
                            <td><?php echo $row_per['fecha_registro']; ?></td>
                            <td><?php echo $row_per['estado_tercero']; ?></td>
                            <td><?php echo $row_per['id_impuesto']; ?></td>

                            <td>
                                <a href="cliente/eliminar.php ?id=<?php echo $row_per['id_tercero']; ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal Agregar Cliente-->
    <div class="modal fade" id="modal_agregar_persona" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Cliente</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">


    <form action="cliente/insert.php" class="form-group" method="POST">
                        


                        <th>Tipo Identificacion</th>
                        <input  type="text" name="id_tipo_identificacion" class="form-control" maxlength="99">
                        <th>No. Identificacion</th>
                        <input type="text" name="no_identificacion" class="form-control" maxlength="99">
                        <th>Naturaleza</th>
                        <input type="text" name="id_naturaleza_tercero" class="form-control" maxlength="99">
                        <th>Regimen</th>
                        <input type="text" name="id_regimen_tercero" class="form-control" maxlength="99">
                        <th>Digito de Verificacion</th>
                        <input type="text" name="digito_verificacion" class="form-control" maxlength="99">
                        <th>Nombres</th>
                        <input type="text" name="nombres_terceros" class="form-control" maxlength="99">
                        <th>Apellidos</th>
                        <input type="text" name="apellidos_terceros" class="form-control" maxlength="99">
                        <th>Genero</th>
                        <input type="text" name="id_genero_tercero" class="form-control" maxlength="99">
                        <th>Fecha de Nacimiento</th>

                        <input type="text" name="fecha_nacimiento_tercero" class="form-control">

                        <th>Pais</th>
                        <input type="text" name="id_pais_tercero" class="form-control" maxlength="99">
                        <th>Departamento</th>
                        <input type="text" name="id_departamento_tercero" class="form-control" maxlength="99" >
                        <th>Ciudad</th>
                        <input type="text" name="id_ciudad_tercero" class="form-control" maxlength="99" >
                        <th>Razon Zocial </th>


                        <input type="text" name="razon_social_tercero" class="form-control" maxlength="99" >
                       
                       
                       
                     
                       
                       
                       
                        <th>Direccion</th>
                        <input type="text" name="direccion_tercero" class="form-control" maxlength="99" >
                        <th>Telefono 1</th>
                        <input type="text" name="telefono1_tercero" class="form-control" maxlength="99" >
                        <th>Telefon 2 </th>
                        <input type="text" name="telefono2_tercero" class="form-control" maxlength="99">
                        <th>Usario</th>
                        <input type="text" name="usuario_registro" class="form-control" maxlength="99" >
                        <th>Fecha de Registro</th>
                        <input type="text" name="fecha_registro" class="form-control" maxlength="99" >
                        <th>Estado</th>
                        <input type="text" name="estado_tercero" class="form-control" maxlength="99">
                        <th>Impuesto</th>
                        <input type="text" name="id_impuesto" class="form-control" maxlength="99" >
                       
                        <br>
                        <button name="ingresar1" type="submit" class="btn btn-success">Agregar</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>