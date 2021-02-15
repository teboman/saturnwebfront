<?php include("http://192.168.175.212/assets/components/head.html") ?>

<body>
    <div id="wrapper">

        <?php include("http://192.168.175.212/assets/components/sidebar.html") ?>

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">
                <?php include("http://192.168.175.212/assets/components/navheader.html") ?>

                <!-- CORPO DA PAGINA -->
                <div class="container-fluid">
                    <h3>Pesquisar cliente</h3>
                    <div class="form-row pb-4">
                        <div class="form-group col-md-2">
                            <label for="criterio">Pesquisar por:</label>
                            <select class="form-control form-control-sm" type="text" name="criterio2">
                                <option>Nome</option>
                                <option>RG</option>
                                <option>CPF</option>
                            </select>
                        </div>
                        <div class="form-group col">
                            <label for="clientsearch">Pesquisar:</label>
                            <input class="form-control form-control-sm" type="text" id="criterio1" name="criterio1">
                        </div>
                    </div>
                    <button id="botao" onclick="ProcurarCliente(criterio1.value)" class="btn btn-primary mb-4">Procurar</button>
                    <button id="limpar" class="btn btn-primary mb-4">Limpar</button>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col-xs-1">#</th>
                                <th scope="col-xs-2">Nome do Cliente</th>
                                <th scope="col">RG</th>
                                <th scope="col">CPF</th>
                                <th scope="col">Data de nascimento</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody id="result">

                        </tbody>
                    </table>
                </div>

                <!-- FIM DO CORPO DA PAGINA-->

            </div>
        </div>
        <script src="http://192.168.175.212/vendor/jquery/jquery.min.js"></script>
        <script src="http://192.168.175.212/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="http://192.168.175.212/vendor/jquery-easing/jquery.easing.min.js"></script>
        <script type="text/javascript" src="http://192.168.175.212/assets/core.js"></script>

</body>

</html>