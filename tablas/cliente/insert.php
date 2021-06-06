<?php
   if (isset($_POST['ingresar1'])){


    $data = [

        'id_tipo_identificacion'  =>(int)$_POST['id_tipo_identificacion'],
        'no_identificacion' => (int)$_POST['no_identificacion'],
        'id_naturaleza_tercero' =>(int)$_POST['id_naturaleza_tercero'],
        'id_regimen_tercero' =>(int)$_POST['id_regimen_tercero'],
        'digito_verificacion' =>(int)$_POST['digito_verificacion'],
        'nombres_terceros' =>$_POST['nombres_terceros'],
        'apellidos_terceros' =>$_POST['apellidos_terceros'],
        'id_genero_tercero' =>(int)$_POST['id_genero_tercero'],
        'fecha_nacimiento_tercero' =>$_POST['fecha_nacimiento_tercero'],
        'id_pais_tercero' =>(int)$_POST['id_pais_tercero'],
        'id_departamento_tercero' =>(int)$_POST['id_departamento_tercero'],
        'id_ciudad_tercero' =>(int)$_POST['id_ciudad_tercero'],
        'razon_social_tercero' =>$_POST['razon_social_tercero'],
        'establecimento_comercial_tercero' => "eps",
        'direccion_tercero' =>$_POST['direccion_tercero'],
        'telefono1_tercero' =>$_POST['telefono1_tercero'],
        'telefono2_tercero' =>$_POST['telefono2_tercero'],
        'usuario_registro' =>$_POST['usuario_registro'],
        'fecha_registro' =>$_POST['fecha_registro'],
        'estado_tercero' =>(int)$_POST['estado_tercero'],
        'id_impuesto' =>(int)$_POST['id_impuesto']
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
    $resultado= file_get_contents('http://186.80.212.253:8081/api/Cliente/',false,$contexto);
  
    // header('Location: ../dbo.cliente.php');
    header('Location: ../dbo.cliente.php');
 }
   
?>