<?php

require_once '../config.php';
header('Content-type: application/json');

$codPatrimonio = $_POST['codPatrimonio'];
$data = [];

mysqli_select_db($con,$dbname);


$sql_Produtos = "DELETE FROM produtos WHERE cod_patrimonio = '$codPatrimonio'";

if ($con->query($sql_Produtos) === TRUE) {
      $data['status'] = 'Deletado';

} else {
    
      $data['status'] = 'error';
}

echo json_encode($data);

mysqli_close($con);
?>