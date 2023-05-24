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
    <img src="../fotos/DREAM">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
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
<a href="backup.php" class="btn btn-info"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-cloud-arrow-up-fill" viewBox="0 0 16 16">
  <path d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm2.354 5.146a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708l2-2a.5.5 0 0 1 .708 0l2 2z"/>
</svg></a>          
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
                            <td> <?php echo $dados['cli_codigo']; ?> </td> 
                            <td> <?php echo $dados['cli_nome']; ?> </td> 
                            <td> <?php echo $dados['cli_telefone']; ?> </td>
                            <td> <?php echo $dados['cli_cpf']; ?> </td>
                            <td> <?php echo $dados['cli_rua']; ?> </td> 
                            <td> <?php echo $dados['cli_numero']; ?> </td> 
                            <td> <?php echo $dados['cli_bairro']; ?> </td>
                            <td> <?php echo $dados['cli_cidade']; ?> </td>
                            <td> <?php echo $dados['cli_estado']; ?> </td> 
                            <td> <?php echo $dados['cli_complemento']; ?> </td> 

                            
                          <td>
                          <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal13"
                               data-whatevernome="<?php echo $dados['cli_nome']; ?>"
                               data-whatevertelefone="<?php echo $dados['cli_telefone'];  ?>"
                               data-whatevercpf="<?php echo $dados['cli_cpf']; ?>"
                               data-whateverrua="<?php echo $dados['cli_rua']; ?>"
                               data-whatevernumero="<?php echo $dados['cli_numero']; ?>"
                               data-whateverbairro="<?php echo $dados['cli_bairro']; ?>"
                               data-whatevercidade="<?php echo $dados['cli_cidade']; ?>"
                               data-whateverestado="<?php echo $dados['cli_estado']; ?>"
                               data-whatevercomplemento="<?php echo $dados['cli_complemento']; ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
  <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
</svg>
</button>
                          <a type="button" class="btn btn-secondary"  href="delete_cliente.php?cli_codigo=<?php echo $dados['cli_codigo']; ?>" onclick="excluir_registro(event)"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-trash-fill" viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
</svg></a> 
                 
       </td>
     </tr>
    </div>
  </div>
<?php } ?>
</tbody>
</table>
<?php include("includeMODAL.php"); ?>
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

<script type="text/javascript">
$('#exampleModal13').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipientnome = button.data('whatevernome')
  var recipienttelefone = button.data('whatevertelefone')
  var recipientcpf = button.data('whatevercpf')
  var recipientrua = button.data('whateverrua')
  var recipientnumero = button.data('whatevernumero')
  var recipientbairro = button.data('whateverbairro')
  var recipientcidade = button.data('whatevercidade')
  var recipientestado = button.data('whateverestado')
  var recipientcomplemento = button.data('whatevercomplemento')
// Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('Editar de ' + recipientnome)  
  modal.find('#recipient-nome').val(recipientnome)
  modal.find('#recipient-telefone').val(recipienttelefone)
  modal.find('#recipient-cpf').val(recipientcpf)
  modal.find('#recipient-rua').val(recipientrua)
  modal.find('#recipient-numero').val(recipientnumero)
  modal.find('#recipient-bairro').val(recipientbairro)
  modal.find('#recipient-cidade').val(recipientcidade)
  modal.find('#recipient-estado').val(recipientestado)
  modal.find('#recipient-complemento').val(recipientcomplemento)
})
</script>
  </body>
  
  
</html>
