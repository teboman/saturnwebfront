<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="http://192.168.175.212/assets/css/sb-admin-2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/573d05492d.js"></script>

    <script src="http://192.168.175.212/assets/js/JQuery.js"></script>
    <script src="http://192.168.175.212/assets/core.js"></script>
    

    <title>Ficha de Cliente</title>

</head>

<body onload="CarregarFicha()">
    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="http://192.168.175.212/">
                <div class="sidebar-brand-text mx-3">
                    Um nome
                    <sup>1</sup>
                </div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item">
                <a class="nav-link" href="http://192.168.175.212/">
                    <i class="fas fa-align-left align-items-center">

                    </i>
                    <span>Andamentos</span>
                </a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Clientes
            </div>
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
                    aria-controls="collapseTwo">
                    <i class="fas fa-user-circle"></i>
                    <span>Clientes</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar"
                    style>
                    <div class="bg-white py-2 collapse-inner rounded">

                        <a class="collapse-item" href="http://192.168.175.212/clientes/cadmaioridade.html">Cadastrar maior
                            idade</a>
                        <a class="collapse-item" href="http://192.168.175.212/clientes/procurarcliente.html">Procurar
                            Cliente</a>
                    </div>
                </div>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Processos
            </div>
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true"
                    aria-controls="collapseThree">
                    <i class="fas fa-gavel"></i>
                    <span>Processos</span>
                </a>
                <div id="collapseThree" class="collapse" aria-labelledby="heandingThree" data-parent="#accordionSidebar"
                    style>
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="#">Procurar processo</a>
                        <a class="collapse-item" href="#">Procurar parte contraria</a>
                    </div>
                </div>
            </li>

        </ul>
        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small"
                                placeholder="Digite o que você precisar..." aria-label="Pesquisa"
                                aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <!-- BARRA DE NAVEGAÇÃO DO TOPO PARTE DIREITA -->
                    <ul class="navbar-nav ml-auto">
                        <!-- AQUI NÃO É PRA APARECER NADA MESMO, APENAS EM XS-->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu  dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">

                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Procurar por" aria-label="Search"
                                            aria-describedby="basic-addon2">

                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <!-- Parte dos alertas -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <span class="badge badge-danger badge-counter">+3</span>
                            </a>

                            <!-- Dropdown dos alertas -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">Avisos</h6>
                                <!-- Começo de cada notificação-->
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">27 de Julho de 2019</div>
                                        <span class="font-weight-bold">Conteudo da notificação</span>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>
                        <!-- Fim da parte de notificações e começo das mensagens-->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true">
                                <i class="fas fa-envelope fa-fw"></i>
                                <span class="badge badge-danger badge-counter">5</span>
                            </a>
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">Mensagens</h6>
                                <!-- Aqui começa cada notificação recebida pelo server side-->
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60"
                                            alt>
                                        <div class="status-indicator bg_success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Olá, aqui é onde as mensagens ficarão
                                            <div class="small text-gray-500">Gilberto Andre . 58m</div>
                                        </div>
                                    </div>
                                </a>
                                <!-- Aqui termina as notificações -->
                            </div>
                        </li>
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!-- Aqui começa as informações do usuario -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Gilberto Andre Junior</span>

                                <img class="img-profile rounded-circle"
                                    src="http://masonshall1785.org/wp-content/uploads/2016/03/no-profile-img-240x300.gif">

                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Perfil
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400">
                                    </i>
                                    Configurações
                                </a>
                                <a class="dropdown-item" href="">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400" href=""></i>
                                    Logs de atividades
                                </a>
                                <div class="dropdown-divider"> </div>

                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>

                <div class="container mt-4">
                    <div class="row">
                        <div class="col-md-4 order-md-2 mb-4">
                            <div class="form-contro mb-3">
                                <h3>Observações</h3>
                                <hr>
                                <textarea class="form-control mb-3" id="cObservacoes" rows="4"></textarea>
                                <button class="btn btn-primary">Nova Pasta</button>
                                <button class="btn btn-primary">Novo polo ativo</button>
                            </div>


                            <h3>Pastas</h3>
                            <hr>
                            <div>
                                <ul id="pastas-cliente" class="list-group mb-3"> </ul>
                            </div>
                        </div>
                        <div class="col-md-6 order-md-1">
                            <button class="btn btn-primary mb-3" onclick="AtualizarCliente()" id="salvar">Salvar
                                Alterações</button>
                            <form>

                                <div class="col">

                                    <h3>Ficha de Cliente Fisico maior idade</h3>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label for="cNome">Codigo</label>
                                            <input class="form-control form-control-sm" id="cId" readonly="true">
                                        </div>
                                        <div class="col">
                                            <label for="cNome">Nome Completo</label>
                                            <input class="form-control form-control-sm" id="cNome">
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col mb-3">
                                            <label for="cNascimento">Nascimento</label>
                                            <input class="form-control form-control-sm" type="text" id="cNascimento"
                                                name="tNascimento">
                                        </div>
                                        <div class="col mb-3">
                                            <label for="cGenero">Genero</label>
                                            <input class="form-control form-control-sm" id="cGenero">

                                        </div>
                                        <div class="col mb-3">
                                            <label for="cNacionalidade">Nacionalidade</label>
                                            <input type="text" class="form-control form-control-sm" id="cNacionalidade"
                                                name="tNacionalidade">
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <h3>Informações de contato</h3>
                                    <hr>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="cCep">CEP</label>
                                            <input class="form-control form-control-sm"
                                                onkeypress="$(this).mask('00000-000')" type="text" id="cCep" name="tCep"
                                                width="9">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <label for="cEndereco">Endereço</label>
                                            <input class="form-control form-control-sm" type="text" id="cEndereco"
                                                name="tEndereco">

                                        </div>
                                        <div class="col col-md-2">
                                            <label for="cNumero">Numero</label>
                                            <input class="form-control form-control-sm" type="text" id="cNumero"
                                                name="tNumero" size="8">
                                        </div>
                                        <div class="col col-md-3">
                                            <label for="cComplemento">Complemento</label>
                                            <input class="form-control form-control-sm" type="text" id="cComplemento"
                                                name="tComplemento" size="10">
                                        </div>
                                    </div>


                                    <div class="form-row">
                                        <div class="form-group col">
                                            <label for="cBairro">Bairro</label>
                                            <input class="form-control form-control-sm" type="text" id="cBairro"
                                                name="tbairro">
                                        </div>
                                        <div class="form-group col">
                                            <label>Cidade</label>
                                            <input class="form-control form-control-sm" type="text" id="cCidade"
                                                placeholder="Ex.: São Paulo">
                                        </div>
                                        <div class="form-group col-md-1">
                                            <label for="cUf">UF</label>
                                            <input class="form-control form-control-sm" type="text" id="cUf" size="2"
                                                maxlength="2">
                                        </div>
                                    </div>


                                    <div class="form-row">
                                        <div class="form-group col">
                                            <label for="cTelefone1">Telefone 1</label>
                                            <input class="form-control form-control-sm"
                                                onkeypress="$(this).mask('(00) 00000-0000')" type="text" id="cTelefone1"
                                                name="tTelefone1">
                                        </div>
                                        <div class="form-group col">
                                            <label>Telefone Fixo</label>
                                            <input class="form-control form-control-sm"
                                                onkeypress="$(this).mask('(00) 0000-0000')" type="text"
                                                id="cTelefoneFixo">
                                        </div>
                                        <div class="form-group col">
                                            <label>Telefone 2</label>
                                            <input class="form-control form-control-sm"
                                                onkeypress="$(this).mask('(00) 00000-0000')" type="text"
                                                id="cTelefone2">
                                        </div>
                                    </div>


                                    <div class="form-row">
                                        <div class="form-group col">
                                            <label>Endereço de E-Mail</label>
                                            <input class="form-control form-control-sm" type="email" id="cEmail"
                                                name="tEmail" size="60">
                                        </div>
                                    </div>
                                </div>


                                <div class="col">
                                    <h3>Dados e documentos pessoais</h3>
                                    <hr>
                                    <div class="form-row">
                                        <div class="form-group col">
                                            <label for="cRg">RG</label>
                                            <input class="form-control form-control-sm"
                                                onkeypress="$(this).mask('00.000.000-0')" type="text" id="cRg"
                                                name="tRg" size="12" maxlength="12">
                                        </div>
                                        <div class="form-group col">
                                            <label for="cCpf">CPF</label>
                                            <input class="form-control form-control-sm"
                                                onkeypress="$(this).mask('000.000.000-00')" type="text" id="cCpf"
                                                name="tCpf" size="14" maxlength="14">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col">
                                            <label>Profissão</label>
                                            <input class="form-control form-control-sm" type="text" id="cProfissao"
                                                name="tProfissao">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col">
                                            <label>Numero do PIS</label>
                                            <input class="form-control form-control-sm" type="text" id="cPis"
                                                name="tPis">
                                        </div>
                                        <div class="form-group col">
                                            <label>Numero da CTPS</label>
                                            <input class="form-control form-control-sm" type="text" id="cCtps"
                                                name="tCtps">
                                        </div>
                                        <div class="form-group col">
                                            <label>Série CTPS</label>
                                            <input class="form-control form-control-sm" type="text" id="cSerieCTPS"
                                                name="tSerieCtps">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col">
                                            <label for="cEstadoCivil">Nome do Pai</label>
                                            <input type="text" class="form-control form-control-sm" id="cNomeDoPai"
                                                name="tNomeDoPai">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col">
                                            <label for="cEstadoCivil">Nome da mãe</label>
                                            <input type="text" class="form-control form-control-sm" id="cNomeDaMae"
                                                name="tNomeDaMae">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="http://192.168.175.212/vendor/jquery/jquery.min.js"></script>
        <script src="http://192.168.175.212/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


</body>

</html>