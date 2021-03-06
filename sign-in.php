<!--
=========================================================
* Soft UI Dashboard - v1.0.3
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <title>
    DATZA COMPUTER_Iniciar
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
</head>

<body class="">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg blur blur-rounded top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
          <div class="container-fluid">
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="index.html">
            <img src="assets/img/Logo.png" class="navbar-brand-img h-100" alt="main_logo" style="width:30px;">
              DATZA COMPUTER
            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button>
            <div class="collapse navbar-collapse" id="navigation">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                  <a class="nav-link me-2" href="sign-up.php">
                    <i class="fas fa-user-circle opacity-6 text-dark me-1"></i>
                    Registrarse
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-2" href="sign-in.php">
                    <i class="fas fa-key opacity-6 text-dark me-1"></i>
                    Iniciar_Sesion
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-75">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
              <div class="card card-plain mt-8">
                <?php
                  if(isset($_GET['estado'])){
                    $estado = $_GET['estado'];
                      if($estado==1){
                        ?>
                        <div class="mb-3 text-center">
                          <a href="#" class="btn btn-success btn-icon-split">
                            <span class="icon text-white-50">
                              <i class="fas fa-check"></i>
                            </span>
                            <span class="text">Usuario Creado Correctamente</span>
                          </a>
                        </div>      
                        <?php
                      }
                        if($estado==2){
                          ?>
                          <div class="mb-3 text-center">
                            <a href="#" class="btn btn-danger btn-icon-split">
                              <span class="icon text-white-50">
                                <i class="fas fa-exclamation-triangle"></i>
                              </span>
                              <span class="text">Correo / Contrase??a Incorrectos</span>
                            </a>
                          </div>
                          <?php
                        }
                          if($estado==3){
                            ?>
                            <div class="mb-3 text-center">
                              <a href="#" class="btn btn-success btn-icon-split">
                                <span class="icon text-white-50">
                                  <i class="fas fa-check"></i>
                                </span>
                                <span class="text">Contrase??a Actualizada</span>
                              </a>
                            </div>
                            <?php
                          }
                        }
                      ?>
                <div class="card-header pb-0 text-left bg-transparent">
                  <h3 class="font-weight-bolder text-info text-gradient">Bienvenido de Nuevo</h3>
                  <p class="mb-0">Ingrese su correo electr??nico y contrase??a para iniciar sesi??n</p>
                </div>
                <div class="card-body">
                  <form role="form" action="in.php" method="POST">
                    <label>Correo</label>
                    <div class="mb-3">
                      <input type="email" class="form-control" name="correo" placeholder="Correo Electronico" aria-label="Email" aria-describedby="email-addon">
                    </div>
                    <label>Contrase??a</label>
                    <div class="mb-3">
                      <input type="password" class="form-control" name="pass" placeholder="Contrase??a" aria-label="Password" aria-describedby="password-addon">
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">INICIAR</button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-4 text-sm mx-auto">
                    ??No tienes una cuenta?
                    <a href="sign-up.php" class="text-info text-gradient font-weight-bold">Registrarse</a>
                  </p>
                  <p class="mb-4 text-sm mx-auto">
                  <a href="forgoten-password.php" class="text-info text-gradient font-weight-bold">??Has Olvidado tu Contrase??a?</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('assets/img/curved-images/curved6.jpg')"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <footer class="footer py-5">
    <div class="container">
      <div class="row">
        <div class="col-8 mx-auto text-center mt-1">
          <p class="mb-0 text-secondary">
            Copyright ?? <script>
              document.write(new Date().getFullYear())
            </script> Soft by Creative Tim.
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <!--   Core JS Files   -->
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
</body>

</html>