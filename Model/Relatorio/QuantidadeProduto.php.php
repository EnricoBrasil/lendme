<?php
    require_once '../config.php';
    header("Content-Type: application/json");

    $dados =[];

    mysqli_select_db($con,$dbname);

    //join para selecionar todas as info qnt de produtos
    
	$query = "Select distinct cat.nome, count(cat.nome) as total from categoria as cat 
                    inner join produtos as prod on cat.idCategoria = prod.Categoria_idCategoria group by cat.nome";

	$resultado = mysqli_query($con,$query);
    
	if(mysqli_num_rows($resultado) > 0){

        while($row = mysqli_fetch_array($resultado)){
            
            array_push($dados,$row["nome"]); //posição par
            array_push($dados,$row["total"]); //posição ímpar
          
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