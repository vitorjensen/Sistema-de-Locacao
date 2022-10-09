<?PHP
require_once('../conexao/banco.php');

$cons_codigo = isset($_REQUEST['txt_cons_codigo']) ? $_REQUEST['txt_cons_codigo'] : '';

$sql = "select *, date_format(vem_data_inicial,'%d/%m/%Y') as data, date_format(vem_evento,'%d/%m/%Y') as data2, 
date_format(vem_data_compra,'%d/%m/%Y') as data3

        from tb_venda
        where vem_codigo like '%".$cons_codigo."%'
       ";

$sql = mysqli_query($con, $sql) or die ("Erro na sql!") ;

$cons_codigo = isset($_REQUEST['txt_cons_codigo']) ? $_REQUEST['txt_cons_codigo'] : '';

$sql2 = "select *, date_format(ven_data_cadastro,'%d/%m/%Y') as data
        from tb_vendedor
        where ven_codigo like '%".$cons_codigo."%'
       ";

$sql2 = mysqli_query($con, $sql2) or die ("Erro na sql!") ;


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

    <title>Consulta | Venda</title>

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


    <script>
    
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
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                <span class="text-muted fw-light">Compra/</span> Consulta
                  
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
                  
                  <div class="card">
                    <!-- Notifications -->
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
          <li class="nav-item">
            <a class="nav-link" href="form_venda.php">Nova Venda:</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Filtrar</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Nome</a></li>
              
            </ul>
          </li>
        </ul>
        <div class="box-search"  style="position: relative; right: 10px;">
          <input class="form-control" type="search" placeholder="Pesquisar:" aria-label="Search">
          </div>
          <button class="btn btn-primary">
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
                              <th>#:</th>
                              <th>Nome:</th>
                              <th>Telefone:</th>
                              <th>CPF:</th>
                              <th>Rua:</th>
                              <th>Número:</th>
                              <th>Bairro:</th>
                              <th>Cidade:</th>
                              <th>Estado:</th>
                              <th>Complemento:</th>
                              <th>Data/Inicial:</th>
                              <th>Evento:</th>
                              <th>Data/Compra:</th>
                              <th>Código/Produto:</th>
                              <th>Produto:</th>
                              <th>Cor:</th>
                              <th>Tipo:</th>
                              <th>Tamanho:</th>
                              <th>QTDE:</th>
                              <th>Valor:</th>
                              <th>Valor Sinal:</th>
                              <th>Resta Pagar:</th>
                              <th>Pago Total:</th>
                              <th>Tipo Pagamento:</th>
                              <th>Vendedor:</th>
                              <th>Observação:</th>
                            </tr>
                            </thead>

                          <?php while ($dados = mysqli_fetch_array($sql)) { ?>

                            <tbody class="table-border-bottom-0"> 
                              <tr>
                            <td> <?php echo  utf8_encode($dados['vem_codigo']); ?> </td> 
                            <td> <?php echo  utf8_encode($dados['cli_nome']) ; ?> </td> 
                            <td> <?php echo  utf8_encode($dados['vem_telefone']); ?> </td>
                            <td> <?php echo  utf8_encode($dados['vem_cpf']); ?> </td>
                            <td> <?php echo  utf8_encode($dados['vem_rua']); ?> </td> 
                            <td> <?php echo  utf8_encode($dados['vem_numero']); ?> </td>
                            <td> <?php echo  utf8_encode($dados['vem_bairro']); ?> </td>  
                            <td> <?php echo  utf8_encode($dados['vem_cidade']); ?> </td>
                            <td> <?php echo  utf8_encode($dados['vem_estado']); ?> </td>
                            <td> <?php echo  utf8_encode($dados['vem_complemento']); ?> </td> 
                            <td> <?php echo  utf8_encode($dados['data']); ?> </td>
                            <td> <?php echo  utf8_encode($dados['data2']); ?> </td> 
                            <td> <?php echo  utf8_encode($dados['data3']); ?> </td> 
                            <td> <?php echo  utf8_encode($dados['pro_codigo']); ?> </td>
                            <td> <?php echo  utf8_encode($dados['vem_produto']); ?> </td>
                            <td> <?php echo  utf8_encode($dados['vem_cor']); ?> </td> 
                            <td> <?php echo  utf8_encode($dados['vem_tipo']); ?> </td> 
                            <td> <?php echo  utf8_encode($dados['vem_tamanho']); ?> </td>
                            <td> <?php echo  utf8_encode($dados['vem_qtde']); ?> </td>
                            <td> <?php echo  utf8_encode($dados['vem_valor']); ?> </td> 
                            <td> <?php echo  utf8_encode($dados['vem_valor_sinal']); ?> </td>
                            <td> <?php echo  utf8_encode($dados['vem_resta_pagar']); ?> </td> 
                            <td> <?php echo  utf8_encode($dados['vem_pago_total']); ?> </td> 
                            <td> <?php echo  utf8_encode($dados['vem_tipo_pagamento']); ?> </td>
                            <td> <?php echo  utf8_encode($dados['ven_nome']); ?> </td>
                            <td> <?php echo  utf8_encode($dados['vem_observacao']); ?> </td>
                            <td>
                      <div class="dropdow">
                      <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                     <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                    <div class="dropdown-menu">
                    <a class="dropdown-item" href="form_atualizar_vendedor.php?ven_codigo=<?php echo $dados['ven_codigo']; ?>">
                    <i class="bx bx-edit-alt me-2"></i> Editar</a
                     >
                     <a class="dropdown-item" href="delete_venda.php?vem_codigo=<?php echo $dados['vem_codigo']; ?>" onclick="excluir_registro(event)">
                    <i class="bx bx-trash me-2"></i> Apagar</a    
                     >
                               </div>
                               <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal" 
                               data-whatever="<?php echo utf8_encode($dados['vem_codigo']); ?>"
                               data-whatevernome="<?php echo utf8_encode ($dados['cli_nome']);  ?>"
                               data-whateverprodutocodigo="<?php echo utf8_encode ($dados['pro_codigo']);  ?>"
                               data-whateverproduto="<?php echo utf8_encode ($dados['vem_produto']); ?>"
                               data-whateverqtde="<?php echo utf8_encode ($dados['vem_qtde']); ?>" 
                               data-whateverrestapagar="<?php echo utf8_encode ($dados['vem_resta_pagar']); ?>"
                               data-whateverpagototal="<?php echo utf8_encode ($dados['vem_pago_total']); ?>"
                               data-whatevertipopagamento="<?php echo utf8_encode ($dados['vem_tipo_pagamento']); ?>" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
  <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
  <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
</svg></button>
                              </div>
                             </td>
                           </tr>
                          </div>
                        </div>
                      <?php } ?>
                    </tbody>
                  </table>
                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" action="" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Venda:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <hr>
      <div class="modal-body">
        <form>
  <div class="row">
                       
                          <div class="mb-3 col-md-6">
                            <label for="txt_codigo" class="form-label">Código:</label>
                            <input class="form-control" type="text" name="txt_codigo"  id="recipient-codigo"/>
                          </div>
                          
                          <div class="mb-3 col-md-6">
                            <label for="txt_nome" class="form-label">Nome:</label>
                            <input class="form-control" type="text" name="txt_codigo"  id="recipient-nome"/>
                          </div>

                          <div class="mb-3 col-md-6">
                            <label for="txt_produto_codigo" class="form-label">#/Produto:</label>
                            <input
                              class="form-control"
                              type="text"
                              id="recipient-produto-codigo"
                              name="txt_produto_codigo"
                             
                            />
                          </div>
  
                          <div class="mb-3 col-md-6">
                            <label for="txt_produto" class="form-label">Produto:</label>
                            <input
                              class="form-control"
                              type="text"
                              id="recipient-produto"
                              name="txt_produto"
                              
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="txt_qtde" class="form-label">Qtde:</label>
                            <input
                              class="form-control"
                              type="text"
                              id="recipient-qtde"
                              name="txt_qtde"
                             
                            />
                          </div>
  
                          <div class="mb-3 col-md-6">
                            <label for="txt_resta_pagar" class="form-label">Resta Pagar:</label>
                            <input
                              class="form-control"
                              type="text"
                              id="recipient-resta-pagar"
                              name="txt_resta_pagar"
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="txt_pago_total" class="form-label">Pago Total:</label>
                            <input
                              class="form-control"
                              type="text"
                              id="recipient-pago-total"
                              name="txt_pago_total"
                             
                            />
                          </div>
  
                          <div class="mb-3 col-md-6">
                            <label for="txt_tipo_pagamento" class="form-label">Tipo Pagamento:</label>
                            <input
                              class="form-control"
                              type="text"
                              id="recipient-tipo-pagamento"
                              name="txt_tipo_pagamento"
                            />
                          </div>

        </form>
      </div>
      </div>
      <hr>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
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
  modal.find('.modal-title').text('Venda de ' + recipientnome)  
  modal.find('#recipient-codigo').val(recipient)
  modal.find('#recipient-nome').val(recipientnome)
  modal.find('#recipient-produto-codigo').val(recipientprodutocodigo)
  modal.find('#recipient-produto').val(recipientproduto)
  modal.find('#recipient-qtde').val(recipientqtde)
  modal.find('#recipient-resta-pagar').val(recipientrestapagar)
  modal.find('#recipient-pago-total').val(recipientpagototal)
  modal.find('#recipient-tipo-pagamento').val(recipienttipopagamento)
})
</script>


</body>
</html>
