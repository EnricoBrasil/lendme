<?php
    require_once '../config.php';
    header("Content-Type: application/json");

    $codPatrimonio = $_POST["codPedido"];
    $dados =[];

    mysqli_select_db($con,$dbname);


	$query = "SELECT turno.idTurno, turno.nome_turno FROM turno
                    INNER JOIN pedidos on pedidos.Entregue_Funcionario_cod_matricula = funcionario.cod_matricula and pedidos.Solicitado_Funcionario_cod_matricula = funcionario.cod_matricula";

	$resultado = mysqli_query($con,$query);

	if(mysqli_num_rows($resultado) > 0){
      
        while($row = mysqli_fetch_array($resultado)){
            
            array_push($dados, $row["idCategoria"]);
            array_push($dados, $row["nome_categoria"]);
        }
      
        
    }else if(mysqli_num_rows($resultado) == 0){
         $dados["status"] = "Sem registro";

    } 
    else{
        
         $dados["status"] = "error";
    }
	
    echo json_encode($dados);

    mysqli_close($con);

?>