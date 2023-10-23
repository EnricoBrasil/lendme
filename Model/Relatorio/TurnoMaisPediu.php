<?php
    require_once '../config.php';
    header("Content-Type: application/json");

    $dados = [];

    mysqli_select_db($con, $dbname);

    //join para selecionar turno que mais pediu e ordena por turno (manhã/tarde/noite)
    
    $query = "SELECT turno, COUNT(turno) AS total
                    FROM (
                        SELECT ped.turno,
                            CASE ped.turno
                                WHEN 'manhã' THEN 1
                                WHEN 'tarde' THEN 2
                                WHEN 'noite' THEN 3
                            END AS turno_order
                        FROM Detalhe_pedido AS detPed
                        INNER JOIN Pedidos AS ped ON ped.idPedidos = detPed.Pedidos_idPedidos
                    ) AS turnos_ordenados
                    GROUP BY turno
                    ORDER BY turno_order";

    $resultado = mysqli_query($con, $query);

    if (mysqli_num_rows($resultado) > 0) {
        while ($row = mysqli_fetch_array($resultado)) {
            array_push($dados, $row["nome"]); //posição par
            array_push($dados, $row["total"]); //posição ímpar
        }
    }else if  (mysqli_num_rows($resultado) == 0){
        
        array_push($dados, "Sem registro");
        array_push($dados, "0");

    }
    
    else {
        $dados = ["status" => "error"];
    }

    echo json_encode($dados);
    die();

    mysqli_close($con);
?>
