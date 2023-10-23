<?php
    require_once '../config.php';
    
    header('Content-type: application/json');
    $codPatrimonio = $_POST['codPatrimonio'];
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $ocupado = $_POST['ocupado'];
    $apelido = $_POST['apelido'];
    $categoria = $_POST['categoria'];
  
    mysqli_select_db($con,$dbname);
   
    $sql_Produtos ="insert into produtos (cod_patrimonio, nome, descricao, ocupado, apelido, Categoria_idCategoria) values ('$codPatrimonio' , '$nome' , '$descricao', '$ocupado', '$apelido','$categoria')";

    if ($con->query($sql_Produtos) === TRUE) {
      $data = array('status' => 'Inserido com sucesso');
    } else {
      $data = array('status' => 'error', 'mensagem' => $con->error);
    }
  
   
    echo json_encode($data);

    $con->close();

?>