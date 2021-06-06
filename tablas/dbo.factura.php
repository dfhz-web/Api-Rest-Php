<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    <link rel="icon" href="../ico/logo.ico">

    <!-- links para el framework boostrap-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!--links para la libreria de datatables-->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
  <!--links of button for export of datatables-->
  <script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">
 

    <title>CLIENTE</title>
</head>

<body>

    <a href="../admistrador/administrador.php" class="button">
        <span></span>volver
    </a>
    <a href="../index.php" class="button">
        <span></span>Cerrar Sesion
    </a>
    
    <div class="row">
    
        <div class="col-md-12 text-center">
        <img class="animate__animated animate__backInLeft" src="../img/inicio/logo2.png">
        <h1>Tabla Clientes</h1>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_agregar_persona">Agregar Cliente</button>
        </div>
        <div class="col-md-12">
            <table id="example" class="display table" style="width:100%">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Tipo Identificacion</th>
                        <th>No. Identificacion</th>
                        <th>Apellido</th>
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
                   <?phpinclude_once'../conect.php';
                    $sql_per = "SELECT * FROM dbo.cliente ";

                    $res_per = mysqli_query($sql_per,$row_per);
                    while ($row_per = mysqli_fetch_assoc($res_per)) { 
                        ?>
                        <tr>
                            <td><?php echo $row_per['id_tercero']; ?></td>
                            <td><?php echo $row_per['id_tipo_identificacion']; ?></td>
                            <td><?php echo $row_per['no_identificacion']; ?> </td>
                            <td><?php echo $row_per['id_naturaleza_tercero']; ?> </td>
                            <td><?php echo $row_per['id_regimen_tercero']; ?></td>
                            <td><?php echo $row_per['digito_verificado']; ?></td>
                            <td><?php echo $row_per['nombres_tercero']; ?></td>
                            <td><?php echo $row_per['apellidos_terceros']; ?></td>
                            <td><?php echo $row_per['id_genero_tercero']; ?></td>
                            <td><?php echo $row_per['fecha_nacimiento_tecero']; ?></td>
                            <td><?php echo $row_per['id_pais_tercero']; ?></td>
                            <td><?php echo $row_per['id_departamento_tercero']; ?></td>
                            <td><?php echo $row_per['id_ciudad_tercero']; ?></td>
                            <td><?php echo $row_per['razon_zocial_tercero']; ?> </td>
                            <td><?php echo $row_per['establecimiento_comercial_tercero']; ?> </td>
                            <td><?php echo $row_per['direccion_tercero']; ?></td>
                            <td><?php echo $row_per['telefono1_tercero']; ?></td>
                            <td><?php echo $row_per['telefono2_tercero']; ?></td>
                            <td><?php echo $row_per['usuario_registro']; ?></td>
                            <td><?php echo $row_per['fecha_registro']; ?></td>
                            <td><?php echo $row_per['estado_tercero']; ?></td>
                            <td><?php echo $row_per['id_impuesto']; ?></td>

                            <td>
                                <a href="../cliente/editar.php ?id=<?php echo $row_per['id_tercero']; ?>" target="_blank" class="btn btn-primary">Editar</a>
                                <a href="../cliente/eliminar.php ?id=<?php echo $row_per['id_tercero']; ?>" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                    }
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
                    <form action="../tabla_admistrador/cliente/insert.php" class="form-group" method="post">
                        
                        <th>Tipo Identificacion</th>
                        <input type="text" name="id_tipo_identificacion" class="form-control" maxlength="99" required>
                        <th>No. Identificacion</th>
                        <input type="text" name="no_identificacion" class="form-control" maxlength="99" required>
                        <th>Naturaleza</th>
                        <input type="text" name="" class="form-control" maxlength="99" required>
                        <th>Regimen</th>
                        <input type="text" name="id_regimen_tercero" class="form-control" maxlength="99" required>
                        <th>Digito de Verificacion</th>
                        <input type="text" name="digito_verificado" class="form-control" maxlength="99" required>
                        <th>Nombres</th>
                        <input type="text" name="nombres_tercero" class="form-control" maxlength="99" required>
                        <th>Apellidos</th>
                        <input type="text" name="apellidos_terceros" class="form-control" maxlength="99" required>
                        <th>Genero</th>
                        <input type="text" name="id_genero_tercero" class="form-control" maxlength="99" required>
                        <th>Fecha de Nacimiento</th>
                        <input type="date" name="fecha_nacimiento_tecero" class="form-control" maxlength="99" required>
                        <th>Pais</th>
                        <input type="text" name="id_pais_tercero" class="form-control" maxlength="99" required>
                        <th>Departamento</th>
                        <input type="text" name="id_departamento_tercero" class="form-control" maxlength="99" required>
                        <th>Ciudad</th>
                        <input type="text" name="id_ciudad_tercero" class="form-control" maxlength="99" required>
                        <th>Razon Zocial </th>
                        <input type="text" name="razon_zocial_tercero" class="form-control" maxlength="99" required>
                        <th>Establecimiento comercial</th>
                        <input type="text" name="establecimiento_comercial_tercero" class="form-control" maxlength="99" required>
                        <th>Direccion</th>
                        <input type="text" name="direccion_tercero" class="form-control" maxlength="99" required>
                        <th>Telefono 1</th>
                        <input type="text" name="telefono1_tercero" class="form-control" maxlength="99" required>
                        <th>Telefon 2 </th>
                        <input type="text" name="telefono2_tercero" class="form-control" maxlength="99" required>
                        <th>Usario</th>
                        <input type="text" name="usuario_registr" class="form-control" maxlength="99" required>
                        <th>Fecha de Registro</th>
                        <input type="date" name="fecha_registro" class="form-control" maxlength="99" required>
                        <th>Estado</th>
                        <input type="text" name="estado_tercero" class="form-control" maxlength="99" required>
                        <th>Impuesto</th>
                        <input type="text" name="id_impuesto" class="form-control" maxlength="99" required>
                       
                        <br>
                        <button type="submit" class="btn btn-success">Agregar</button>
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