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
 

    <title>Tipo_documento</title>
</head>

<body>

   
    
    <div class="row">
    
        <div class="col-md-12 text-center">
        
        <h1>Tipo_documento</h1>
        </div>

        <div class="col-md-12 text-left">
        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modal_agregar_persona">Create</button>
        </div>
        <div class="col-md-12">
            <table id="example" class="display table" style="width:100%">
                <thead>
                    <tr>
                        <th>id_tp_documento</th>
                        <th>codigo_documento_electronico</th>
                        <th>nombre_documento_electronico</th>
                        <th>tp_documento_electronico</th>
                        <th>usuario_registro</th>
                        <th>fechar_registro</th>
                        <th>estado</th>
                        
                       
                    </tr>
                </thead>
                <tbody>
                   <?php $arrContextOption = $arrayName = array('ssl' => array("verify_peer"=>false,"verify_peer_name"=>false,), );
                        $json=file_get_contents('http://186.80.212.253:8081/api/tipo_documento/',false,stream_context_create($arrContextOption));
                        $datos=json_decode($json,true);

                        foreach ($datos as $key => $row_per) {
                        ?>
                        <tr>
                            <td><?php echo $row_per['id_tp_documento']; ?></td>
                            <td><?php echo $row_per['codigo_documento_electronico']; ?></td>
                            <td><?php echo $row_per['nombre_documento_electronico']; ?> </td>
                            <td><?php echo $row_per['tp_documento_electronico']; ?> </td>
                            <td><?php echo $row_per['usuario_registro']; ?></td>
                            <td><?php echo $row_per['fechar_registro']; ?></td>
                            <td><?php echo $row_per['estado']; ?></td>
                            

                            <td>
                                <a href="docu/eliminar.php ?id=<?php echo $row_per['id_tp_documento']; ?>" class="btn btn-danger">Delete</a>
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
                    <h5 class="modal-title" id="exampleModalLabel">Agregar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">


              <form action="docu/insert.php" class="form-group" method="POST">
                        


                        <th>codigo_documento_electronico</th>
                        <input  type="text" name="codigo_documento_electronico" class="form-control">


                        <th>nombre_documento_electronico</th>
                        <input type="text" name="nombre_documento_electronico" class="form-control">


                        <th>tp_documento_electronico</th>
                        <input type="text" name="tp_documento_electronico" class="form-control">


                        <th>usuario_registro</th>
                        <input type="text" name="usuario_registro" class="form-control">

                        <th>fechar_registro</th>
                        <input type="text" name="fechar_registro" class="form-control">

                        <th>estado</th>
                        <input type="text" name="estado" class="form-control">

                       
                        <br>
                        <button name="ingresar" type="submit" class="btn btn-success">Agregar</button>
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