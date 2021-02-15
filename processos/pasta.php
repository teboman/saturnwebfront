<?php include("http://192.168.175.212/assets/components/head.html") ?>

<body id="page-top" onload="CarregarProcesso()">
    <div id="wrapper">

        <?php include("http://192.168.175.212/assets/components/sidebar.html") ?>
        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                <?php include("http://192.168.175.212/assets/components/navheader.html") ?>
                <div class="container-fluid" id="ProcessoConteudo">

                    <div class="d-sm align-items-center text-center justify-content-between mb-4">
                        <h1 class="h4 mb-0 text-gray-800">Dados do processo</h1>
                    </div>

                    <div class="row mb-2">

                        <div class="col-xl-2">
                            <div class="card">
                                <div class="card-header text-center py-1 bg-primary">
                                    <h6 class="m-0 text-white">Pasta</h6>
                                </div>
                                <div class="card-body text-center">
                                    <h3 id="cPasta" class="text-secondary font-weight-light m-0">-</h3>
                                </div>
                                <div class="text-center my-0">
                                    <a href="#titulo-andamentos"><small>Andamentos</small></a>
                                </div>

                            </div>
                        </div>

                        <div class="col" style="width: 100px; height: 150px;">
                            <div class="card">

                                <div class="card-header text-left py-1 bg-primary">
                                    <div class="row">
                                        <div class="col">
                                            <h6 class="m-0 text-white">Dados do cliente</h6>
                                        </div>
                                    </div>

                                </div>
                                <div class="row h-25">
                                    <div class="card-body text-left py-1">
                                        <div class="row">
                                            <div class="col">
                                                <label class="text-dark my-0" for="cNomeCliente">Nome:</label>
                                                <p class="font-weight-light mb-0" id="cNomeCliente">-</p>
                                            </div>
                                        </div>
                                        <hr class="sidebar-divider my-0">
                                        <div class="row">
                                            <div class="col-xl-4">
                                                <label class="text-dark my-0" for="cIdCliente">Cod Cliente:</label>
                                                <small class="font-weight-light" id="cIdCliente">-</small>
                                            </div>

                                            <div class="col">
                                                <label class="text-dark my-0" for="cCpfCliente">CPF:</label>
                                                <small class="font-weight-light" id="cCpfCliente">-</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Alterando prazo administrativo</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Responsavel:</label>
                                                <input type="text" class="form-control" id="recipient-name">
                                            </div>
                                            <div class="form-group">
                                                <label for="message-text" class="col-form-label">Descrição do prazo:</label>
                                                <textarea class="form-control" id="admdescprazo"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                        <button type="button" class="btn btn-primary">Alterar</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col h-25">
                            <div class="card">

                                <div class="card-header text-left py-1 bg-primary">
                                    <div class="row">
                                        <div class="col">
                                            <h6 class="m-0 text-white">Proximos Prazos</h6>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="card-body text-left py-1">

                                        <div class="row">
                                            <div class="col">
                                                <label class="text-dark my-0" for="cDataPrazoAdm">Administrativo:</label>
                                                <small class="font-weight-light mb-0" id="cDataPrazoAdm">-</small>
                                            </div>
                                            <div class="col">
                                                <label class="text-dark my-0" for="cResponsavelPrazoAdm">Responsável:</label>
                                                <small class="font-weight-light mb-0" id="cResponsavelPrazoAdm">-</small>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-auto">
                                                <label class="text-dark my-0" for="cFinalidadeAdm">Finalidade:</label>
                                                <small class="font-weight-light" id="cFinalidadeAdm">-</small>
                                            </div>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <a href="#" data-toggle="modal" data-target="#staticBackdrop"><small class="font-weight-light mb-0">Alterar</small></a>
                                            </div>
                                            <div class="col-auto">
                                                <a href=""><small class="font-weight-light mb-0">Baixa </small></a>
                                            </div>
                                            <div class="col-auto">
                                                <a href="#"><small id="labelNovoPrazoadm" class="font-weight-light mb-0">Novo</small></a>
                                            </div>
                                        </div>

                                        <hr class="sidebar-divider my-0">
                                        <div class="row">
                                            <div class="col">
                                                <label class="text-dark my-0" for="cDataPrazoJur">Jurídico:</label>
                                                <small class="font-weight-light mb-0" id="cDataPrazoJur">-</small>
                                            </div>
                                            <div class="col">
                                                <label class="text-dark my-0" for="cResponsavelPrazo">Responsável:</label>
                                                <small class="font-weight-light mb-0" id="cResponsavelPrazoJur">-</small>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-auto">
                                                <label class="text-dark my-0" for="cFinalidadeJur">Finalidade:</label>
                                                <small class="font-weight-light" id="cFinalidadeJur">-</small>
                                            </div>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <a href="#"><small class="font-weight-light mb-0">Alterar</small></a>

                                            </div>
                                            <div class="col-auto">
                                                <a href="#"><small class="font-weight-light mb-0">Baixa</small></a>

                                            </div>
                                            <div class="col-auto">
                                                <a href="#"><small class="font-weight-light mb-0">Novo</small></a>

                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-header text-left py-1 bg-primary">
                                    <h6 class="text-white m-0">Informações do processo</h6>
                                </div>
                                <div class="card-body py-1">
                                    <div class="row">
                                        <div class="col">
                                            <label class="text-dark my-0" for="cTipoAcao">Tipo da ação:</label>
                                            <p class="font-weight-light mb-1" id="cTipoAcao">-</p>
                                        </div>
                                        <div class="col">
                                            <label class="text-dark my-0" for="cTipoAcao">Objeto da ação:</label>
                                            <p class="font-weight-light my-0" id="cObjetoAcao">-</p>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="cNumeroProcesso" class="text-dark my-0">Numero do
                                                processo:</label><br>
                                            <p class="mb-1 font-weight-light" id="cNumeroProcesso">-</´p>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="col-xl-2">
                                            <label for="cVara" class="text-dark my-0">Vara:</label>
                                            <p class="text-gray-800 font-weight-light" id="cVara">-</p>
                                        </div>
                                        <div class="col">
                                            <label for="cForum" class="text-dark my-0">Forum:</label>
                                            <p class="text-gray-800 font-weight-light" id="cForum">-</p>
                                        </div>

                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header text-left py-1 bg-primary">
                                    <h6 class="text-white m-0">Informações das Partes</h6>
                                </div>
                                <div class="card-body py-1">
                                    <div>
                                        <label class="text-dark my-0" for="cPartesContrarias">Parte(s)
                                            contraria(s):</label>
                                        <p class="font-weight-light mb-1" id="cPartesContrarias">-</p>
                                    </div>
                                    <div class="row my-auto">
                                        <div class="col">
                                            <label for="cObservacoesDaParte" class="text-dark my-0">Observações da
                                                Parte:</label>
                                            <p class="block font-weight-light text-truncate" style="max-width: 350px;" id="cObservacoesDaParte"> - </p>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <div class="card">
                                <div class="card-header text-left py-1 bg-primary">
                                    <h6 class="text-white m-0">Audiências</h6>
                                </div>
                                <div class="col shadow">
                                    <div class="table-responsive-sm table-wrapper-scroll-y my-custom-scrollbar">
                                        <table id="dtVerticalScrollExample" class="table table-sm table-borderless">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Data</th>
                                                    <th scope="col">Horario</th>
                                                    <th scope="col">Tipo de audiência</th>
                                                    <th scope="col">Anotações</th>
                                                    <th scope="col">Advogado</th>
                                                    <th scope="col">Resumo</th>
                                                    <th scope="col">Ações</th>

                                                </tr>
                                            </thead>
                                            <tbody id="cAudiencias">
                                                <tr>

                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row my-4">
                        <div class="col">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#prazosadm" role="tab" aria-controls="prazosadm" aria-selected="true">Prazos Administrativos</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#protocolos" role="tab" aria-controls="protocolos" aria-selected="false">Protocolos</a>
                                </li>

                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="prazosadm" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="table-responsive-sm table-wrapper-scroll-y my-custom-scrollbar card">
                                        <table id="dtVerticalScrollExample" class="table table-sm table-borderless">
                                            <thead>
                                                <tr>
                                                    <th scope="col"><small>Data</small></th>
                                                    <th scope="col"><small>Descrição do prazo</small></th>
                                                    <th scope="col"><small>Responsável pelo prazo</small></th>
                                                    <th scope="col"><small>Criado por</small></th>
                                                    <th scope="col"><small>Situação</small></th>



                                                </tr>
                                            </thead>
                                            <tbody id="CPrazosAdministrativos">
                                                <tr>

                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="protocolos" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="table-responsive-sm table-wrapper-scroll-y my-custom-scrollbar">
                                        <table id="dtVerticalScrollExample" class="table table-sm table-borderless">
                                            <thead>
                                                <tr>
                                                    <th scope="col"><small>Data do protocolo</small></th>
                                                    <th scope="col"><small>Numero do Protocolo</small></th>
                                                    <th scope="col"><small>Descrição</small></th>
                                                    <th scope="col"><small>Local de Protocolo</small></th>
                                                    <th scope="col"><small>Responsável pelo protocolo</small></th>
                                                    <th scope="col"><small>Responsável pela petição</small></th>
                                                </tr>
                                            </thead>
                                            <tbody id="cProtocolos">
                                                <tr>

                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <h5 id="titulo-andamentos" class="my-2 text-gray-800">Andamentos recentes</h5>

                    <div id="result-andamentos">


                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="http://192.168.175.212/vendor/jquery/jquery.min.js"></script>
    <script src="http://192.168.175.212/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


</body>

</html>