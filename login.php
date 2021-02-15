<?php include("http://192.168.175.212/assets/components/head.html") ?>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-8 col-lg-10 col-md-8">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">

              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Union Processos</h1>
                  </div>
                  <form class="user">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="login" aria-describedby="emailHelp" placeholder="Digite seu login...">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" placeholder="Senha">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="loginCheck">
                        <label class="custom-control-label" for="customCheck">Manter logado</label>
                      </div>
                    </div>
                    <button onclick="Login()" id="btnLogin" class="btn btn-primary btn-user btn-block">
                      Entrar
                    </button>
                    <hr>
                  </form>
                  <div class="text-center">
                    <a class="small" href="forgot-password.html">Esqueceu sua senha?</a>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>


  <?php include("http://192.168.175.212/assets/components/footer.html") ?>

</body>

</html>