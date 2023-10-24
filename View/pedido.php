<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/geral.css">
    <link rel="stylesheet" href="css/geralPagePrinc.css">
    <link rel="stylesheet" href="css/cont-table.css">
    <link rel="stylesheet" href="css/cont-modal.css">
    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="../Controller/Pedido/Pedido.js"></script>
    <script src="../Controller/js/act-log-hp.js"></script>
<!--<script src="../Controller/js/validacao.js"></script>
    <script src="../Controller/js/validacao2.js"></script>
    <script src="../Controller/js/validacaoName2.js"></script>
    <script src="../Controller/js/validacaoName.js"></script>
    <!-- icones: -->
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <title >Pedidos || Lendme</title>
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
                  <li>
                    <i class='bx bx-bar-chart-square icon'></i>
                    <span class="txt">Dashboard</span>
                  </li>
                </a>
                <hr>
                <a href="pedido.php">
                  <li class="active">
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
          <h1>Pedidos</h1>
    
          <div class="btn-conj">

            <button id="openModalCad" class="btn cad btnFunc" onclick="acao('cad')">
              <i class='bx bx-plus-circle iconM'></i>
              <span class="lable">Cadastrar</span>
            </button>
  
            <button id="openModalAlt" class="btn alt Alte" onclick="acao('alt')">
              <i class='bx bx-transfer iconM'></i>
              <span class="lable">Alterar</span>
            </button>
  
          </div>

        </header>

        <section id="myModalCad" class="modal space">
          <div class="modal-content">
              
            <div class="modal-header">
              <h2 class="tittle">Cadastro de Pedidos</h2>
           <!--   <span class="close" onclick="fecharModal('myModalCad')">&times;</span>-->
            </div>
  
            <div class="modal-body">
              <form id="cadForm">  

                  <div class="form-group">
                  <label for="codPedido" class="label">Código do Pedido:</label>
                  <input type="text" id="codPedido" name="codPedido" class="input">
                </div>

                <div class="form-group">
                  <label for="data" class="label">Data:</label>
                  <input type="date" id="data" name="data" class="input">
                </div>

                <div class="form-group">
                  <label for="turma" class="label">Turma:</label>
                  <input type="text" id="turma" class="input" name="turma">
                </div>

                <div class="form-group">
                  <label for="devolucao" class="label">Devolução:</label>
                  <input type="date" id="devolucao" class="input" name="devolucao">
                </div>

                <div class="form-group">
                  <label for="entregador" class="label">Nome do Entregador:</label>
                  <select name="entregador" id="entregador" class="input">
                    <option value="" disabled selected>Escolha um Nome</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="solicitante" class="label">Nome do Solicitante:</label>
                  <select name="solicitante" id="solicitante" class="input">
                    <option value="" disabled selected>Escolha um Nome</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="turno" class="label">Turno:</label>
                  <select name="turno" id="turno" class="input">
                    <option value="" disabled selected>Escolha um Turno</option>
                  </select>
                </div>
  
                <div id="btn-conj">
  
                  <button id="cadastrar" class="btn_modal" class="cad" type="submit">Cadastrar</button>
        
                  <button class="btn_modal" class="canc" onclick="fecharModal('myModalCad')">Cancelar</button>
  
                </div>
  
              </form>
            </div>
  
          </div>
      </section>

      <section id="myModalAlt" class="modal space">
          <div class="modal-content">
              
            <div class="modal-header">
              <h2 class="tittle">Alterar Pedido</h2>
           <!--   <span class="close" onclick="fecharModal('myModalAlt')">&times;</span>-->
            </div>
            
            <div class="modal-body">
            
            <div class="form-group">
                            <label for="codPedidoAlt" class="label"><p>Código Pedido:</p></label>
                            <input type="text" id="codPedidoAlt" name="codPedidoAlt" class="inputcodPed">
                            <button type="buscar" id="buscar">Buscar</button>
            </div>

          <form id="cadForm">  

                <div class="form-group">
                  <label for="dataAlt" class="label">Data:</label>
                  <input type="date" id="dataAlt" name="dataAlt" class="input">
                </div>
  

                <div class="form-group">
                  <label for="turmaAlt" class="label">Turma:</label>
                  <input type="text" id="turmaAlt" class="input" name="turmaAlt">
                </div>

           <!--    <div class="form-group">
                  <label for="devolucaoAlt" class="label">Devolução:</label>
                  <input type="date" id="devolucaoAlt" class="input" name="devolucaoAlt">
                </div>-->

                <div class="form-group">
                  <label for="entregadorAlt" class="label">Nome do Entregador:</label>
                  <select name="entregadorAlt" id="entregadorAlt" class="input">
                    <option value="" disabled selected>Escolha um Nome</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="solicitanteAlt" class="label">Nome do Solicitante:</label>
                  <select name="solicitanteAlt" id="solicitanteAlt" class="input">
                    <option value="" disabled selected>Escolha um Nome</option>
                  </select>
                </div>
  
                <div class="form-group">
                  <label for="turnoAlt" class="label">Turno:</label>
                  <select name="turnoAlt" id="turnoAlt" class="input opt">
                    <option value="" disabled >Escolha um Turno</option>
                  </select>
                </div>
                
                <div id="btn-conj">
  
                  <button id="alterar" class="btn_modal" class="cad" type="submit">Alterar</button>
        
                  <button class="btn_modal" class="canc" onclick="fecharModal('myModalCad')">Cancelar</button>
  
                </div>
  
              </form>
            </div>
  
          </div>
      </section>

      <section id="myModalDevol" class="modal space">
          <div class="modal-content">
              
            <div class="modal-header">
              <h2 class="tittle">Devolução de Produto</h2>
           <!--   <span class="close" onclick="fecharModal('myModalDevol')">&times;</span>-->
            </div>
            
            <div class="modal-body">
            
            <div class="form-group">
                            <label for="codPedidoDev" class="label">Código:</label>
                            <input type="text" id="codPedidoDev" name="codPedidoDev" class="input">
                        
            </div>
              <form id="cadForm">   

                <div class="form-group">
                  <label for="dataDev" class="label">Data:</label>
                  <input type="date" id="dataDev" name="dataDev" class="input">
                </div>

                <div id="btn-conj">
  
                  <button id="devolver" class="btn_modal" class="dev" type="submit">Devolver</button>
        
                  <button class="btn_modal" class="canc" onclick="fecharModal('myModalDevol')">Cancelar</button>
  
                </div>
  
              </form>
            </div>
  
          </div>
      </section>
    
        <main id="table">

            <table id="tableped" class="table funcT">
                <thead>
                  
                  <tr>
                    <th>Nº</th>

                    <th>Código Pedido</th>
    
                    <th>Data</th>
    
                    <th>Turma</th>
    
                    <th>Devolução</th>
    
                    <th>Entregue Por</th>
    
                    <th>Solicitado Por</th>

                    <th>Turno</th>

                    <th>Devolver</th>

                    <th>Excluir</th>
                  </tr>

                </thead>
    
                <tbody></tbody>
              </table>
            
        </main>
      </section>
    
    </div>

    <footer id="backRod">
        <h3>© Copyright 2023 Senex | Todos os direitos reservados</h3>
        <h3>Design by SENEX</h3>
      </footer>
    
</body>
</html>