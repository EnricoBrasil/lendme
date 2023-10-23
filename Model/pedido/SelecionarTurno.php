<?php
    require_once '../config.php';
    header("Content-Type: application/json");

    $dados =[];

    mysqli_select_db($con,$dbname);


	$query = "SELECT idTurno, nome_turno FROM turno";
	$resultado = mysqli_query($con,$query);
    
	if(mysqli_num_rows($resultado) > 0){
      
        while($row = mysqli_fetch_array($resultado)){
            
            array_push($dados, $row["idTurno"]);
            array_push($dados, $row["nome_turno"]);
          
        }
      
        
    }else{
        
         $dados["status"] = "error";
    }
	
    echo json_encode($dados);

    mysqli_close($con);

?>