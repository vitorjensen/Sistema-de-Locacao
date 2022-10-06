<?PHP
require_once('../conexao/banco.php');

$sql = "select * from tb_fornecedor";
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
<link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>

    <title>Novo Produto:</title>

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
   .js-data-example-ajax{
    display: block;
    width: 100%;
    padding: 0.4375rem 0.875rem;
    font-size: 0.9375rem;
    font-weight: 400;
    line-height: 1.53;
    color: #697a8d;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #d9dee3;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 0.375rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
      </style>



    <script language="JavaScript">
	
 function mascara(t, mask){

 var i = t.value.length;
 var saida = mask.substring(1,0);
 var texto = mask.substring(i)
 
  if (texto.substring(0,1) != saida){
      t.value += texto.substring(0,1);
  }

 }

 function foco() {
	document.frm_fornecedor.txt_nome.focus()
}

</script>
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
                <span class="text-muted fw-light">Cadastrar/</span>Produto:</h4>
                  
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
            <a class="nav-link" href="consulta_produto.php">Consulta:</a>
          </li>
          <li class="nav-item dropdown">
            <a></a>
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
                      <form id="frm_produto" method="POST" action="cadastrar_produto.php" enctype="multipart/form-data">
                        <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="txt_arquivo">Foto:</label>
                            <div class="input-group input-group-merge">
                              <span class="input-group-text"></span>
                              <input
                                type="file"
                                id="txt_arquivo"
                                name="txt_arquivo"
                                class="form-control"
                                style="background-color: whitesmoke"
                              />
                            </div>
                            <!--<span class="erro">Por favor, insira a foto.</span>!-->
                          </div>

                          <div class="mb-3 col-md-6">
                            <label for="txt_fornecedor" class="form-label">Fornecedor:</label>
                            <select id="txt_fornecedor" name="txt_fornecedor" class="js-data-example-ajax" style="background-color: whitesmoke" >
                            <option value="Selecione...">Selecione...</option>
                            <?php while ($dados = mysqli_fetch_array($sql)) { ?>
                           <option value="<?php echo $dados['for_fantasia']; ?>"> <?php echo utf8_encode($dados['for_fantasia']) ; ?> </option>
                          <?php } ?>
                          </select>
                          
                        </div>
                          <div class="mb-3 col-md-6">
                            <label for="txt_descricao" class="form-label">Descrição:</label>
                            <input class="form-control" type="text" name="txt_descricao" id="txt_descricao" style="background-color: whitesmoke" placeholder="Digite o campo Descrição:" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="txt_descricao_add" class="form-label">Descrição/ADD:</label>
                            <input
                              class="form-control"
                              type="text"
                              id="txt_descricao_add"
                              name="txt_descricao_add"
                              style="background-color: whitesmoke"
                              placeholder="Digite o campo Descrição/ADD:" 
                            />
                          </div>

                          <div class="mb-3 col-md-6">
                            <label for="txt_custo" class="form-label">Custo:</label>
                            <input
                              class="form-control"
                              type="text"
                              id="txt_custo"
                              name="txt_custo"
                              style="background-color: whitesmoke"
                              placeholder="Digite no campo Custo:" 
                              
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="txt_indice" class="form-label">Indice:</label>
                            <input
                              class="form-control"
                              type="text"
                              id="txt_indice"
                              name="txt_indice"
                              style="background-color: whitesmoke"
                              placeholder="Digite o campo Indice:" 
                              
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="txt_valor" class="form-label">Valor:</label>
                            <input
                              class="form-control"
                              type="text"
                              id="txt_valor"
                              name="txt_valor"
                              style="background-color: whitesmoke"
                              placeholder="Digite o campo Valor:" 
                              
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="txt_tamanho" class="form-label">Tamanho:</label>
                            <select id="txt_tamanho" name="txt_tamanho" class="select2 form-select" style="background-color: whitesmoke" >
                            <option value="Selecione...">Selecione...</option>
                            <option value="36">36</option>
                            <option value="38">38</option>
                            <option value="40">40</option>
                            <option value="42">42</option>
                            <option value="42">44</option>
                            <option value="46">46</option>
                            <option value="48">48</option>
                            <option value="50">50</option>
                            <option value="52">52</option>
                            <option value="PP">PP</option>
                            <option value="P">P</option>
                            <option value="M">M</option>
                            <option value="G">G</option>
                            <option value="GG">GG</option>
                            <option value="UN">UN</option> 
                          </select>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="txt_aluguel" class="form-label">Aluguel:</label>
                            <select id="txt_aluguel" name="txt_aluguel" class="select2 form-select" style="background-color: whitesmoke" >
                            <option value="Selecione...">Selecione...</option>
                            <option value="Sim">Sim</option>
                            <option value="Não">Não</option>
                          </select>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="txt_qtde" class="form-label">QTDE:</label>
                            <input class="form-control" type="text" name="txt_qtde" id="txt_qtde" style="background-color: whitesmoke" placeholder="Digite o campo Quantidade:" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="txt_cor" class="form-label">Cor:</label>
                            <select id="txt_cor" name="txt_cor" class="select2 form-select" style="background-color: whitesmoke">
                            <option value="Selecione...">Selecione...</option>
                            <option value="VERMELHO">VERMELHO</option>
                            <option value="AZUL">AZUL</option>
                            <option value="AMARELO">AMARELO</option>
                            <option value="VERDE">VERDE</option>
                            <option value="DOURADO">DOURADO</option>
                            <option value="PRATA">PRATA</option>
                            <option value="SERENITY">SERENITY</option>
                            <option value="TIFANY">TIFANY</option>
                            <option value="TERRACOTA">TERRACOTA</option>
                            <option value="MARSALA">MARSALA</option>
                            <option value="BRANCO">BRANCO</option>
                            <option value="ROSE">ROSE</option>
                            <option value="MARINHO">MARINHO</option>
                            <option value="FIGO">FIGO</option>
                            <option value="LILAS">LILAS</option>
                            <option value="ROXO">ROXO</option>
                            <option value="SALMÃO">SALMÃO</option>
                            <option value="PRETO">PRETO</option>
                            <option value="PETROLEO">PETROLEO</option>
                            <option value="GELO">GELO</option>
                            <option value="PINK">PINK</option>
                            <option value="CINZA">CINZA</option>
                            <option value="NUDE/AZUL">NUDE/AZUL</option>
                            <option value="HOLOGRAFICO">HOLOGRAFICO</option>
                            <option value="LARANJA">LARANJA</option>
                            <option value="ROYAL">ROYAL</option>
                            <option value="FUCHSIA">FUCHSIA</option>
                            <option value="ROSA">ROSA</option>
                            <option value="VERDE">VERDE</option>
                            <option value="MENTA">MENTA</option>
                            <option value="PESSEGO">PESSEGO</option>
                            <option value="CHUMBO">CHUMBO</option>
                            <option value="MNUDE/VERDE">NUDE/VERDE</option>
                            <option value="MARROM">MARROM</option>
                            <option value="NUDE">NUDE</option>
                            <option value="CORAL">CORAL</option>
                            <option value="ESMERALDA">ESMERALDA</option>
                          </select>
                          </div>
                          
                          <div class="mb-3 col-md-6">
                            <label for="txt_status" class="form-label">Status:</label>
                            <select id="txt_status" name="txt_status" class="select2 form-select" style="background-color: whitesmoke" >
                            <option value="Selecione...">Selecione...</option>
                            <option value="Ativo">Ativo</option>
                            <option value="Inativo">Inativo</option>
                          </select>
                          </div>
                          
                          
                          
                          <div class="mb-3 col-md-6">
                            <label for="txt_tipo" class="form-label">Tipo:</label>
                            <select id="txt_tipo" name="txt_tipo" class="select2 form-select" style="background-color: whitesmoke" >
                            <option value="Selecione...">Selecione...</option>
                            <option value="Longo">Longo</option>
                            <option value="Curto">Curto</option>
                            <option value="Midi">Midi</option>
                          </select>
                          </div>
                          

                          <div class="mb-3 col-md-6">
                            <label for="txt_data_cadastro" class="form-label">Data/Cadastro:</label>
                            <input
                              class="form-control"
                              type="date"
                              id="txt_data_cadastro"
                              name="txt_data_cadastro"
                              style="background-color: whitesmoke"
                              placeholder="Selecione o campo Data/Cadastro:" 
                              
                            />
                          </div>
                        <div class="mt-2">
                          <button type="submit" class="btn btn-primary me-2" onclick="return validar_dados()">Cadastrar</button>
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
    
    
    <script type="text/javascript">
    $(".js-data-example-ajax").select2({
  ajax: {
    url: "https://api.github.com/search/repositories",
    dataType: 'json',
    delay: 250,
    data: function (params) {
      return {
        q: params.term, // search term
        page: params.page
      };
    },
    processResults: function (data, page) {
      // parse the results into the format expected by Select2.
      // since we are using custom formatting functions we do not need to
      // alter the remote JSON data
      return {
        results: data.items
      };
    },
    cache: true
  },
  escapeMarkup: function (markup) { return markup; }, // let our custom formatter work
  minimumInputLength: 1,
  templateResult: formatRepo, // omitted for brevity, see the source of this page
  templateSelection: formatRepoSelection // omitted for brevity, see the source of this page
});
</script>
  </body>
</html>
