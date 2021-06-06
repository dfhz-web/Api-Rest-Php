<?php
   if (isset($_POST['ingresar'])){


    $data = [
        'codigo_documento_electronico'  =>$_POST['codigo_documento_electronico'],
        'nombre_documento_electronico' =>$_POST['nombre_documento_electronico'],
        'tp_documento_electronico' =>$_POST['tp_documento_electronico'],
        'usuario_registro' =>(int)$_POST['usuario_registro'],
        'fechar_registro' =>$_POST['fechar_registro'],
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
    $resultado= file_get_contents('http://186.80.212.253:8081/api/tipo_documento/',false,$contexto);
  

    return $data;
    // header("Location: ../dbo.tipo_documento.php");
 }
   
?>