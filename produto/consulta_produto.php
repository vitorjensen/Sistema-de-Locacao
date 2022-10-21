<?PHP

require_once('../conexao/banco.php');

$cons_codigo = isset($_REQUEST['txt_cons_codigo']) ? $_REQUEST['txt_cons_codigo'] : '';


if(!empty($_GET['search']))
{
 $data = $_GET['search'];
 $sql = "SELECT * FROM tb_produto WHERE pro_codigo LIKE '%$data%' ORDER BY pro_codigo DESC";
}
else
{
  $sql = "select *, date_format(pro_data_cadastro,'%d/%m/%Y') as pro_data_cadastro
        from tb_produto
        where pro_codigo like '%".$cons_codigo."%'
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

    <title>Consulta | Produto</title>

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
    </script>

    <style>

.db-wrap {
    background: #ffffff;
    border-radius: 3px;
    border: 3px solid #e4eaec;
    width: 270px;
    height: 61,99px;
    min-height: 62px;
    padding: 15px;
    padding-top: 18px;
    margin-bottom: 15px;
    position: relative;
}
*, :after, :before {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.back-color-5 {
    background: lightblue;
    color: #ffffff;
    cursor: pointer;
}

 

.btn-primary{
  justify-content: center;
  gap: 3px;
}

.nav-item{
  justify-content: center;
}


.pb-2, .py-2 {
    padding-bottom: 0.5rem!important;
}

.shadow {
    box-shadow: 0 .15rem 1.75rem 0 rgba(58,59,69,.15)!important;
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid #e3e6f0;
    border-radius: 0.35rem;
}
*, ::after, ::before {
    box-sizing: border-box;
}
.fa-clipboard-list:before {
    content: "\f46d";
}
*, ::after, ::before {
    box-sizing: border-box;
}
.bi{
color: black;
}


      </style>
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
    <script>
    
    function editar_registro() {
        if( !confirm('Deseja realmente editar este registro?') 

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
                <span class="text-muted fw-light">Produto/</span> Consulta
                  
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
       
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
            <div class="container-xxl flex-grow-1 container-p-y">

            </div>
		
		
                             
              <div class="row">
                
                <div class="col-md-12">
                  
                  <div class="card">
                  <nav class="navbar navbar-expand-sm navbar-dark" aria-label="Third navbar example" style="background-color:rgba(67, 89, 113, 0.05);">
    <div class="container">
  
      <div class="card shadow h-100 py-2" style="background-color:whitesmoke;">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-clipboard-check-fill" viewBox="0 0 16 16" >
  <path d="M6.5 0A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3Zm3 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3Z"/>
  <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1A2.5 2.5 0 0 1 9.5 5h-3A2.5 2.5 0 0 1 4 2.5v-1Zm6.854 7.354-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708.708Z" />
</svg> Total no estoque:</div>

                                            <div class="h5 mb-0 font-weight-bold text-gray-800">R$: <?php 
        include_once "../conexao_movimentacao/banco.php"; 
          $query_valor = "SELECT SUM(pro_qtde * pro_custo) AS valor_estoque FROM tb_produto"; $result_valor = $conn->prepare($query_valor); $result_valor->execute();
          $row_valor = $result_valor->fetch(PDO::FETCH_ASSOC); echo number_format($row_valor['valor_estoque'], 2, "," , "."); ?>
                         </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="back-color-5" style="position:absolute;bottom:0px;left:0px;width:100%;height:7px"></div>
                            </div>
                          
                            
                            <div class="card  shadow h-100 py-2" style="background-color:whitesmoke;">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-box-seam-fill" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.01-.003.268-.108a.75.75 0 0 1 .558 0l.269.108.01.003 6.97 2.789ZM10.404 2 4.25 4.461 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339L8 5.961 5.596 5l6.154-2.461L10.404 2Z"/>
      </svg>    Produtos cadastrados:</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Total: <?php
        include_once "../conexao_movimentacao/banco.php"; 
          $query_valor = "SELECT COUNT(pro_codigo) AS valor_registro FROM tb_produto"; $result_valor = $conn->prepare($query_valor); $result_valor->execute();
          $row_valor = $result_valor->fetch(PDO::FETCH_ASSOC); echo $row_valor['valor_registro'] ;  
          ?></div>
            </div>
            <div class="col-auto">
                <i class="fas fa-calendar fa-2x text-gray-300"></i>
            </div>
        </div>
    </div>
    <div class="back-color-5" style="position:absolute;bottom:0px;left:0px;width:100%;height:7px"></div>
        </div>
          <div class="card border-left-primary shadow h-100 py-2" style="background-color:whitesmoke;">
          <div class="card-body">
              <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-box-seam-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.01-.003.268-.108a.75.75 0 0 1 .558 0l.269.108.01.003 6.97 2.789ZM10.404 2 4.25 4.461 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339L8 5.961 5.596 5l6.154-2.461L10.404 2Z"/>
            </svg>   Quantidade de Produtos:</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Total: <?php
        include_once "../conexao_movimentacao/banco.php"; 
          $query_valor = "SELECT SUM(pro_qtde) AS valor_qtde FROM tb_produto"; $result_valor = $conn->prepare($query_valor); $result_valor->execute();
          $row_valor = $result_valor->fetch(PDO::FETCH_ASSOC); echo $row_valor['valor_qtde'] ;  
          ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="back-color-5" style="position:absolute;bottom:0px;left:0px;width:100%;height:7px"></div>
                            </div>
                           
                            </div>
                            
                            </div>
                            <br>
                            
                    <!-- Notifications -->
                    <div class="card">
                    <button class="dt-button create-new btn btn-primary" data-toggle="modal" data-target="#exampleModal5" tabindex="0"  type="button"><span><i class="bx bx-plus me-2"></i> <span class="d-none d-lg-inline-block"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Adicionar novo registro</font></font></span></span></button>
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
          <button type="button" class="btn btn-danger" style="margin: 3px;">Consulta</button>
          </li>
         
          <li class="nav-item dropdown">
            <a></a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Nome</a></li>
              
            </ul>
          </li>
        </ul>
        <div class="box-search"  style="position: relative; right: 10px;">
          <input class="form-control" type="search" id="pesquisa" placeholder="Pesquisar:" aria-label="Search">
          </div>
          <button class="btn btn-primary"  onclick="searchData()">
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
                      <th> <strong> #: </strong></th>
                      <th> <strong> Foto: </strong></th>
                      <th> <strong> Fornecedor: </strong></th>
                      <th> <strong> Descrição:</strong></th>
                      <th> <strong> Descrição/ADD:</strong></th>
                      <th> <strong> Custo:</strong></th>
                      <th> <strong> Indice:</strong></th>
                      <th> <strong> Valor:</strong></th>
                      <th> <strong> Tamanho:</strong></th>
                      <th> <strong> Aluguel: </strong></th>
                      <th> <strong> QTDE: </strong></th>
                      <th> <strong> Cor: </strong></th>
                      <th> <strong> Status:</strong></th>
                      <th> <strong> Tipo:</strong></th>
                      <th> <strong> Data/Cadastro:</strong></th>
                      <th> <strong> Disponível: </strong></th>
                            </tr>
                            </thead>

                    <?php while ($dados = mysqli_fetch_array($sql)) { ?>
                      
                      <tbody class="table-border-bottom-0"> 
                      <tr>
                      <td> <?php echo utf8_encode($dados['pro_codigo']); ?> </td> 
                      <td> <img src="<?php echo $dados['pro_foto']; ?> "target="_blank" style="width: 60px; height: 60px;" <?php echo $dados['pro_foto']; ?>>  </td>
                      <td> <?php echo utf8_encode( $dados['for_fantasia']); ?> </td>
                      <td> <?php echo utf8_encode($dados['pro_descricao']); ?> </td>
                      <td> <?php echo utf8_encode($dados['pro_descricao_add']); ?> </td>
                      <td> <?php echo "R$" . number_format($dados['pro_custo'], 2, "," , "."); ?> </td> 
                      <td> <?php echo "%" . $dados['pro_indice']; ?> </td> 
                      <td> <?php echo "R$" . number_format($dados['pro_valor'], 2, "," , "."); ?> </td>
                      <td> <?php echo utf8_encode($dados['pro_tamanho']); ?> </td>
                      <td> <?php echo utf8_encode($dados['pro_aluguel']); ?> </td> 
                      <td> <?php echo utf8_encode($dados['pro_qtde']); ?> </td>
                      <td> <?php echo utf8_encode($dados['pro_cor']); ?> </td>
                      <td> <?php echo utf8_encode ($dados['pro_status']); ?> </td>
                      <td> <?php echo utf8_encode($dados['pro_tipo']); ?> </td>
                      <td> <?php echo utf8_encode($dados['pro_data_cadastro']); ?> </td>
                      <td style="color: red;"> <?php echo $dados['pro_qtde']; ?></td> 
                      <td>
                               </div>
                               <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal" 
                               data-whatever="<?php echo $dados['alu_codigo']; ?>"
                               data-whatevernome="<?php echo $dados['pro_codigo'];  ?>"
                               data-whateverprodutocodigo="<?php echo $dados['pro_codigo'];  ?>"
                               data-whateverproduto="<?php echo $dados['vem_produto']; ?>"
                               data-whateverqtde="<?php echo $dados['vem_qtde']; ?>" 
                               data-whateverrestapagar="<?php echo $dados['vem_resta_pagar']; ?>"
                               data-whateverpagototal="<?php echo $dados['vem_pago_total']; ?>"
                               data-whatevertipopagamento="<?php echo $dados['vem_tipo_pagamento']; ?>" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-pencil-fill" viewBox="0 0 16 16">
  <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
</svg></button>



  <a type="button" class="btn btn-secondary"  href="delete_produto.php?pro_codigo=<?php echo $dados['pro_codigo']; ?>" onclick="excluir_registro(event)"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-trash-fill" viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
</svg></a>
                              </div>
                             </td>
                           </tr>
                          </div>
                        </div>
                      <?php } ?>
                      </tbody>
                  </table>
                      <?php include("includeMODALCAD.php"); ?>
                    <!-- /Account -->
                  </div>
                  </div>
                  
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
  
  <script type="text/javascript">
$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever')
  var recipientnome = button.data('whatevernome')
  var recipientprodutocodigo = button.data('whateverprodutocodigo')
  var recipientproduto = button.data('whateverproduto')
  var recipientqtde = button.data('whateverqtde')
  var recipientrestapagar = button.data('whateverrestapagar')
  var recipientpagototal = button.data('whateverpagototal')
  var recipienttipopagamento = button.data('whatevertipopagamento') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('Editar de ' + recipientnome)  
  modal.find('#recipient-codigo').val(recipient)
  modal.find('#recipient-nome').val(recipientnome)
  modal.find('#recipient-telefone').val(recipienttelefone)
 

})
</script>

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
   window.location = 'consulta_produto.php?search='+search.value; 
}

</script>
  </body>
</html>
