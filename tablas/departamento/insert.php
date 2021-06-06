<?php
   if (isset($_POST['ingresar'])){


    $data = [
        'codigo'  =>$_POST['codigo'],
        'nombre' =>$_POST['nombre'],
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
    $resultado= file_get_contents('http://186.80.212.253:8081/api/Departamento/',false,$contexto);
  
    // header('Location: ../dbo.cliente.php');
    header('Location: ../dbo.departamento.php');
 }
   
?>