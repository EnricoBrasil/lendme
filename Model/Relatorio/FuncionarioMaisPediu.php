<?php
    require '../config.php';
    header("Content-Type: application/json");

    $dados =[];

    mysqli_select_db($con,$dbname);

    //join para selecionar funcionario que mais pediu
    
	$query = "Select distinct func.nome, count(func.nome) as total from detalhepedido as detPed 
                inner join pedidos as ped on ped.idPedidos = detPed.Pedidos_idPedidos 
                    inner join funcionario as func 
                         on func.cod_matricula = ped.Solicitado_Funcionario_cod_matricula group by func.nome"; 

	$resultado = mysqli_query($con,$query);
    
	if(mysqli_num_rows($resultado) > 0){

        while($row = mysqli_fetch_array($resultado)){
            
            array_push($dados,$row["nome"]);
            array_push($dados,$row["total"]);
          
        }
      
        
    }else if  (mysqli_num_rows($resultado) == 0){
        
        array_push($dados, "Sem registro");
        array_push($dados, "0");

    }else{
        $dados["status"] = "error";
    }
 
    echo json_encode($dados);

    mysqli_close($con);

?>