
<?PHP
require_once('../conexao/banco.php');

$sql = "select * from tb_vendedor";
$sql = mysqli_query($con, $sql) or die ("Erro na sql!") ;

?>


<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Novo Vendedor:</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="../assets/vendor/css/pages/page-misc.css" />
    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>

  </head>

  <body onload="foco()">
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
        <?php include("../menu.php"); ?>
        <!-- / Menu -->
  
        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->
  
          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>
  
            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                <span class="text-muted fw-light">Cadastrar/</span>Vendedor:</h4>
                  
                </div>
              </div>
              <!-- /Search -->
  
              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                <li class="nav-item lh-1 me-3">
                </li>
  
                <!-- User -->
                <?php include("includeUSER.php"); ?>
                
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>
  
          <!-- / Navbar -->
  
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
  
            <div class="container-xxl flex-grow-1 container-p-y">
            <div class="container-xxl flex-grow-1 container-p-y">
</div>
              
              <div class="row">
                <div class="col-md-12">
                  
                  <div class="card mb-4">
                    <!-- Account -->
                    <div class="card">
     <nav class="navbar navbar-expand-sm navbar-dark" aria-label="Third navbar example" style="background-color: lightgray">
    <div class="container-fluid">
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample03">
        <ul class="navbar-nav me-auto mb-2 mb-sm-0">
          <li class="nav-item">
          <button type="button" class="btn btn-danger">Novo</button>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="consulta_vendedor.php">Consulta:</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Filtrar</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Nome</a></li>
              
            </ul>
          </li>
        </ul>
        
      </div>
    </div>
  </nav>
                    <hr class="my-0" />
                    <div class="card-body">
                      <form id="frm_vendedor" method="POST" action="cadastrar_vendedor.php">
                        <div class="row">
                          <div class="mb-3 col-md-6">
                            <label for="nome" class="form-label">Nome:</label>
                            <input
                              class="form-control"
                              type="text"
                              id="txt_nome"
                              name="txt_nome"
                              autofocus
                              required
                              placeholder="Digite seu nome:"
                              style="background-color: whitesmoke;"
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="txt_empresa" class="form-label">Empresa:</label>
                            <input class="form-control" type="text" name="txt_empresa" id="txt_empresa" required placeholder="Digite sua Empresa:"  style="background-color: whitesmoke;"/>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="txt_email" class="form-label">Email:</label>
                            <input class="form-control" type="email" name="txt_email" id="txt_email" required placeholder="Digite seu Email:" style="background-color: whitesmoke;"/>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="txt_data_cadastro" class="form-label">Data/Cadastro:</label>
                            <input class="form-control" type="date" name="txt_data_cadastro" id="txt_data_cadastro" style="background-color: whitesmoke;"/>
                          </div>
                          
                        <div class="mt-2">
                          <button type="submit" class="btn btn-primary me-2">Cadastrar</button>
                          <button type="reset" class="btn btn-outline-secondary">Apagar</button>
                        </div>
                      </form>
                    </div>
                    <!-- /Account -->
                  </div>
                  <div class="card">
  
                    </div>
              
              
            <!-- / Content -->
  
            <!-- Footer -->
            
            <!-- / Footer -->
  
            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>
  
      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->
  
    
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  
    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->
  
    <!-- Vendors JS -->
  
    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>
  
    <!-- Page JS -->
    <script src="../assets/js/pages-account-settings-account.js"></script>
  
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
