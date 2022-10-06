<?php
require_once('../conexao/banco.php');


$id = $_REQUEST['pro_codigo'];

$sql = "select * from tb_produto where pro_codigo = '$id'";
$sql = mysqli_query($con, $sql) or die ("Erro na sql!") ;

$dados = mysqli_fetch_array($sql);

$sql2 = "select * from tb_fornecedor" ;
$sql2 = mysqli_query($con, $sql2) or die ("Erro na sql2!") ;


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

    <title>Atualizar Produto:</title>

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
                <span class="text-muted fw-light">Atualizar/</span>Produto:</h4>
                  
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
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark" aria-label="Third navbar example">
    <div class="container-fluid">
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample03">
        <ul class="navbar-nav me-auto mb-2 mb-sm-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page">Atualizar:</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="consulta_produto.php">Consulta:</a>
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
                      <form id="form_produto" method="POST" action="atualizar_produto.php">
                        <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="txt_foto">Foto:</label>
                            <div class="input-group input-group-merge">
                              <span class="input-group-text"></span>
                              <input
                                type="text"
                                id="txt_foto"
                                name="txt_foto"
                                class="form-control"
                                value="<?php echo $dados['pro_foto']; ?>"
                                style="background-color: whitesmoke"
                                readonly
                              />
                              <img src="<?php echo $dados['pro_foto']; ?>" width="40px" height="40px">
                            </div>
                          </div>

                          <div class="mb-3 col-md-6">
                            <label for="txt_fornecedor" class="form-label">Fornecedor:</label>
                            <select id="txt_fornecedor" name="txt_fornecedor" class="select2 form-select" style="background-color: whitesmoke" >
                            <?php while ($dados = mysqli_fetch_array($sql2)) { ?>
                           <option valeu="<?php echo $dados['for_fantasia']; ?>"> <?php echo utf8_encode($dados['for_fantasia']) ; ?> </option>
                          <?php } ?>
                          </select>
                          
                        </div>
                          <div class="mb-3 col-md-6">
                            <label for="txt_descricao" class="form-label">Descrição:</label>
                            <input class="form-control" value="<?php echo $dados['pro_descricao']; ?>" type="text" name="txt_descricao" id="txt_descricao" style="background-color: whitesmoke" placeholder="Digite o campo Descrição:" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="txt_descricao_add" class="form-label">Descrição/ADD:</label>
                            <input
                              class="form-control"
                              value="<?php echo $dados['pro_descricao_add']; ?>"
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
                              value="<?php echo $dados['pro_custo']; ?>"
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
                              value="<?php echo $dados['pro_indice']; ?>"
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
                              value="<?php echo $dados['pro_valor']; ?>"
                              type="text"
                              id="txt_valor"
                              name="txt_valor"
                              style="background-color: whitesmoke"
                              placeholder="Digite o campo Valor:" 
                              
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="txt_tamanho" class="form-label">Tamanho:</label>
                            <select id="txt_tamanho" name="txt_tamanho" class="select2 form-select"  value="<?php echo $dados['pro_tamanho']; ?>" style="background-color: whitesmoke" >
                            <option value="36" <?php if ($dados['pro_tamanho'] == "36") { echo "selected";} ?>>36</option>
                            <option value="38" <?php if ($dados['pro_tamanho'] == "38") { echo "selected";} ?>>38</option>
                            <option value="40" <?php if ($dados['pro_tamanho'] == "40") { echo "selected";} ?>>40</option>
                            <option value="42" <?php if ($dados['pro_tamanho'] == "42") { echo "selected";} ?>>42</option>
                            <option value="46" <?php if ($dados['pro_tamanho'] == "46") { echo "selected";} ?>>46</option>
                            <option value="48" <?php if ($dados['pro_tamanho'] == "48") { echo "selected";} ?>>48</option>
                            <option value="50" <?php if ($dados['pro_tamanho'] == "50") { echo "selected";} ?>>50</option>
                            <option value="52" <?php if ($dados['pro_tamanho'] == "52") { echo "selected";} ?>>52</option>
                            <option value="PP" <?php if ($dados['pro_tamanho'] == "PP") { echo "selected";} ?>>PP</option>
                            <option value="P" <?php if ($dados['pro_tamanho'] == "P") { echo "selected";} ?>>P</option>
                            <option value="M" <?php if ($dados['pro_tamanho'] == "M") { echo "selected";} ?>>M</option>
                            <option value="G" <?php if ($dados['pro_tamanho'] == "G") { echo "selected";} ?>>G</option>
                            <option value="GG" <?php if ($dados['pro_tamanho'] == "GG") { echo "selected";} ?>>GG</option>
                            <option value="UN" <?php if ($dados['pro_tamanho'] == "UN") { echo "selected";} ?>>UN</option> 
                          </select>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="txt_aluguel" class="form-label">Aluguel:</label>
                            <select id="txt_aluguel" name="txt_aluguel" class="select2 form-select" value="<?php echo $dados['pro_aluguel']; ?>" style="background-color: whitesmoke" >
                            <option value="Sim" <?php if ($dados['pro_aluguel'] == "Sim") { echo "selected";} ?>> Sim </option>
                            <option value="Não" <?php if ($dados['pro_aluguel'] == "Não") { echo "selected";} ?>> Não </option>
                          </select>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="txt_qtde" class="form-label">QTDE:</label>
                            <input class="form-control" value="<?php echo $dados['pro_qtde']; ?>" type="text" name="txt_qtde" id="txt_qtde" style="background-color: whitesmoke" placeholder="Digite o campo Quantidade:" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="txt_cor" class="form-label">Cor:</label>
                            <select id="txt_cor" name="txt_cor" class="select2 form-select"  value="<?php echo $dados['pro_cor']; ?>" style="background-color: whitesmoke">
                            <option value="VERMELHO" <?php if ($dados['pro_cor'] == "VERMELHO") { echo "selected";} ?>>VERMELHO</option>
                            <option value="AZUL" <?php if ($dados['pro_cor'] == "AZUL") { echo "selected";} ?>>AZUL</option>
                            <option value="AMARELO" <?php if ($dados['pro_cor'] == "AMARELO") { echo "selected";} ?>>AMARELO</option>
                            <option value="VERDE" <?php if ($dados['pro_cor'] == "VERDE") { echo "selected";} ?>>VERDE</option>
                            <option value="DOURADO" <?php if ($dados['pro_cor'] == "DOURADO") { echo "selected";} ?>>DOURADO</option>
                            <option value="PRATA" <?php if ($dados['pro_cor'] == "PRATA") { echo "selected";} ?>>PRATA</option>
                            <option value="SERENITY" <?php if ($dados['pro_cor'] == "SERENITY") { echo "selected";} ?>>SERENITY</option>
                            <option value="TIFANY" <?php if ($dados['pro_cor'] == "TIFANY") { echo "selected";} ?>>TIFANY</option>
                            <option value="TERRACOTA" <?php if ($dados['pro_cor'] == "MARSALA") { echo "selected";} ?>>MARSALA</option>
                            <option value="BRANCO" <?php if ($dados['pro_cor'] == "BRANCO") { echo "selected";} ?>>BRANCO</option>
                            <option value="ROSE" <?php if ($dados['pro_cor'] == "ROSE") { echo "selected";} ?>>ROSE</option>
                            <option value="MARINHO" <?php if ($dados['pro_cor'] == "MARINHO") { echo "selected";} ?>>MARINHO</option>
                            <option value="FIGO" <?php if ($dados['pro_cor'] == "FIGO") { echo "selected";} ?>>FIGO</option>
                            <option value="LILAS" <?php if ($dados['pro_cor'] == "LILAS") { echo "selected";} ?>>LILAS</option>
                            <option value="ROXO" <?php if ($dados['pro_cor'] == "ROXO") { echo "selected";} ?>>ROXO</option>
                            <option value="SALMÃO" <?php if ($dados['pro_cor'] == "SALMÃO") { echo "selected";} ?>>SALMÃO</option>
                            <option value="PRETO" <?php if ($dados['pro_cor'] == "PRETO") { echo "selected";} ?>>PRETO</option>
                            <option value="PETROLEO" <?php if ($dados['pro_cor'] == "PETROLEO") { echo "selected";} ?>>PETROLEO</option>
                            <option value="GELO" <?php if ($dados['pro_cor'] == "GELO") { echo "selected";} ?>>GELO</option>
                            <option value="PINK" <?php if ($dados['pro_cor'] == "PINK") { echo "selected";} ?>>PINK</option>
                            <option value="CINZA" <?php if ($dados['pro_cor'] == "CINZA") { echo "selected";} ?>>CINZA</option>
                            <option value="NUDE/AZUL" <?php if ($dados['pro_cor'] == "NUDE/AZUL") { echo "selected";} ?>>NUDE/AZUL</option>
                            <option value="HOLOGRAFICO" <?php if ($dados['pro_cor'] == "HOLOGRAFICO") { echo "selected";} ?>>HOLOGRAFICO</option>
                            <option value="LARANJA" <?php if ($dados['pro_cor'] == "LARANJA") { echo "selected";} ?>>LARANJA</option>
                            <option value="ROYAL"<?php if ($dados['pro_cor'] == "ROYAL") { echo "selected";} ?>>ROYAL</option>
                            <option value="FUCHSIA" <?php if ($dados['pro_cor'] == "FUCHSIA") { echo "selected";} ?>>FUCHSIA</option>
                            <option value="ROSA" <?php if ($dados['pro_cor'] == "ROSA") { echo "selected";} ?>>ROSA</option>
                            <option value="VERDE" <?php if ($dados['pro_cor'] == "VERDE") { echo "selected";} ?>>VERDE</option>
                            <option value="MENTA" <?php if ($dados['pro_cor'] == "MENTA") { echo "selected";} ?>>MENTA</option>
                            <option value="PESSEGO" <?php if ($dados['pro_cor'] == "PESSEGO") { echo "selected";} ?>>PESSEGO</option>
                            <option value="CHUMBO" <?php if ($dados['pro_cor'] == "CHUMBO") { echo "selected";} ?>>CHUMBO</option>
                            <option value="MNUDE/VERDE" <?php if ($dados['pro_cor'] == "NUDE/VERDE") { echo "selected";} ?>>NUDE/VERDE</option>
                            <option value="MARROM" <?php if ($dados['pro_cor'] == "MARROM") { echo "selected";} ?>>MARROM</option>
                            <option value="NUDE" <?php if ($dados['pro_cor'] == "NUDE") { echo "selected";} ?>>NUDE</option>
                            <option value="CORAL" <?php if ($dados['pro_cor'] == "CORAL") { echo "selected";} ?>>CORAL</option>
                            <option value="ESMERALDA" <?php if ($dados['pro_cor'] == "ESMERALDA") { echo "selected";} ?>>ESMERALDA</option>
                          </select>
                          </div>
                          
                          <div class="mb-3 col-md-6">
                            <label for="txt_status" class="form-label">Status:</label>
                            <select id="txt_status" name="txt_status" class="select2 form-select"  value="<?php echo $dados['pro_status']; ?>" style="background-color: whitesmoke" >
                            <option value="A" <?php if ($dados['pro_status'] == "A") { echo "selected";} ?>> Ativo </option>
                            <option value="I" <?php if ($dados['pro_status'] == "I") { echo "selected";} ?>> Inativo </option>
                          </select>
                          </div>
                          
                          
                          
                          <div class="mb-3 col-md-6">
                            <label for="txt_tipo" class="form-label">Tipo:</label>
                            <select id="txt_tipo" name="txt_tipo" class="select2 form-select"  value="<?php echo $dados['pro_tipo']; ?>" style="background-color: whitesmoke" >
                            <option value="Longo">Longo</option>
                            <option value="Curto">Curto</option>
                            <option value="Midi">Midi</option>
                          </select>
                          </div>
                          

                          <div class="mb-3 col-md-6">
                            <label for="txt_data_cadastro" class="form-label">Data/Cadastro:</label>
                            <input
                              class="form-control"
                              value="<?php echo $dados['pro_data_cadastro']; ?>"
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
  </body>
</html>
