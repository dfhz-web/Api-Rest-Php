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
 

    <title>Productos</title>
</head>

<body>

   
    
    <div class="row">
    
        <div class="col-md-12 text-center">
        
        <h1>Productos</h1>
        </div>

        <div class="col-md-12 text-left">
        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modal_agregar_persona">Create</button>
        </div>
        <div class="col-md-12">
            <table id="example" class="display table" style="width:100%">
                <thead>
                    <tr>
                        <th>id_producto</th>
                        <th>codigo</th>
                        <th>serial</th>
                        <th>nombre</th>
                        <th>descripcion</th>
                        <th>precio_venta</th>
                        <th>precio_inventario</th>
                        <th>fecha_registro</th>
                        <th>estado</th>
                        
                       
                    </tr>
                </thead>
                <tbody>
                   <?php $arrContextOption = $arrayName = array('ssl' => array("verify_peer"=>false,"verify_peer_name"=>false,), );
                        $json=file_get_contents('http://186.80.212.253:8081/api/Producto',false,stream_context_create($arrContextOption));
                        $datos=json_decode($json,true);

                        foreach ($datos as $key => $row_per) {
                        ?>
                        <tr>
                            <td><?php echo $row_per['id_producto']; ?></td>
                            <td><?php echo $row_per['codigo']; ?></td>
                            <td><?php echo $row_per['serial']; ?> </td>
                            <td><?php echo $row_per['nombre']; ?> </td>
                            <td><?php echo $row_per['descripcion']; ?></td>
                            <td><?php echo $row_per['precio_venta']; ?></td>
                            <td><?php echo $row_per['precio_inventario']; ?> </td>
                            <td><?php echo $row_per['fecha_registro']; ?> </td>
                            <td><?php echo $row_per['estado']; ?></td>
                            

                            <td>
                                <a href="productos/eliminar.php ?id=<?php echo $row_per['id_producto']; ?>" class="btn btn-danger">Delete</a>
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


              <form action="productos/insert.php" class="form-group" method="POST">
                        


                        <th>codigo</th>
                        <input  type="text" name="codigo" class="form-control">


                        <th>serial</th>
                        <input type="text" name="serial" class="form-control">


                        <th>nombre</th>
                        <input type="text" name="nombre" class="form-control">


                        <th>descripcion</th>
                        <input type="text" name="descripcion" class="form-control">

                        <th>precio_venta</th>
                        <input type="text" name="precio_venta" class="form-control">

                        <th>precio_inventario</th>
                        <input type="text" name="precio_inventario" class="form-control">

                        <th>fecha_registro</th>
                        <input type="text" name="fecha_registro" class="form-control">

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