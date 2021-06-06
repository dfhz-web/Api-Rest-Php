<?php
   if (isset($_POST['ingresar'])){


    $data = [
        'codigo'  =>(int)$_POST['codigo'],
        'serial' =>$_POST['serial'],
        'nombre' =>$_POST['nombre'],
        'descripcion' =>$_POST['descripcion'],
        'precio_venta' =>(int)$_POST['precio_venta'],
        'precio_inventario' =>(int)$_POST['precio_inventario'],
        'fecha_registro' =>$_POST['fecha_registro'],
        'estado' =>(int)$_POST['estado']
      
        
    ];
                
    $datos=json_encode($data);
        echo $datos;
    $opciones = array('http' =>
    array('method'  => 'POST',
          'header' =>'Content-type: application/json',
          'content' => $datos
        ),
        "ssl"=> array("verify_peer"=>false,"verify_peer_name"=>false,),
    );

    $contexto = stream_context_create($opciones);
    $resultado= file_get_contents('http://186.80.212.253:8081/api/Producto/',false,$contexto);
    return $data;
    // header('Location: ../dbo.cliente.php');
    header('Location: ../dbo.productos.php');
 }
   
?>