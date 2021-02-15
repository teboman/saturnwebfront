<?php include("http://192.168.175.212/assets/components/head.html") ?>

<body id="page-top" onload="CarregarProcesso()">
  <div id="wrapper">

    <?php include("http://192.168.175.212/assets/components/sidebar.html") ?>
    <div id="content-wrapper" class="d-flex flex-column">

      <div id="content">

        <?php include("http://192.168.175.212/assets/components/navheader.html") ?>

        <div class="main col-sm-6 mt-4 ml-auto mr-auto border pb-2 mb-5">
          <h3>Ficha de Cliente Fisico maior idade</h3>

          <hr>
          <form id="form" onload="">
            <label>Nome Completo</label>
            <input class="form-control form-control-sm" id="cNome" name="cNome">
            <div class="form-row">
              <div class="form-group col">
                <label for="cNascimento">Data de Nascimento</label>
                <input type="date" class="form-control form-control-sm" id="cNascimento" name="cNascimento" placeholder="dd/mm/aaaa">
              </div>
              <div class="form-group col">
                <label for="cGenero">Genero</label>
                <select class="form-control form-control-sm" name="cGenero" id="cGenero">
                  <option></option>
                  <option>Masculino</option>
                  <option>Feminino</option>
                </select>
              </div>
              <div class="form-group col">
                <label for="cNacionalidade">Nacionalidade</label>
                <input type="text" class="form-control form-control-sm" id="cNacionalidade" name="cNacionalidade">
              </div>
            </div>


            <div class="form-group">
              <label for="cEstadoCivil">Nome do Pai</label>
              <input type="text" class="form-control form-control-sm" id="cEstadoCivil" name="cEstadoCivil">
            </div>
            <div class="form-group">
              <label for="cEstadoCivil">Nome da mãe</label>
              <input type="text" class="form-control form-control-sm" id="cEstadoCivil" name="cEstadoCivil">
            </div>
            <hr>
            <h3>Dados e documentos pessoais</h3>
            <hr>
            <div class="form-row">
              <div class="form-group col">
                <label for="cRg">RG</label>
                <input class="form-control form-control-sm" type="text" id="cRg" name="cRg" size="12" maxlength="12" placeholder="Numero RG">
              </div>
              <div class="form-group col">
                <label for="cCpf">CPF</label>
                <input class="form-control form-control-sm" type="text" id="cCpf" name="cCpf" size="14" maxlength="14" placeholder="Numero CPF">
              </div>
            </div>
            <div class="form-group">
              <label>Profissão</label>
              <input class="form-control form-control-sm" type="text" id="cProfissao" name="cProfissao" placeholder="Profissão">
            </div>
            <div class="form-row">
              <div class="form-group col">
                <label>Numero do PIS</label>
                <input class="form-control form-control-sm" type="text" id="cPis" name="cPis" placeholder="Numero PIS">
              </div>
              <div class="form-group col">
                <label>Numero da CTPS</label>
                <input class="form-control form-control-sm" type="text" id="cCtps" name="cCtps" placeholder="Numero CTPS">
              </div>
              <div class="form-group col">
                <label>Série CTPS</label>
                <input class="form-control form-control-sm" type="text" id="cSerieCTPS" name="cSerieCtps" placeholder="Numero serie CTPS">
              </div>
            </div>
            <hr>
            <h3>Informações de contato</h3>
            <hr>

            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="cCep">CEP</label>
                <input class="form-control form-control-sm" type="text" id="cCep" name="cCep" width="9" placeholder="Ex: 00000-000">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col">
                <label for="cEndereco">Endereço</label>
                <input class="form-control form-control-sm" type="text" id="cEndereco" name="cEndereco" size="100" placeholder="Digite o endereço">
              </div>
              <div class="form-group col-md-2">
                <label>Numero</label>
                <input class="form-control form-control-sm" type="text" id="cNumero" name="cNumero" size="8" placeholder="">
              </div>
              <div class="form-group col-md-3">
                <label>Complemento</label>
                <input class="form-control form-control-sm" type="text" id="cComplemento" name="cComplemento" size="10" placeholder="Ex.: Casa 2">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col">
                <label>Bairro</label>
                <input class="form-control form-control-sm" type="text" id="cBairro" name="cbairro" placeholder="">
              </div>
              <div class="form-group col">
                <label>Cidade</label>
                <input class="form-control form-control-sm" type="text" id="cCidade" name="cCidade" placeholder="Ex.: São Paulo">
              </div>
              <div class="form-group col-md-1">
                <label>UF</label>
                <input class="form-control form-control-sm" type="text" id="cUf" name="cUf" size="2" maxlength="2">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col">
                <label>Telefone 1</label>
                <input class="form-control form-control-sm" type="text" id="cTelefone1" name="cTelefone1" placeholder="Ex.:(11) 88888-8888">
              </div>
              <div class="form-group col">
                <label>Telefone Fixo</label>
                <input class="form-control form-control-sm" type="text" id="cTelefoneFixo" name="cTelefoneFixo" placeholder="Ex.:(11) 2222-2222">
              </div>
              <div class="form-group col">
                <label>Telefone 2</label>
                <input class="form-control form-control-sm" type="text" id="cTelefone2" name="cTelefone2" placeholder="Ex.:(11) 88888-8888">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col">
                <label>Endereço de E-Mail</label>
                <input class="form-control form-control-sm" type="text" id="cEmail" name="cEmail" size="60" placeholder="nomedocliente@dominio.com.br">
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>

        </form>
      </div>
    </div>

    <script src="http://192.168.175.212/vendor/jquery/jquery.min.js"></script>
    <script src="http://192.168.175.212/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="http://192.168.175.212/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script type="text/javascript" src="http://192.168.175.212/assets/js/reqClientes.js"></script>

</body>

</html>