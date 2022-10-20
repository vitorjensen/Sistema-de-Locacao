<?PHP
require_once('../conexao/banco.php');

$cons_codigo = isset($_REQUEST['txt_cons_codigo']) ? $_REQUEST['txt_cons_codigo']: '';
$cons_nome = isset($_REQUEST['txt_cons_nome']) ? $_REQUEST['txt_cons_nome']: '';
$cons_telefone = isset($_REQUEST['txt_cons_telefone']) ? $_REQUEST['txt_cons_telefone']: '';
$cons_cpf = isset($_REQUEST['txt_cons_cpf']) ? $_REQUEST['txt_cons_cpf']: '';
$cons_rua = isset($_REQUEST['txt_cons_rua']) ? $_REQUEST['txt_cons_rua']: '';
$cons_numero = isset($_REQUEST['txt_cons_numero']) ? $_REQUEST['txt_cons_numero']: '';
$cons_bairro = isset($_REQUEST['txt_cons_bairro']) ? $_REQUEST['txt_cons_bairro']: '';
$cons_cidade = isset($_REQUEST['txt_cons_cidade']) ? $_REQUEST['txt_cons_cidade']: '';
$cons_estado = isset($_REQUEST['txt_cons_estado']) ? $_REQUEST['txt_cons_estado']: '';
$cons_complemento = isset($_REQUEST['txt_cons_complemento']) ? $_REQUEST['txt_cons_complemento']: '';

if(!empty($_GET['search']))
{
 $data = $_GET['search'];
 $sql = "SELECT * FROM tb_cliente WHERE cli_codigo LIKE '%$data%' or cli_nome LIKE '%$data%' ORDER BY cli_codigo DESC";
}
else
{
  $sql = "select * from tb_cliente
  where 
    cli_codigo like '%".$cons_codigo."%'AND
    cli_nome like '%".$cons_nome."%'AND
    cli_telefone like '%".$cons_telefone."%'AND
    cli_cpf like '%".$cons_cpf."%'AND
    cli_rua like '%".$cons_rua."%'AND
    cli_numero like '%".$cons_numero."%'AND
    cli_bairro like '%".$cons_bairro."%'AND
    cli_cidade like '%".$cons_cidade."%'AND
    cli_estado like '%".$cons_estado."%'AND
    cli_complemento like '%".$cons_complemento."%'
 ";
}


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

    <title>Consulta | Cliente</title>

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


    <script type="text/javascript">
    
        function excluir_registro( ) {
            if( !confirm('Deseja realmente excluir este registro?') 
        ){
            if( window.event)
                window.event.returnValue=false;
            else
                e.preventDefault();
         }
        }
    
    </script>
  </head>

  <body>
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
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)" >
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                <span class="text-muted fw-light">Cliente/</span> Consulta
                  
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
                  
               
                    <!-- Notifications -->
                    <div class="card">
                    <button class="dt-button create-new btn btn-primary" data-toggle="modal" data-target="#exampleModal6" tabindex="0"  type="button"><span><i class="bx bx-plus me-2"></i> <span class="d-none d-lg-inline-block"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Adicionar novo registro</font></font></span></span></button>
  </div>
                    <br>
                    <div class="card">
    <nav class="navbar navbar-expand-sm navbar-dark" aria-label="Third navbar example" style="background-color: lightgray">
    <div class="container-fluid">
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample03">
        <ul class="navbar-nav me-auto mb-2 mb-sm-0">
          <li class="nav-item">
          <button type="button" class="btn btn-danger">Consulta</button>
          </li>
        

        </ul>
        <div class="box-search"  style="position: relative; right: 10px;">
          <input class="form-control" type="search" id="pesquisa" placeholder="Pesquisar:" aria-label="Search">
          </div>
          <button class="btn btn-primary" onclick="searchData()">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
          </svg>
        </button>
        </form>
      
    </div>
  </nav>
                      <div class="table-responsive text-nowrap">
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                      <th> <strong> Código: </strong></th>
                      <th> <strong> Nome: </strong></th>
                      <th> <strong> Telefone: </strong></th>
                      <th> <strong> CPF:</strong> </th>
                      <th> <strong> Rua:</strong> </th>
                      <th> <strong> Numero:</strong> </th>
                      <th> <strong> Bairro:</strong> </th>
                      <th> <strong> Cidade:</strong> </th>
                      <th> <strong> Estado:</strong> </th>
                      <th> <strong> Complemento: </strong></th>
                            </tr>
                            </thead>

                          <?php while ($dados = mysqli_fetch_array($sql)) { ?>

                            <tbody class="table-border-bottom-0"> 
                              <tr>
                            <td> <?php echo utf8_encode($dados['cli_codigo']); ?> </td> 
                            <td> <?php echo utf8_encode($dados['cli_nome']); ?> </td> 
                            <td> <?php echo utf8_encode($dados['cli_telefone']); ?> </td>
                            <td> <?php echo utf8_encode($dados['cli_cpf']); ?> </td>
                            <td> <?php echo utf8_encode($dados['cli_rua']); ?> </td> 
                            <td> <?php echo utf8_encode($dados['cli_numero']); ?> </td> 
                            <td> <?php echo utf8_encode($dados['cli_bairro']); ?> </td>
                            <td> <?php echo utf8_encode($dados['cli_cidade']); ?> </td>
                            <td> <?php echo utf8_encode($dados['cli_estado']); ?> </td> 
                            <td> <?php echo utf8_encode($dados['cli_complemento']); ?> </td> 

                            
                          <td>
                          <div class="dropdow">
                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                          <i class="bx bx-dots-vertical-rounded"></i>
                          </button>
                          <div class="dropdown-menu">
                          <a class="dropdown-item" href="form_atualizar_cliente.php?cli_codigo=<?php echo $dados['cli_codigo']; ?>">
                          <i class="bx bx-edit-alt me-2"></i> Editar</a
                          >
                        <a class="dropdown-item" href="delete_cliente.php?cli_codigo=<?php echo $dados['cli_codigo']; ?>" onclick="excluir_registro(event)">
                    <i class="bx bx-trash me-2"></i> Apagar</a    
                    >
         </div>
        </div>              
       </td>
     </tr>
    </div>
  </div>
<?php } ?>
</tbody>
</table>

<?php include("includeMODALCAD.php"); ?>

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

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script>

var search = document.getElementById('pesquisa');

search.addEventListener("keydown", function(event){
  if (event.key === "Enter")
  {
    searchData();
  }
});

function searchData()
{
   window.location = 'consulta_cliente.php?search='+search.value; 
}

</script>
  </body>
  
  
</html>
