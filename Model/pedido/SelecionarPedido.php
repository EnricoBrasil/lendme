<?php
    require_once '../config.php';
    header("Content-Type: application/json");

    $dados =[];

    mysqli_select_db($con,$dbname);

    //join para selecionar todas as info do Pedido
    
	$query = "SELECT ped.idPedidos, ped.data, ped.turma, ped.devolucao, func.nome as entregador, func.nome as solicitante, tu.nome_turno FROM pedidos as ped 
                    INNER JOIN funcionario as func 
                        ON ped.Entregue_Funcionario_cod_matricula = func.cod_matricula and ped.Solicitado_Funcionario_cod_matricula = func.cod_matricula 
                    INNER JOIN turno as tu 
                        ON ped.turno = tu.idturno";                
                                                      

	$resultado = mysqli_query($con,$query);
    
	if(mysqli_num_rows($resultado) > 0){

        while($row = mysqli_fetch_array($resultado)){
            
            array_push($dados,$row["idPedidos"]);
            array_push($dados,$row["data"]);
            array_push($dados,$row["turma"]);
            array_push($dados,$row["devolucao"]);
            array_push($dados,$row["entregador"]);           
            array_push($dados,$row["solicitante"]);
            array_push($dados,$row["nome_turno"]);
        }
      
        
    }else if(mysqli_num_rows($resultado) == 0){        
        $dados["status"] = "Sem registro";
    }else{
        $dados["status"] = "error";
    }
 
    echo json_encode($dados);

    mysqli_close($con);

?>