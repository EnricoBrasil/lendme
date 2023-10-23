<?php

require_once '../config.php';
header('Content-type: application/json');

$codPedido = $_POST['codPedido'];
$data = [];

mysqli_select_db($con,$dbname);


$sql_Pedidos = "DELETE FROM pedidos WHERE idPedidos = '$codPedido'";

if ($con->query($sql_Pedidos) === TRUE) {
      $data['status'] = 'Deletado';

} else {
    
      $data['status'] = 'error';
}

echo json_encode($data);

mysqli_close($con);
?>