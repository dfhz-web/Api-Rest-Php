<?php
   if (isset($_POST['ingresar'])){


    $data = [
        'id_pais'  =>(int)$_POST['id_pais'],
        'nombre' =>$_POST['nombre'],
        'nombre_ISO' =>$_POST['nombre_ISO'],
        'cod_alfa_2' =>$_POST['cod_alfa_2'],
        'cod_alfa_3'  =>$_POST['cod_alfa_3'],
        'cod_numerico' =>(int)$_POST['cod_numerico'],
        'descripcion' =>$_POST['descripcion'],
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
    $resultado= file_get_contents('http://186.80.212.253:8081/api/pais/',false,$contexto);
  
    // header('Location: ../dbo.cliente.php');
    header('Location: ../dbo.pais.php');
 }
   
?>