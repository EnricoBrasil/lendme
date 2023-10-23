<?php
    require_once '../config.php';
    header('Content-type: application/json');

    $dados = json_decode($_POST['dados'], true);

    $matricula = $_POST['matricula'];
    $nome = $_POST['nome'];
    $cargo = $_POST['cargo'];
    $data = $_POST['data'];
    $telefone = $_POST['telefone'];


     mysqli_select_db($con,$dbname);
    $query = "SELECT * FROM funcionario WHERE cod_matricula = '$matricula'";
    $resultado = mysqli_query($con,$query);

    if(mysqli_num_rows($resultado) > 0){

    $sqlFunc ="UPDATE funcionario SET nome = '$nome', Cargo_idCargo = '$cargo'  , data_Cadastro = '$data' WHERE cod_matricula = '$matricula' ";
    $sqlTel = "UPDATE telefone SET telefone = '$telefone' WHERE matricula_Funcionario = '$matricula' ";

        if ($con->query($sqlFunc) === TRUE && $con->query($sqlTel) === TRUE) {
          $data = array('status' => 'Alterado com sucesso');
        } else {
          $data = array('status' => 'erro', 'mensagem' => $con->error);
        }

    }else{

      $data = array('status' => 'Funcionário não encontrado');
    }
  
    echo json_encode($data);

    $con->close();

?>