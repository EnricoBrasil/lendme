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
    <script src="../Controller/Produto/Produto.js"></script>
    <script src="../Controller/js/act-log-hp.js"></script>
    <script src="../Controller/js/validacao.js"></script>
    <script src="../Controller/js/validacao2.js"></script>
   
    <!-- icones: -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <title >produtos || Lendme</title>
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
                  <li>
                    <i class='bx bx-group icon'></i>
                    Funcionários
                  </li>
                </a>
                <a href="produto.php">
                  <li class="active">
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
          <h1>Produtos</h1>
    
          <div class="btn-conj btn-header-show">
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
              <h2 class="tittle">Cadastro de Produtos</h2>
          <!--    <span class="close" onclick="fecharModal('myModalCad')">&times;</span>-->
            </div>
  
            <div class="modal-body">
              <form id="cadForm">
  
                <div class="form-group">
                <label for="codPatrimonio"><p>Codigo Patrimônio:</p></label>
                <input type="text" name="codPatrimonio" id="codPatrimonio" class="input" type="text" maxlength="8" pattern="([0-9]{3})">
                </div>
  
                <div class="form-group">
                <label for="nome"><p>Nome:</p></label>
                <input id="nome" name="nome" type="text" class="input" onkeypress="return ApenasLetras(event,this);"/>
                </div>
                  
                <div class="form-group">
                <label for="descricao"><p>Descrição:</p></label>
                <input id="descricao" name="descricao" type="text" class="input" onkeypress="return ApenasLetras(event,this);"/>
                </div>

                <div class="form-group">
                <label for="ocupado" class="container">Ocupado:</label>
                <input type="checkbox" name="ocupado" id="ocupado" class="checkmark" checked="checked">
                </div>
  
                <div class="form-group">
                <label for="apelido"><p>Apelido:</p></label>
                <input type="text" name="apelido" id="apelido" class="input" onkeypress="return ApenasLetras(event,this);"/>
                </div>

                <div class="form-group">
                <label for="categoria"><p>Categoria:</p></label>
                    <select class="input" name="categoria" id="categoria">
                       <option value="" disabled selected >Escolha uma Categoria</option>
                    </select>
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
              <h2 class="tittle">Alterar Produto</h2>
           <!--   <span class="close" onclick="fecharModal('myModalAlt')">&times;</span>-->
            </div>
  
            <div class="modal-body">
  
                <div class="form-group">
                <label for="codPatrimonioAlt"><p>Codigo Patrimônio:</p></label>
                <input type="text" name="codPatrimonioAlt" id="codPatrimonioAlt" class="inputPatr" type="text" maxlength="8" pattern="([0-9]{3})">
                <button type="buscar" id="buscar">Buscar</button>
                </div>
  
                <form id="cadForm">

                <div class="form-group">
                <label for="nomeAlt"><p>Nome:</p></label>
                <input id="nomeAlt" name="nomeAlt" type="text" class="input" onkeypress="return ApenasLetras(event,this);"/>
                </div>
                  
                <div class="form-group">
                <label for="descricaoAlt"><p>Descrição:</p></label>
                <input id="descricaoAlt" name="descricaoAlt" type="text" class="input" onkeypress="return ApenasLetras(event,this);"/>
                </div>
  
                <div class="form-group">
                <label for="ocupadoAlt" class="container">Ocupado:</label>
                <input type="checkbox" name="ocupadoAlt" id="ocupadoAlt" class="checkmark" checked="checked">
                </div>
  
                <div class="form-group">
                <label for="apelidoAlt"><p>Apelido:</p></label>
                <input type="text" name="apelidoAlt" id="apelidoAlt" class="input" onkeypress="return ApenasLetras(event,this);"/>
                </div>
  
                <div class="form-group">
                <label for="categoriaAlt"><p>Categoria:</p></label>
                    <select class="input" name="categoriaAlt" id="categoriaAlt">
                       <option value="" disabled >Escolha uma Categoria</option>
                    </select>
                </div>

                <div id="btn-conj">
  
                  <button id="alterar" class="btn_modal" type="submit">Alterar</button>
        
                  <button class="btn_modal" onclick="fecharModal('myModalCad')">Cancelar</button>
  
                </div>
  
              </form>
            </div>
  
          </div>
      </section>
    
        <main id="table">
            
                <table id="tableprod" class="table funcT">
                  <thead class="test">
                    <tr>
                      <th class="radius01">Nº</th>
      
                      <th>Codigo Patrimônio</th>

                      <th>Nome</th>

                      <th>Descrição</th>

                      <th>Ocupado</th>

                      <th>Apelido</th>

                      <th>Categoria</th>
      
                      <th class="radius02">Excluir</th>
                    </tr>
                  </thead>
      
                  <tbody></tbody>
                </table>
              
        </main>
      </section>
    
    </div>

    
</body>
    <footer id="backRod">
        <h3>© Copyright 2023 Senex | Todos os direitos reservados</h3>
        <h3>Design by SENEX</h3>
      </footer>
</html>