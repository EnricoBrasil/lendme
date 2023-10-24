<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="imagens/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="css/geral.css">
  <link rel="stylesheet" href="css/geralPagePrinc.css">
  <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="../Controller/Dashboard/ProdutoMaisPedido.js"></script>
  <script src="../Controller/Dashboard/FuncionarioMaisPediu.js"></script>
  <script src="../Controller/Dashboard/QuantidadeProduto.js"></script>
  <script src="../Controller/Dashboard/TurnoMaisPediu.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <!-- icones: -->
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <title >Dashboard || Lendme</title>
</head>
<body>

  <header>
    <div id="logo">
    <img src="imagens/logo.png" alt="" class="img_logo">
    </div>

    <div id="acess">
      <p>Bem Vindo!</p>
    </div>
  </header>

<div id="space">

  <section class="box" id="menu">

    <nav id="menu-list">
      
      <ul>
        <a href="dashboard.php">
          <li class="active">
            <i class='bx bx-bar-chart-square icon'></i>
            <span class="txt">Dashboard</span>
          </li>
        </a>
        <hr>
        <a href="pedido.php">
          <li>
            <i class='bx bx-clipboard icon'></i>
            Pedidos
          </li>
        </a>
        <hr>
        <a href="funcionario.php">
          <li>
            <i class='bx bx-group icon'></i>
            Funcionários
          </li>
        </a>
        <a href="produto.php">
          <li>
            <i class='bx bx-folder-plus icon'></i>
            Produtos
          </li>
        </a>
      </ul>
      

      <div class="menu_topic">

        
        <a href="ajuda.php">
          <li>
            <i class='bx bx-help-circle icon'></i>
            Ajuda
          </li>
        </a>
        
        <a href="../index.php">
          <li>
            <i class='bx bx-log-out icon'></i>
            Sair
          </li>
        </a>
      </div>
    </nav>
  </section>

  <section class="box" id="content">

    <header id="apresen">
      <h1>Dashboard</h1>
    </header>
    <div class='pai'>
    <div class="quadro">
      <div>
       <canvas id="myChart"></canvas>
      </div>
      <script>
        document.addEventListener('DOMContentLoaded', function() {
          requisaoSelecionarProdutoMaisPedido(); 
        }); 
      </script>
      </div>


      <div class="quadro2">
      <div>
       <canvas id="myChart2" ></canvas>
      </div>
      <script>
        document.addEventListener('DOMContentLoaded', function() {
          requisaoSelecionarFuncionarioMaisPediu(); 
             }); 
      </script>

      
      </div>
      <div class="quadro3">
      <div>
       <canvas id="myChart3"></canvas>
      </div>
      <script>
            document.addEventListener('DOMContentLoaded', function() {
          requisaoSelecionarQuantidadeProdutos();
             }); 
        </script>

      
      </div>
      <div class="quadro4">
      <div>
       <canvas id="myChart4"></canvas>
      </div>
      <script>
             document.addEventListener('DOMContentLoaded', function() {
                 requisaoSelecionarTurnoMaisPediu();
             });
        </script>

      
      </div>
      </div>
  </section>

</div>


</body>
<footer id="backRod">
  <h3>© Copyright 2023 Senex | Todos os direitos reservados</h3>
  <h3>Design by SENEX</h3>
</footer>
</html>