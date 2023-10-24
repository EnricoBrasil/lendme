<!DOCTYPE html>
<html>
<head>
	<title>Mudança de senha</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../Controller/js/modalRuperarSenha.js"></script>
    <link rel="stylesheet" href="css/cont-modal.css">
    <link rel="stylesheet" href="css/styleIndex.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Crimson+Pro">
	
</head>
<body>

<section class="box forms2">

    <div class="form login">
        <div class="form-conteudo">
            <header>        
            <h1>Mudar senha</h1>
            <div id="mensagem"><span class="confirmacao"></span></div>
            <h3>Para recuperar a sua senha, informe sua matrícula.</h3>
            </header>

            <form id="MudeSenha">
            <div class="dados input-dados">
                <label for="matricula">Digite sua Matrícula:</label>
                <input type="text" name="matricula" id="matricula">
            </div><br>
                <button type="button" id="enviarMudanca" class="sign btn-login">Enviar</button><br>
            <div class="form-link">
                 <a href="../index.php" class="canc-pass">Voltar para o Login</a>
            </div> 
            </form>
    
            <div id="myModalCodigo" class="modal">
            <div class="modal-content">
                <span class="closeCodigo" onclick="closeCodigo()">&times;</span>
                <label for="matricula">Codigo:</label><br>
                <input type="text" name="codigo" id="codigo"><br>        
                <button type="button" id="ValidaCod" onclick="ValidarCodigo()">Validar</button>
            </div>
            </div>

            <div id="myModal" class="modal">
            <div class="modal-content">
                <span class="closeEnviar" onclick="closeEnviar()">&times;</span>
                <label for="matricula">Nova senha:</label><br>
                <input type="text" name="senha1" id="senha1"><br>
                <label for="matricula">Repita a senha nova:</label><br>
                <input type="text" name="senha2" id="senha2"><br>
                <button type="button" id="MudarSenha" onclick="EnviarMudanca()">Atualizar</button>
            </div>
            </div>
        </div>
    </div>        
</section>

</body>

</html>
