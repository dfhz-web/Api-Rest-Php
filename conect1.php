<?php 
$arrContextOption = $arrayName = array('ssl' => array("verify_peer"=>false,"verify_peer_name"=>false,), );
$json=file_get_contents('http://186.80.212.253:8081/api/Cliente/',false,stream_context_create($arrContextOption));

$datos=json_decode($json,true);

//echo "<table border=1>";
foreach ($datos as $key => $value) {
	echo "<tr>";
	//foreach ($value as $key2 => $value2) {             
		# code...
		//echo "<td> $value[nombres_terceros] </td>";
	//}
	//echo "</tr>";
}
echo "</table>";
 ?>