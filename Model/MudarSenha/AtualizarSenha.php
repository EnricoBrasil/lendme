<?php
    require_once 'connection.php';

    //Dados Funcionario
    $senha = $_POST['senha'];
    $matricula =$_POST['matricula'];

    mysqli_select_db($con,$dbname);
   
    $sqlSenha = "UPDATE login SET senha ='$senha' WHERE idUser = 1";
    
    if ($con->query($sqlSenha) === TRUE) {
      $data = array('status' => 'sucesso');
    } else {
      $data = array('status' => 'erro', 'mensagem' => $con->error);
    }
  
    header('Content-type: application/json');
    echo json_encode($data);

    $con->close();

?>