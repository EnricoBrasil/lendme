<?php
    require_once '../config.php';
    header("Content-Type: application/json");

    $dados =[];

    mysqli_select_db($con,$dbname);

    //join para selecionar todas as info do Funcionário
    
	$query = "SELECT l.idLogin, l.login, l.email, l.senha, l.Funcionario_cod_matricula FROM login as l;
                    
                        

	$resultado = mysqli_query($con,$query);
    
	if(mysqli_num_rows($resultado) > 0){

        while($row = mysqli_fetch_array($resultado)){
            
            array_push($dados,$row["idLogin"]);
            array_push($dados,$row["login"]);
            array_push($dados,$row["email"]);
            array_push($dados,$row["senha"]);
            array_push($dados,$row["Funcionario_cod_matricula"]);
        }
      
        
    }else if(mysqli_num_rows($resultado) == 0){        
        $dados["status"] = "Sem registro";
    }else{
        $dados["status"] = "error";
    }
 
    echo json_encode($dados);

    mysqli_close($con);

?>