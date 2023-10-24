
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="View/imagens/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="View/css/geral.css">
    <link rel="stylesheet" href="View/css/styleIndex.css">
    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
    <!-- icones: -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <title>Login || Lendme</title>
</head>

<body>

    <section class="box forms2">

        <div class="form login">
            <div class="form-conteudo">
                <header>
                    <img src="View/imagens/logo.png" alt="" class="img_logo">
                    <h1>Área de Acesso</h1>
                    <h3>Seja Bem Vindo ao Lendme! <br> Faça o login para ter acesso à sua conta.</h3>
                </header>

                <form id="loginForm">
                    <div class="dados input-dados">
                        <input type="text" placeholder="Informe o usuário" class="input" id="usuario" required>
                    </div>

                    <div class="dados input-dados">
                        <input type="password" placeholder="Digite a Senha" class="password" id="password" required>
                        <i class='bx bx-hide eye-icon'></i>
                    </div>


                    <div class="form-link">
                        
                        <a href="../View/recuperarSenha.php" class="esq-pass">Esqueceu a senha?</a>
                    </div>

                    <button id="signIn" type="submit" class="sign btn-login">Login</button>

                </form>

            </div>

        </div>

    </section>

    <script src="./Controller//login//login.js" defer></script>
    <script src="./Controller//js/act-log-hp.js"></script>

</body>

</html>