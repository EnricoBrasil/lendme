<?php
    require_once '../config.php';
    
    header('Content-type: application/json');
    $matricula = $_POST['matricula'];
    $nome = $_POST['nome'];
    $cargo = $_POST['cargo'];
    $data = $_POST['data'];
    $telefone = $_POST['telefone'];
  
    mysqli_select_db($con,$dbname);
   
    $sql_Funcionario ="insert into funcionario (cod_matricula, nome, Cargo_idCargo, data_Cadastro) values ('$matricula' , '$nome' , '$cargo', '$data')";
    $sql_Telefone = "insert into telefone (	telefone, matricula_Funcionario) values ('$telefone', '$matricula')";

    if ($con->query($sql_Funcionario) === TRUE && $con->query($sql_Telefone) === TRUE) {
      $data = array('status' => 'Inserido com sucesso');
    } else {
      $data = array('status' => 'error', 'mensagem' => $con->error);
    }
  
   
    echo json_encode($data);

    $con->close();

?>