<?php
    require_once '../config.php';
    header('Content-type: application/json');

    $dados = json_decode($_POST['dados'], true);

    $codPedido = $_POST['codPedido'];
    $data = $_POST['data'];
    $turno = $_POST['turno'];
    $turma = $_POST['turma'];
    $devolucao = $_POST['devolucao'];
    $entregador = $_POST['entregador'];
    $solicitante = $_POST['solicitante'];



     mysqli_select_db($con,$dbname);
    $query = "SELECT * FROM pedidos WHERE idPedidos = '$codpedido'";
    $resultado = mysqli_query($con,$query);

    if(mysqli_num_rows($resultado) > 0){

    $sqlPedi ="UPDATE pedidos SET data = '$data', turno = '$turno', turma = '$turma', devolucao = '$devolucao', Entregue_Funcionario_cod_matricula = '$entregador', Solicitado_Funcionario_cod_matricula = $solicitante WHERE idPedidos = '$codPedido'";
    

        if ($con->query($sqlPedi) === TRUE) {
          $data = array('status' => 'Alterado com sucesso');
        } else {
          $data = array('status' => 'erro', 'mensagem' => $con->error);
        }

    }else{

      $data = array('status' => 'Pedido não encontrado');
    }
  
    echo json_encode($data);

    $con->close();

?>