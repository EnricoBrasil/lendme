<?php
    require '../config.php';
    header("Content-Type: application/json");

    $dados =[];

    mysqli_select_db($con,$dbname);

    //View para selecionar todas as info do produto mais pedido
    
	$query = "select distinct cat.nome_categoria, count(cat.nome_categoria) as total from categoria as cat inner join
                 produtos as prod on cat.idCategoria = prod.Categoria_idCategoria
                     inner join detalhepedido as detPed on prod.cod_patrimonio = detPed.Produtos_cod_patrimonio
                            inner join pedidos as ped on ped.idPedidos = detPed.Pedidos_idPedidos group by cat.nome_categoria"; 

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