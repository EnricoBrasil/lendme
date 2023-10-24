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
    <script src="../Controller/Funcionario/Funcionario.js"></script>
    <script src="../Controller/js/act-log-hp.js"></script>
    <script src="../Controller/js/validacao.js"></script>
    <script src="../Controller/js/validacaoName.js"></script>
    <script src="../Controller/js/validacao2.js"></script>
     <!--icones: -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <title >Funcionário || Lendme</title>
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
                  <li>
                    <i class='bx bx-clipboard icon'></i>
                    Pedidos
                  </li>
                </a>
                <hr>
                <a href="funcionario.php">
                  <li class="active">
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
          <h1>Funcionários</h1>
    
          <div class="btn-conj btn-header-show">
          <button id="openModalCad" class="btn cad btnFunc" onclick="acao('cad')">
            <i class='bx bx-plus-circle iconM'></i>
            <span class="lable">Cadastrar</span>
          </button>

          <button id="openModalAlt" class="btn alt Alte" onclick="acao('alt')">
            <i class='bx bx-transfer iconM'></i>
            <span class="lable">Alterar</span>
          </button>

          <button id="openModalUser" class="btn newU user" onclick="acao('user')">
            <i class='bx bx-plus iconM'></i>
            <span class="lable">Novo Usuário</span>
          </button>
           </div>

        </header>

        <section id="myModalCad" class="modal space">
          <div class="modal-content">
              
            <div class="modal-header">
              <h2 class="tittle">Cadastro de Funcionários</h2>
          <!--    <span class="close" onclick="fecharModal('myModalCad')">&times;</span>-->
            </div>
  
            <div class="modal-body">
              <form id="cadForm">
  
                <div class="form-group">
                <label for="matricula"><p>Matrícula:</p></label>
                <input type="text" name="matricula" id="matricula" class="input" type="text" maxlength="5" pattern="([0-9]{3})">
                </div>
  
                <div class="form-group">
                <label for="nomeCad"><p>Nome:</p></label>
                <input id="nomeCad" name="nomeCad" type="text" class="input" onkeypress="return ApenasLetras(event,this);"/>
                </div>
                  
                <div class="form-group">
                <label for="selectOP_Cargo"><p>Cargo:</p></label>
                    <select class="input" name="selectOP_Cargo" id="selectOP_Cargo">
                       <option value="" disabled selected >Escolha um Cargo</option>
                    </select>
                </div>
  
                <div class="form-group">
                <label for="data"><p>Data:</p></label>
                <input type="date" name="data" id="data" class="input"/>
                </div>
  
                <div class="form-group">
                <label for="telefone"><p>Telefone:</p></label>
                <input placeholder="(00) 0 0000-0000" id="telefone" class="input" type="text" maxlength="11" pattern="([0-9]{3})"/>
                </div>
  
                <div id="btn-conj">

                    <button id="cadastrar" class="btn_modal" type="submit">Cadastrar</button>
                    
                  <button class="btn_modal" onclick="fecharModal('myModalCad')">Cancelar</button>

                  
  
                </div>
  
              </form>
            </div>
  
          </div>
      </section>

      <section id="myModalAlt" class="modal space">
          <div class="modal-content">
              
            <div class="modal-header">
              <h2 class="tittle">Alterar Funcionário</h2>
           <!--   <span class="close" onclick="fecharModal('myModalAlt')">&times;</span>-->
            </div>
  
            <div class="modal-body">
                 
                <div class="form-group">
                    <label for="matriculaAlt"><p>Matrícula:</p></label>
                    <input type="text" name="matriculaAlt" id="matriculaAlt" class="inputMat" type="text" maxlength="5" pattern="([0-9]{3})">
                    <button type="buscar" id="buscar">Buscar</button>
                </div>
  
              <form id="cadForm">
  
                
                <div class="form-group">
                <label for="nomeAlt"><p>Nome:</p></label>
                <input id="nomeAlt" name="nomeAlt" type="text" class="input" onkeypress="return ApenasLetras(event,this);"/>
                </div>
                  
                <div class="form-group">
                <label for="selectOP_CargoAlt"><p>Cargo:</p></label>
                    <select class="input" name="selectOP_CargoAlt" id="selectOP_CargoAlt">
                       <option value="" disabled>Escolha um Cargo</option>
                    </select>
                </div>
  
                <div class="form-group">
                <label for="dataAlt"><p>Data:</p></label>
                <input type="date" name="dataAlt" id="dataAlt" class="input"/>
                </div>
  
                <div class="form-group">
                <label for="telefoneAlt"><p>Telefone:</p></label>
                <input placeholder="(00) 0 0000-0000" id="telefoneAlt" class="input" type="text" maxlength="11" "/>
                </div>

                <!-- pattern="([0-9]{3})"-->
  
                <div id="btn-conj">

                    <button id="alterar" class="btn_modal" type="submit">Alterar</button>

                  <button class="btn_modal" onclick="fecharModal('myModalCad')">Cancelar</button>

                 
  
                </div>
  
              </form>
            </div>
  
          </div>
      </section>

      <section id="myModalUser" class="modal space">
          <div class="modal-content">
              
            <div class="modal-header">
              <h2 class="tittle">Novo Usuário</h2>
            </div>
  
            <div  class="modal-body">
                 
  
  
                <div class="form-group">
                    <label for="matriculaCad"><p>Matrícula:</p></label>
                    <input type="text" name="matriculaCad" id="matriculaCad" class="inputMat" maxlength="5" pattern="([0-9]{3})" >
                    <button type="buscar" id="buscarNovo">Buscar</button>
                </div>
                <form id="cadForm" method="post" action="cadastroLogin">


                <div class="form-group">
                <label for="nomeNovo"><p>Usuário:</p></label>
                <input id="nomeNovo" name="nomeNovo" type="text" class="input" onkeypress="return ApenasLetras(event,this);"disabled="disabled"/>
                </div>
                        
                <div class="dados input-dados">
                <label for="email"><p>Email:</p></label>
                    <input type="email" placeholder="Digite seu email" class="input" id="email" required>
                </div><br>
                
                <div class="dados input-dados">
                <label for="password"><p>Senha:</p></label>
                    <input type="password" placeholder="Digite uma senha" class="input" id="password" required>
                </div><br>

  
                <div id="btn-conj">

                  <button id="cadastrarNovo" class="btn_modal" type="submit">Cadastrar</button>

                    <button class="btn_modal" onclick="fecharModal('myModalUser')">Cancelar</button>
                </div>
  
              </form>
            </div>
  
          </div>
      </section>
    
        <main id="table">
            
                <table id="tablefunc" class="table funcT">
                    <tr>
                      <th  class="radius01">Nº</th>
      
                      <th>Matrícula</th>
      
                      <th>Nome</th>
      
                      <th>Cargo</th>
      
                      <th>Data</th>
      
                      <th>Telefone</th>
      
                      <th  class="radius02">Excluir</th>
                    </tr>
      
                  <tbody></tbody>
                </table>
              
        </main>
      </section>
    
    </div>

     <script src="../Controller/cadastroLogin/cadastroLogin.js"></script>
</body>
    <footer id="backRod">
        <h3>© Copyright 2023 Senex | Todos os direitos reservados</h3>
        <h3>Design by SENEX</h3>
      </footer>
</html>