<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="shortcut icon" href="imagens/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/geral.css">
    <link rel="stylesheet" href="css/geralPagePrinc.css">
    <link rel="stylesheet" href="css/cont-help.css">
    <link rel="stylesheet" href="css/style.css"> -->
    <!-- icones: -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <title>Ajuda || Lendme</title>
</head>

<body>

    <header>
        <div id="logo">
            <img src="imagens/logo.png" alt="" class="img_logo">
        </div>

        <div id="acess">
            <i class='bx bx-user user-icon'></i>
            <p>Nome</p>
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
                        <li>
                            <i class='bx bx-folder-plus icon'></i>
                            Produtos
                        </li>
                    </a>
                </ul>


                <div class="menu_topic">
                    <a href="ajuda.php">
                        <li class="active">
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
                <h1>Ajuda</h1>
            </header>

            <main id="table-hp" class="cont-hp">

                <!-- Guias -->
                <nav class="help-tabs">

                    <a class="help-tab" onclick="showTab(1)">Login</a>
                    <a class="help-tab" onclick="showTab(2)">Senha</a>
                    <a class="help-tab" onclick="showTab(3)">Registros</a>
                    <a class="help-tab" onclick="showTab(4)">Pedidos</a>
                    <a class="help-tab" onclick="showTab(5)">Sobre</a>

                </nav>

                <!-- Conteúdo de cada Guia -->
                <article class="help-main">

                    <section class="help-slide" id="tab1">
                        <h1>Dúvidas com o Login</h1>
                        <h4 class="subt">Bem vindo ao sistema Lendme!</h4>
                        <p>Para acessar nossa plataforma, você precisará de um e-mail/usuário válido.</p>

                        <h4>Como Realizar o Login?</h4>
                        <ul>
                            <li>Acesse a página de login do Lendme;</li>
                            <li>Insira seu e-mail/usuário registrado;</li>
                            <li>Digite sua senha;</li>
                            <li>Clique no botão "Login".</li>
                        </ul>

                        <p><mark>Observação:</mark> Somente administradores, ou funcionários autorizados, podem
                            cadastrar novos funcionários e seus e-mails no sistema. <b>Entre em contato para
                                assistência.</b> </p>
                    </section>

                    <section class="help-slide" id="tab2">
                        <h1>Recuperação de Senha</h1>
                        <p>Esqueceu sua senha ou é seu primeiro acesso? Não se preocupe! Siga o passo a passo para
                            recuperar sua senha.</p>

                        <h4>Como Realizar a Recuperação?</h4>
                        <ul>
                            <li>Acesse a página de login do Lendme;</li>
                            <li>Clique no 'Esqueceu a Senha?' para acessar a página de recuperção de senha;</li>
                            <li>Insira seu e-mail registrado;</li>
                            <li>Clique no botão "Enviar".</li>
                            <li>Verifique o seu e-mail; Você receberá as instruções por lá para criar/recuperar sua
                                senha de acesso.</li>
                        </ul>
                    </section>

                    <section class="help-slide" id="tab3">
                        <h1>Dúvida com os Registros</h1>
                        <h4 class="subt">Cadastro de pedidos, funcionários, produtos e categorias</h4>

                        <ul>
                            <li><b style="color: #23396a;">Pedidos</b>
                                <ul>
                                    <li>Na página de pedidos, você pode registrar os novos pedidos feitos, especificando
                                        detalhes como data, turno, código, solicitante e itens pedidos. Além disso, você
                                        terá um acompanhamento fácil de todos os status dos pedidos e a capacidade de
                                        remover ou alterar os pedidos da lista</li>
                                </ul>
                            </li>

                            <li><b style="color: #23396a;">Funcionários</b>
                                <ul>
                                    <li>Na página de funcionários, você pode cadastrar novos membros da equipe ou
                                        atualizar os existentes, concedendo acesso ao sistema e suas funcionalidades.
                                        Insira os dados pessoais, de contato e profissionais necessários, e atribua
                                        funções e permissões adequadas.</li>
                                </ul>
                            </li>

                            <li><b style="color: #23396a;">Produtos</b>
                                <ul>
                                    <li>Registre ou atualize as informações dos produtos disponíveis na unidade na
                                        página de produtos. Inclua detalhes como nome, descrição, categoria e código de
                                        patrimônio. Esses registros facilitarão a gestão de estoque e empréstimos.</li>
                                </ul>
                            </li>

                            <li><b style="color: #23396a;">Categorias</b>
                                <ul>
                                    <li>Organize seus produtos em categorias na página correspondente. Preencha
                                        informações como nome generalizado, tipo, marca, código radical e data de
                                        entrada na unidade. Atribua produtos a categorias para uma melhor organização e
                                        navegação em seu inventário.</li>
                                </ul>
                            </li>

                        </ul>

                        <p>Essa plataforma é projetada para simplificar o processo de registro e gestão de informações.
                            Tudo que precisa fazer é acessar a página que precisa, conferir os dados na tabela e clicar
                            no botão para fazer suas ações. Se você tiver dúvidas ou precisar de assistência ao utilizar
                            esses formulários, a equipe de suporte está à disposição para ajudar.</p>

                    </section>

                    <section class="help-slide" id="tab4">
                        <h1>Dúvidas com os Pedidos</h1>
                        <h4>Como cadastrar um novo pedido?</h4>
                        <p>Acesse a página de pedidos e encontre a tabela com todas as informações dos pedidos
                            cadastrados. Clique no botão "Cadastrar" para abrir o formulário de cadastro do pedido.
                            Preencha os campos necessários, como data, turno, turma, código do produto, entregador e
                            solicitante, e escolha o status apropriado. Clique em "Cadastrar" para registrar o novo
                            pedido.</p>

                        <h4>Como alterar um pedido existente?</h4>
                        <p>Na mesma página de pedidos, utilize o botão "Alterar" para abrir um formulário de busca por
                            nome de solicitante. Isso mostrará todos os pedidos em aberto relacionados ao solicitante.
                            Selecione o pedido que deseja alterar e faça as modificações necessárias nos campos
                            correspondentes. Lembre-se de salvar as alterações.</p>

                        <h4>Como excluir um item da tabela de pedidos?</h4>
                        <p>Para remover um item da tabela, encontre o pedido que deseja excluir na página de pedidos e
                            clique na opção presente na tabela"Excluir". Isso removerá o pedido da lista.</p>

                        <h4>O que significam os diferentes status de pedido?</h4>
                        <ul>
                            <li>"Em processo" - indica que o pedido está sendo preparado ou em andamento.</li>
                            <li>"Finalizado" - significa que o pedido foi devolvido com sucesso.</li>
                            <li>"Erro" - indica um problema ou erro no processamento do pedido.</li>
                            <li>"Em atraso" - sugere que o pedido não foi entregue dentro do prazo esperado.</li>
                        </ul>
                    </section>

                    <section class="help-slide" id="tab5">
                        <h1>Sobre Nós</h1>
                        <h4 class="subt">Esse sistema foi feito pela equipe SENEX</h4>
                        <p>Fundada em 2022.2, o SENEX é uma equipe composta por 16 desenvolvedores formados pelo
                            SENAC-BA, com especialidades variadas e com a missão de aplicar os conhecimentos aprendidos
                            em sala, criar e oferecer as melhores soluções para nossos clientes, de forma inovadora,
                            objetiva e adequada.</p>

                        <h4>Desenvolvedores:</h4>
                        <div class="cards" id="dev_area">

                            <article class="card card1">

                                <div class="area-info">
                                    <div class="card-area">
                                        <span class="area">Back-end</span>
                                    </div>
                                </div>

                                <div class="card_img"></div>

                                <a class="card_link">
                                    <div class="card_img-hover"></div>
                                </a>

                                <div class="card__info">
                                    <span class="card_dev"> Desenvolvedor</span>

                                    <h3 class="card_nome">Davi de Almeida</h3>

                                    <span class="link">Links:
                                        <a href="https://github.com/dexterpol" class="link_rede" title="rede"
                                            target="_blank">Github</a>
                                    </span>

                                </div>

                            </article>


                            <article class="card card2">

                                <div class="area-info">
                                    <div class="card-area">
                                        <span class="area">Front-end</span>
                                    </div>
                                </div>

                                <div class="card_img"></div>

                                <a class="card_link">
                                    <div class="card_img-hover"></div>
                                </a>

                                <div class="card__info">

                                    <span class="card_dev">Desenvolvedor</span>

                                    <h3 class="card_nome">Eduardo Rosa</h3>

                                    <span class="link">Links:
                                        <a href="https://www.linkedin.com/in/eduardo-silva-aa696b279/" class="link_rede"
                                            title="rede" target="_blank">Linkedin</a>
                                        |
                                        <a href="https://github.com/iEduardoD3V" class="link_rede" title="rede"
                                            target="_blank">Github</a></span>

                                </div>

                            </article>

                            <article class="card card3">

                                <div class="area-info">
                                    <div class="card-area">
                                        <span class="area">Full Stack</span>
                                    </div>
                                </div>

                                <div class="card_img"></div>

                                <a class="card_link">
                                    <div class="card_img-hover"></div>
                                </a>

                                <div class="card__info">

                                    <span class="card_dev">Desenvolvedor</span>

                                    <h3 class="card_nome">Enrico Brasil</h3>

                                    <span class="link">Links:
                                        <a href="https://www.linkedin.com/in/enrico-brasil-0bbb8b254/" class="link_rede"
                                            title="rede" target="_blank">Linkedin</a>
                                        |
                                        <a href="https://github.com/EnricoBrasil" class="link_rede" title="rede"
                                            target="_blank">Github</a></span>

                                </div>

                            </article>

                            <article class="card card4">

                                <div class="area-info">
                                    <div class="card-area">
                                        <span class="area">Back-end</span>
                                    </div>
                                </div>

                                <div class="card_img"></div>

                                <a class="card_link">
                                    <div class="card_img-hover"></div>
                                </a>

                                <div class="card__info">

                                    <span class="card_dev">Desenvolvedor</span>

                                    <h3 class="card_nome">Everson Silva</h3>

                                    <span class="link">Links:
                                        <a href="https://www.linkedin.com/in/everson-silva-b0398310b/" class="link_rede"
                                            title="rede" target="_blank">Linkedin</a>
                                        |
                                        <a href="https://github.com/eversonsilvaa" class="link_rede" title="rede"
                                            target="_blank">Github</a></span>

                                </div>

                            </article>

                            <article class="card card5">

                                <div class="area-info">
                                    <div class="card-area">
                                        <span class="area">Full Stack</span>
                                    </div>
                                </div>

                                <div class="card_img"></div>

                                <a class="card_link">
                                    <div class="card_img-hover"></div>
                                </a>

                                <div class="card__info">

                                    <span class="card_dev">Desenvolvedor</span>

                                    <h3 class="card_nome">Fabio Nascimento</h3>

                                    <span class="link">Links:
                                        <a href="https://www.linkedin.com/in/fabio-nascimento-031a2549/"
                                            class="link_rede" title="rede" target="_blank">Linkedin</a>
                                        |
                                        <a href="https://github.com/fabionascimentodev" class="link_rede" title="rede"
                                            target="_blank">Github</a></span>

                                </div>

                            </article>

                            <article class="card card6">

                                <div class="area-info">
                                    <div class="card-area">
                                        <span class="area">Full Stack</span>
                                    </div>
                                </div>

                                <div class="card_img"></div>

                                <a class="card_link">
                                    <div class="card_img-hover"></div>
                                </a>

                                <div class="card__info">

                                    <span class="card_dev">Desenvolvedora</span>

                                    <h3 class="card_nome">Iris Celestino</h3>

                                    <span class="link">Links:
                                        <a href="#" class="link_rede" title="rede" target="_blank">Linkedin</a>
                                        |
                                        <a href="https://github.com/irisCelestino" class="link_rede" title="rede"
                                            target="_blank">Github</a></span>

                                </div>

                            </article>

                            <article class="card card7">

                                <div class="area-info">
                                    <div class="card-area">
                                        <span class="area">Front-end</span>
                                    </div>
                                </div>

                                <div class="card_img"></div>

                                <a class="card_link">
                                    <div class="card_img-hover"></div>
                                </a>

                                <div class="card__info">

                                    <span class="card_dev">Desenvolvedor</span>

                                    <h3 class="card_nome">João Mangabeira</h3>

                                    <span class="link">Links:
                                        <a href="https://github.com/VitorMangabeira" class="link_rede" title="rede"
                                            target="_blank">Github</a></span>

                                </div>

                            </article>

                            <article class="card card8">

                                <div class="area-info">
                                    <div class="card-area">
                                        <span class="area">Explorando</span>
                                    </div>
                                </div>

                                <div class="card_img"></div>

                                <a class="card_link">
                                    <div class="card_img-hover"></div>
                                </a>

                                <div class="card__info">

                                    <span class="card_dev">Desenvolvedora</span>

                                    <h3 class="card_nome">Lara de Carvalho</h3>

                                    <span class="link">Links:
                                        <a href="https://www.linkedin.com/in/lara-de-carvalho-567133189/"
                                            class="link_rede" title="rede" target="_blank">Linkedin</a>
                                        |
                                        <a href="https://github.com/laracarvalho20" class="link_rede" title="rede"
                                            target="_blank">Github</a></span>

                                </div>

                            </article>

                            <article class="card card9">

                                <div class="area-info">
                                    <div class="card-area">
                                        <span class="area">Explorando</span>
                                    </div>
                                </div>

                                <div class="card_img"></div>

                                <a class="card_link">
                                    <div class="card_img-hover"></div>
                                </a>

                                <div class="card__info">

                                    <span class="card_dev">Desenvolvedora</span>

                                    <h3 class="card_nome">Lorena Freitas</h3>

                                    <span class="link">Links:
                                        <a href="https://github.com/loresousa" class="link_rede" title="rede"
                                            target="_blank">Github</a></span>

                                </div>

                            </article>

                            <article class="card card10">

                                <div class="area-info">
                                    <div class="card-area">
                                        <span class="area">Area</span>
                                    </div>
                                </div>

                                <div class="card_img"></div>

                                <a class="card_link">
                                    <div class="card_img-hover"></div>
                                </a>

                                <div class="card__info">

                                    <span class="card_dev">Desenvolvedor</span>

                                    <h3 class="card_nome">Lucas Bitencourt</h3>

                                    <span class="link">Links:
                                        <a href="#" class="link_rede" title="rede" target="_blank">Linkedin</a>
                                        |
                                        <a href="https://github.com/LucasBitencourt071" class="link_rede" title="rede"
                                            target="_blank">Github</a></span>

                                </div>

                            </article>

                            <article class="card card11">

                                <div class="area-info">
                                    <div class="card-area">
                                        <span class="area">Full Stack</span>
                                    </div>
                                </div>

                                <div class="card_img"></div>

                                <a class="card_link">
                                    <div class="card_img-hover"></div>
                                </a>

                                <div class="card__info">

                                    <span class="card_dev">Desenvolvedor</span>

                                    <h3 class="card_nome">Lucas Campos</h3>

                                    <span class="link">Links:
                                        <a href="https://www.linkedin.com/in/lucascmpus/" class="link_rede" title="rede"
                                            target="_blank">Linkedin</a>
                                        |
                                        <a href="https://github.com/lucascmpus" class="link_rede" title="rede"
                                            target="_blank">Github</a></span>

                                </div>

                            </article>

                            <article class="card card12">

                                <div class="area-info">
                                    <div class="card-area">
                                        <span class="area">Full Stack</span>
                                    </div>
                                </div>

                                <div class="card_img"></div>

                                <a class="card_link">
                                    <div class="card_img-hover"></div>
                                </a>

                                <div class="card__info">

                                    <span class="card_dev">Desenvolvedor</span>

                                    <h3 class="card_nome">Maison Luck</h3>

                                    <span class="link">Links:
                                        <a href="https://www.linkedin.com/in/maison-luck-7b5b81183/" class="link_rede"
                                            title="rede" target="_blank">Linkedin</a>
                                        |
                                        <a href="https://github.com/MaisonLuck" class="link_rede" title="rede"
                                            target="_blank">Github</a></span>

                                </div>

                            </article>

                            <article class="card card13">

                                <div class="area-info">
                                    <div class="card-area">
                                        <span class="area">Explorando</span>
                                    </div>
                                </div>

                                <div class="card_img"></div>

                                <a class="card_link">
                                    <div class="card_img-hover"></div>
                                </a>

                                <div class="card__info">

                                    <span class="card_dev">Desenvolvedor</span>

                                    <h3 class="card_nome">Marco Paiva</h3>

                                    <span class="link">Links:
                                        <a href="https://github.com/AurelioMirror" class="link_rede" title="rede"
                                            target="_blank">Github</a></span>

                                </div>

                            </article>

                            <article class="card card14">

                                <div class="area-info">
                                    <div class="card-area">
                                        <span class="area">Full Stack</span>
                                    </div>
                                </div>

                                <div class="card_img"></div>

                                <a class="card_link">
                                    <div class="card_img-hover"></div>
                                </a>

                                <div class="card__info">

                                    <span class="card_dev">Desenvolvedora</span>

                                    <h3 class="card_nome">Maria Machado</h3>

                                    <span class="link">Links:
                                        <a href="https://www.linkedin.com/in/mariaaamachado/" class="link_rede"
                                            title="rede" target="_blank">Linkedin</a>
                                        |
                                        <a href="https://github.com/MaaMachado" class="link_rede" title="rede"
                                            target="_blank">Github</a></span>

                                </div>

                            </article>

                            <article class="card card15">

                                <div class="area-info">
                                    <div class="card-area">
                                        <span class="area">Front-end</span>
                                    </div>
                                </div>

                                <div class="card_img"></div>

                                <a class="card_link">
                                    <div class="card_img-hover"></div>
                                </a>

                                <div class="card__info">

                                    <span class="card_dev">Desenvolvedor</span>

                                    <h3 class="card_nome">Rafael Bastos</h3>

                                    <span class="link">Links:
                                        <a href="https://www.linkedin.com/in/rafael-b-0701b0102/" class="link_rede"
                                            title="rede" target="_blank">Linkedin</a>
                                        |
                                        <a href="https://github.com/Rafabsts" class="link_rede" title="rede"
                                            target="_blank">Github</a></span>

                                </div>

                            </article>

                            <article class="card card16">

                                <div class="area-info">
                                    <div class="card-area">
                                        <span class="area">Front-end</span>
                                    </div>
                                </div>

                                <div class="card_img"></div>

                                <a class="card_link">
                                    <div class="card_img-hover"></div>
                                </a>

                                <div class="card__info">

                                    <span class="card_dev">Desenvolvedor</span>

                                    <h3 class="card_nome">Savio Sena</h3>

                                    <span class="link">Links:
                                        <a href="https://www.linkedin.com/in/saviosenago/" class="link_rede"
                                            title="rede" target="_blank">Linkedin</a>
                                        |
                                        <a href="https://github.com/saviosenago" class="link_rede" title="rede"
                                            target="_blank">Github</a></span>

                                </div>

                            </article>

                            <article class="card card17">

                                <div class="area-info">
                                    <div class="card-area">
                                        <span class="area">Full Stack</span>
                                    </div>
                                </div>

                                <div class="card_img"></div>

                                <a class="card_link">
                                    <div class="card_img-hover"></div>
                                </a>

                                <div class="card__info">

                                    <span class="card_dev">Desenvolvedor</span>

                                    <h3 class="card_nome">Thiago Santos</h3>

                                    <span class="link">Links:
                                        <a href="https://github.com/N3lo4ngelo" class="link_rede" title="rede"
                                            target="_blank">Github</a></span>

                                </div>

                            </article>

                        </div>

                        <p>by Turma 2022.26.186 | <mark>Técnico em Desenvolvimento de Sistemas</mark> - 2022/23</p>

                    </section>

                </article>

            </main>
        </section>

    </div>

    <div class="container">
            <div class="chatbox">
                <div class="chatbox__support">
                    <div class="chatbox__header">
                        <div class="chatbox__image--header">
                            <img src="../Static/images/robot.png" alt="image">
                        </div>
                        <div class="chatbox__content--header">
                            <h4 class="chatbox__heading--header">LendBot</h4>
                            <p class="chatbox__description--header">Olá! Como posso ajudá-lo?</p>
                        </div>
                    </div>
                    <div class="chatbox__messages">
                        <div></div>
                    </div>
                    <div class="chatbox__footer">
                        <input type="text" placeholder="Faça uma pergunta">
                        <button class="chatbox__send--footer send__button">Enviar</button>
                    </div>
                </div>
                <div class="chatbox__button">
                    <button><img src="../Static/images/chat.png" alt=""></button>
                </div>
            </div>
        </div>

    <footer id="backRod">
        <h3>© Copyright 2023 Senex | Todos os direitos reservados</h3>
        <h3>Design by SENEX</h3>
        
    </footer>

    <script>
        const scriptRoot = "{{ script_root }}"
    </script>

    <script type="text/javascript" src="../static/app.js"></script>
    <script src="../Controller/js/act-log-hp.js"></script>

</body>

</html>