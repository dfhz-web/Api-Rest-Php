<?php
    $id = $_GET['id'];
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://186.80.212.253:8081/api/pais/'.$id,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'DELETE',
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    header('Location: ../dbo.pais.php')
?>