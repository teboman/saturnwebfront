<?php include("http://192.168.175.212/assets/components/head.html") ?>

<body id="page-top" onload="CarregaPrazosAdministrativosDia()">
  <div id="wrapper">

    <?php include("http://192.168.175.212/assets/components/sidebar.html") ?>
    <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                <?php include("assets/components/navheader.html") ?>

                <!-- Fim da barra superior -->
                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Resumo diário</h1>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">

                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Prazos Juridicos</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="cPrazosJuridicos">
                                                -
                                            </div>

                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clock fa-2x"></i>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Prazos Administrativos
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="cPrazosAdministrativos">-</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clock fa-2x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutter align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Audiências
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-primary" id="cAudiencias">
                                                -
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user-tie fa-md fa-2x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutter align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary mb-1">
                                                Pendencias
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-primary mb-1" id="cPendencias">
                                                -
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Prazos jurídicos</h1>
                    </div>
                    <div class="row">
                        <div class="col shadow">
                            <div class="table-responsive-sm table-wrapper-scroll-y my-custom-scrollbar">
                                <table id="dtVerticalScrollExample" class="table table-sm table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">Pasta</th>
                                            <th scope="col">Numero do processo</th>
                                            <th scope="col">Tipo de ação</th>
                                            <th scope="col">Data</th>
                                            <th scope="col">Finalidade do prazo</th>
                                            <th scope="col">Responsável</th>

                                        </tr>
                                    </thead>
                                    <tbody id="ctblPrazosJuridicos">
                                        <td class="text-left"><a href="http://192.168.175.212/processos/pasta?p=' + item.Pasta + '"><small class="my-3">12431</small></a></td>
                                        <td><small class="d-inline-block text-truncate" style="max-width: 250px;">000000000000000</small></td>
                                        <td><small class="d-inline-block text-truncate" style="max-width: 150px;">Ação Civel</small></td>
                                        <td><small>31/03/1991</small></td>
                                        <td><small class="d-inline-block text-truncate" style="max-width: 250px;">Deixar essa tabela bunitinha</small></td>

                                        <td><small class="d-inline-block text-truncate" style="max-width: 150px;">Gilberto Andre Junior</small></a>

                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="d-sm-flex my-4 align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Prazos administrativos</h1>
                    </div>
                    <div class="row">
                        <div class="col shadow">
                            <div class="table-responsive-sm table-wrapper-scroll-y my-custom-scrollbar">
                                <table class="table table-sm table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">Pasta</th>
                                            <th scope="col">Numero do processo</th>
                                            <th scope="col">Tipo de ação</th>
                                            <th scope="col">Data</th>
                                            <th scope="col">Finalidade do prazo</th>
                                            <th scope="col">Responsável</th>

                                        </tr>
                                    </thead>
                                    <tbody id="ctblPrazosAdministrativos">

                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 my-3 mb-0 text-gray-800">Andamentos recentes</h1>
                    </div>
                </div>



            </div>
        </div>


        <?php include("http://192.168.175.212/assets/components/footer.html") ?>

</body>

</html>