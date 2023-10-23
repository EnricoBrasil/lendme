<?php
    require_once '../config.php';
    
    header('Content-type: application/json');
    $nomeNovo = $_POST['nomeNovo'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $matriculaCad = $_POST['matriculaCad'];
  
    mysqli_select_db($con,$dbname);
   
    $sql_login ="insert into login (login, email, senha, Funcionario_cod_matricula) values ('$nomeNovo' , '$email' , '$password' , '$matriculaCad')";
    
    if ($con->query($sql_login) === TRUE) {
      $data = array('status' => 'Cadastro com sucesso');
    } else {
      $data = array('status' => 'error', 'mensagem' => $con->error);
    }
  
   
    echo json_encode($data);


    
    $con->close();


 
?>