<?php
    require_once '../config.php';
    header("Content-Type: application/json");

    $matricula = $_POST["matricula"];
    $dados =[];

    mysqli_select_db($con,$dbname);


	$query = "SELECT cargo.idCargo, cargo.nome_cargo FROM cargo 
                    INNER join funcionario on funcionario.Cargo_idCargo = cargo.idCargo and funcionario.cod_matricula = '$matricula'";

	$resultado = mysqli_query($con,$query);

	if(mysqli_num_rows($resultado) > 0){
      
        while($row = mysqli_fetch_array($resultado)){
            
            array_push($dados, $row["idCargo"]);
            array_push($dados, $row["nome_cargo"]);
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