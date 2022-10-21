<?PHP
require_once('../conexao/banco.php');

$cons_codigo = isset($_REQUEST['txt_cons_codigo']) ? $_REQUEST['txt_cons_codigo'] : '';


if(!empty($_GET['search']))
{
 $data = $_GET['search'];
 $sql = "SELECT * FROM tb_aluguel WHERE alu_codigo LIKE '%$data%'  ORDER BY alu_codigo DESC";
}
if(!empty($_GET['search']))
{
 $data = $_GET['search'];
 $sql = "SELECT * FROM tb_aluguel WHERE alu_status LIKE '%$data%'  ORDER BY alu_codigo DESC";
}
else
{
  $sql = "select *, date_format(alu_data_inicial,'%d/%m/%Y') as alu_data_inicial, date_format(alu_evento,'%d/%m/%Y') as alu_evento,
  date_format(alu_data_compra,'%d/%m/%Y') as alu_data_compra, date_format(alu_data_final,'%d/%m/%Y') as alu_data_final

  from tb_aluguel
        where alu_codigo like '%".$cons_codigo."%'
       ";
       
}



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

    <title>Consulta | Aluguel</title>

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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
  

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
    background: blue;
    color: #ffffff;
    cursor: pointer;
}

.bi{
color: black;
}


      </style>


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
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                <span class="text-muted fw-light">Aluguel/</span> Consulta
                  
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                <li class="nav-item lh-1 me-3">
                </li>

                <!-- User -->
                <?php include("includeUSER.php"); ?>
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
            <div class="db-wrap" onclick="javascript:LoadPage('add')" onmouseover="javascript:OverDB(this, 5)" onmouseout="javascript:OutDB(this)"  style="background-color: whitesmoke;">
			
			<a href="checar_aluguel.php">
				<h4 class="no-margin pull-left">| Checar:</h4>
			 
			</a>
      
			<div class="clearfix"></div>
		
						
			<div class="back-color-5" style="position:absolute;bottom:0px;left:0px;width:100%;height:7px"></div>
		</div>

              <div class="row">
                <div class="col-md-12">
                  
                
                    <!-- Notifications -->
                    <div class="card">
                    <button class="dt-button create-new btn btn-primary" data-toggle="modal" data-target="#exampleModal3" tabindex="0"  type="button"><span><i class="bx bx-plus me-2"></i> <span class="d-none d-lg-inline-block"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Adicionar novo registro</font></font></span></span></button>
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
        

        </ul>
        
        <div class="box-search"  style="padding-right: 10px;">
          <input class="form-control" type="search" id="pesquisa_status" placeholder="Pesquisar:" aria-label="Search">
          </div>
         
          <div class="box-search"  style="padding-right: 5px;">
          <select id="pesquisa" class="select2 form-select">
          <option value=""></option>
          <option value="DEVOLVIDO">DEVOLVIDO</option>
          <option value="RESERVADO">RESERVADO</option>
          <option value="LOCADO">LOCADO</option>
      </select>
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
                              <th>#:</th>
                              <th>Nome: </th>
                              <th>Telefone: </th>
                              <th>CPF: </th>
                              <th>Data/Inicial: </th>
                              <th>Data/Final: </th>
                              <th>Código/Produto: </th>
                              <th>Descrição: </th>
                              <th>QTDE: </th>
                              <th>Valor: </th>
                              <th>Valor Sinal: </th>
                              <th>Resta Pagar: </th>
                              <th>Pago Total: </th>
                              <th>Tipo Pagamento: </th>
                              <th>Vendedor: </th>
                              <th>Observação: </th>
                              <th>Status:</th>
                            </tr>
                            </thead>

                          <?php while ($dados = mysqli_fetch_array($sql)) { ?>

                            <tbody class="table-border-bottom-0"> 
                              <tr>
                            <td> <?php echo $dados['alu_codigo']; ?> </td> 
                            <td> <?php echo $dados['cli_nome']; ?> </td> 
                            <td> <?php echo $dados['cli_telefone']; ?> </td>
                            <td> <?php echo $dados['cli_cpf']; ?> </td>
                            <td> <?php echo $dados['alu_data_inicial']; ?> </td>
                            <td> <?php echo $dados['alu_data_final']; ?> </td>
                            <td> <?php echo $dados['pro_codigo']; ?> </td>
                            <td> <?php echo $dados['pro_descricao']; ?> </td>
                            <td> <?php echo $dados['alu_qtde']; ?> </td>
                            <td> <?php echo "R$" . number_format($dados['alu_valor'], 2, "," , "."); ?> </td> 
                            <td> <?php echo "R$" . number_format($dados['alu_valor_sinal'], 2, "," , "."); ?> </td> 
                            <td> <?php echo "R$" . number_format($dados['alu_resta_pagar'], 2, "," , "."); ?> </td> 
                            <td> <?php echo $dados['alu_pago_total']; ?> </td> 
                            <td> <?php echo $dados['alu_tipo_pagamento']; ?> </td>
                            <td> <?php echo $dados['ven_nome']; ?> </td>
                            <td> <?php echo $dados['alu_observacao']; ?> </td>
                            <td> <?php echo $dados['alu_status']; ?> </td>

                            
                            <td>
                               </div>
          <a class="buttom" href="testePDF.php?alu_codigo=<?php echo $dados['alu_codigo']; ?>">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="red" class="bi bi-file-earmark-pdf-fill" viewBox="0 0 16 16">
  <path d="M5.523 12.424c.14-.082.293-.162.459-.238a7.878 7.878 0 0 1-.45.606c-.28.337-.498.516-.635.572a.266.266 0 0 1-.035.012.282.282 0 0 1-.026-.044c-.056-.11-.054-.216.04-.36.106-.165.319-.354.647-.548zm2.455-1.647c-.119.025-.237.05-.356.078a21.148 21.148 0 0 0 .5-1.05 12.045 12.045 0 0 0 .51.858c-.217.032-.436.07-.654.114zm2.525.939a3.881 3.881 0 0 1-.435-.41c.228.005.434.022.612.054.317.057.466.147.518.209a.095.095 0 0 1 .026.064.436.436 0 0 1-.06.2.307.307 0 0 1-.094.124.107.107 0 0 1-.069.015c-.09-.003-.258-.066-.498-.256zM8.278 6.97c-.04.244-.108.524-.2.829a4.86 4.86 0 0 1-.089-.346c-.076-.353-.087-.63-.046-.822.038-.177.11-.248.196-.283a.517.517 0 0 1 .145-.04c.013.03.028.092.032.198.005.122-.007.277-.038.465z"/>
  <path fill-rule="evenodd" d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3zM4.165 13.668c.09.18.23.343.438.419.207.075.412.04.58-.03.318-.13.635-.436.926-.786.333-.401.683-.927 1.021-1.51a11.651 11.651 0 0 1 1.997-.406c.3.383.61.713.91.95.28.22.603.403.934.417a.856.856 0 0 0 .51-.138c.155-.101.27-.247.354-.416.09-.181.145-.37.138-.563a.844.844 0 0 0-.2-.518c-.226-.27-.596-.4-.96-.465a5.76 5.76 0 0 0-1.335-.05 10.954 10.954 0 0 1-.98-1.686c.25-.66.437-1.284.52-1.794.036-.218.055-.426.048-.614a1.238 1.238 0 0 0-.127-.538.7.7 0 0 0-.477-.365c-.202-.043-.41 0-.601.077-.377.15-.576.47-.651.823-.073.34-.04.736.046 1.136.088.406.238.848.43 1.295a19.697 19.697 0 0 1-1.062 2.227 7.662 7.662 0 0 0-1.482.645c-.37.22-.699.48-.897.787-.21.326-.275.714-.08 1.103z"/>
</svg></a>



                               <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal" 
                               data-whatever="<?php echo $dados['alu_codigo']; ?>"
                               data-whatevertelefone="<?php echo $dados['alu_telefone'];  ?>"
                               data-whatevercpf="<?php echo $dados['alu_cpf'];  ?>"
                               data-whateverrua="<?php echo $dados['alu_rua']; ?>"
                               data-whatevernumero="<?php echo $dados['alu_numero']; ?>" 
                               data-whateverbairro="<?php echo $dados['alu_bairro']; ?>"
                               data-whatevercidade="<?php echo $dados['alu_cidade']; ?>"
                               data-whateverestado="<?php echo $dados['alu_estado']; ?>"
                               data-whatevercomplemento="<?php echo $dados['alu_complemento']; ?>"
                               data-whateverdatainicial="<?php echo $dados['alu_data_inicial'];  ?>"
                               data-whateverevento="<?php echo $dados['alu_evento'];  ?>"
                               data-whateverdatacompra="<?php echo $dados['alu_data_compra']; ?>"
                               data-whateverdatafinal="<?php echo $dados['alu_data_final']; ?>" 
                               data-whatevercodigoproduto="<?php echo $dados['pro_codigo']; ?>"
                               data-whateverdescricao="<?php echo $dados['alu_descricao']; ?>"
                               data-whateverproduto="<?php echo $dados['alu_produto']; ?>"
                               data-whatevercor="<?php echo $dados['alu_cor']; ?>"
                               data-whatevertipo="<?php echo $dados['alu_tipo']; ?>"
                               data-whatevertamanho="<?php echo $dados['alu_tamanho'];  ?>"
                               data-whateverqtde="<?php echo $dados['alu_qtde'];  ?>"
                               data-whatevervalor="<?php echo $dados['alu_valor']; ?>"
                               data-whatevervalorsinal="<?php echo $dados['alu_valor_sinal']; ?>" 
                               data-whateverrestapagar="<?php echo $dados['alu_resta_pagar']; ?>"
                               data-whateverpagototal="<?php echo $dados['alu_pago_total']; ?>"
                               data-whatevertipopagamento="<?php echo $dados['alu_tipo_pagamento']; ?>"
                               data-whatevervendedor="<?php echo $dados['ven_nome'];  ?>"
                               data-whateverobservacao="<?php echo $dados['alu_observacao']; ?>"
                               data-whateverstatus="<?php echo $dados['alu_status']; ?>" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
  <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
</svg></button>



  <a type="button" class="btn btn-secondary"  href="delete_aluguel.php?alu_codigo=<?php echo $dados['alu_codigo']; ?>" onclick="excluir_registro(event)"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-trash-fill" viewBox="0 0 16 16">
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
                  
<!--- Fim do primeiro modal edit --->    


   <!-- Fim do Modal Detalhes -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>

   <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  <script
  src="https://code.jquery.com/jquery-3.6.1.min.js"
  integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
  <script type="text/javascript">
$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever')
  var recipientnome = button.data('whatevernome')
  var recipienttelefone = button.data('whatevertelefone')
  var recipientcpf = button.data('whatevercpf')
  var recipientrua = button.data('whateverrua')
  var recipientnumero = button.data('whatevernumero')
  var recipientbairro = button.data('whateverbairro')
  var recipientcidade = button.data('whatevercidade')
  var recipientestado = button.data('whateverestado')
  var recipientcomplemento = button.data('whatevercomplemento')
  var recipientdatainicial = button.data('whateverdatainicial')
  var recipientevento = button.data('whateverevento')
  var recipientdatacompra = button.data('whateverdatacompra')
  var recipientdatafinal = button.data('whateverdatafinal')
  var recipientcodigoproduto = button.data('whatevercodigoproduto')
  var recipientdescricao = button.data('whateverdescricao')
  var recipientproduto = button.data('whateverproduto')
  var recipientcor = button.data('whatevercor')
  var recipienttipo = button.data('whatevertipo')
  var recipienttamanho = button.data('whatevertamanho')
  var recipientqtde = button.data('whateverqtde')
  var recipientvalor = button.data('whatevervalor')
  var recipientvalorsinal = button.data('whatevervalorsinal')
  var recipientrestapagar = button.data('whateverrestapagar')
  var recipientpagototal = button.data('whateverpagototal')
  var recipienttipopagamento = button.data('whatevertipopagamento')
  var recipientvendedor = button.data('whatevervendedor')
  var recipienttobservacao = button.data('whateverobservacao')
  var recipientstatus = button.data('whateverstatus')// Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('Editar de ' + recipientnome)  
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

<script>

var search = document.getElementById('pesquisa');
var searchstatus = document.getElementById('pesquisa_status');

search.addEventListener("keydown", function(event){
  if (event.key === "Enter")
  {
    searchData();
  }
});

function searchData()
{
   window.location = 'consulta_aluguel.php?search='+search.value; 
}


</script>

  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

  </body>
</html>
