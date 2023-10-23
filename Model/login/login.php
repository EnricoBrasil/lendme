<?php
require '../config.php';

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

mysqli_select_db($con,$dbname);
try {
    $query = "SELECT * FROM login INNER JOIN funcionario ON login.Funcionario_cod_matricula = funcionario.cod_matricula WHERE login = '$usuario' AND senha = '$senha' ";

    $resultado = mysqli_query($con, $query);

    if ($resultado === false) {
        throw new Exception('Erro na consulta: ' . mysqli_error($con));
    }

    else if (mysqli_num_rows($resultado) === 1) {
        $row = mysqli_fetch_array($resultado);
        $data = array('status' => 'success', 'message' => 'Login realizado com sucesso.');
        $_SESSION['nome'] = $row['nome'];
        $_SESSION['senha'] = $row["senha"];
        setcookie('UserLogin', $usuario, time() + (86400 * 30), '/');
    } else {
        $data = array('status' => 'error', 'message' => 'Usuario ou senha incorretos.');
    }

    echo json_encode($data);
    
} catch (Exception $e) {
    $errorData = array('status' => 'error', 'message' => 'Erro interno: ' . $e->getMessage());
    echo json_encode($errorData);
}

mysqli_close($con);
?>
