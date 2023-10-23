<?php

require_once '../config.php';
header('Content-type: application/json');

$matricula = $_POST['matricula'];
$data = [];

mysqli_select_db($con,$dbname);


$sql_Telefone = "DELETE FROM telefone WHERE matricula_Funcionario = '$matricula'";
$sql_Funcionario = "DELETE FROM funcionario WHERE cod_matricula = '$matricula'";

 $data['tel'] = $con->query($sql_Funcionario);
 $data['fun'] = $con->query($sql_Telefone);
if ($con->query($sql_Funcionario) === TRUE && $con->query($sql_Telefone) === TRUE) {
      $data['status'] = 'Deletado';

} else {
    
      $data['status'] = 'error';
}

echo json_encode($data);

mysqli_close($con);
?>