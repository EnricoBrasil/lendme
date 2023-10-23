<?php
    require_once '../config.php';
    header("Content-Type: application/json");

    $codPatrimonio = $_POST["codPatrimonio"];
    $dados =[];

    mysqli_select_db($con,$dbname);


	$query = "SELECT categoria.idCategoria, categoria.nome_categoria FROM categoria
                    INNER JOIN produtos on produtos.Categoria_idCategoria = categoria.idCategoria and produtos.cod_patrimonio = '$codPatrimonio'";

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