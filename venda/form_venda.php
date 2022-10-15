<?PHP

require_once('../conexao/banco.php');

$sql = "select * from tb_produto";
$sql = mysqli_query($con, $sql) or die ("Erro na sql!") ;

$sql2 = "select * from tb_vendedor";
$sql2 = mysqli_query($con, $sql2) or die ("Erro na sql!") ;

$sql3 = "select * from tb_cliente";
$sql3 = mysqli_query($con, $sql3) or die ("Erro na sql!") ;

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

    <title>Nova Venda:</title>

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
                <span class="text-muted fw-light">Cadastrar/</span>Venda:</h4>
                  
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
    <nav class="navbar navbar-expand-sm navbar-dark " aria-label="Third navbar example" style="background-color: lightgray">
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
            <a class="nav-link" href="consulta_venda.php">Consulta:</a>
          </li>
        </ul>
      
      </div>
    </div>
  </nav>
                    <hr class="my-0" />
                    <div class="card-body">
                      <form id="form_venda" method="POST" action="cadastrar_venda.php">
                        <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="txt_nome" class="form-label">Nome:</label>
                            <select id="txt_nome" name="txt_nome" class="js-data-example-ajax" style="background-color: whitesmoke" >
                            <option value="Selecione...">Selecione...</option>
                            <?php while ($dados = mysqli_fetch_array($sql3)) { ?>
                           <option value="<?php echo $dados['cli_nome']; ?>"> <?php echo utf8_encode($dados['cli_nome']) ; ?> </option>
                          <?php } ?>
                          </select>
                          
                        </div>
                          <div class="mb-3 col-md-6">
                            <label for="txt_telefone" class="form-label">Telefone:</label>
                            <input class="form-control" type="text" name="txt_telefone" onkeypress="mascara(this, '## #####-####')" maxlength="13" id="txt_telefone" placeholder="Digite o campo Telefone:"/>
                          </div>
                          
                          <div class="mb-3 col-md-6">
                            <label for="txt_cpf" class="form-label">CPF:</label>
                            <input
                              class="form-control"
                              onkeypress="mascara(this, '###.###.###/##')" maxlength="14"
                              type="text"
                              id="txt_cpf"
                              name="txt_cpf"
                              placeholder="Digite o campo CPF:" 
                            />
                          </div>

                          <div class="mb-3 col-md-6">
                            <label for="txt_rua" class="form-label">Rua:</label>
                            <input
                              class="form-control"
                              type="text"
                              id="txt_rua"
                              name="txt_rua"
                              placeholder="Digite no campo Rua:" 
                            />
                          </div>
  
                          <div class="mb-3 col-md-6">
                            <label for="txt_numero" class="form-label">Número:</label>
                            <input
                              class="form-control"
                              type="text"
                              id="txt_numero"
                              name="txt_numero"
                              placeholder="Digite o campo Número:" 
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="txt_bairro" class="form-label">Bairro:</label>
                            <input
                              class="form-control"
                              type="text"
                              id="txt_bairro"
                              name="txt_bairro"
                              placeholder="Digite o campo Bairro:" 
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="txt_cidade" class="form-label">Cidade:</label>
                            <input
                              class="form-control"
                              type="text"
                              id="txt_cidade"
                              name="txt_cidade"
                              placeholder="Digite o campo Cidade:" 
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="txt_estado" class="form-label">Estado:</label>
                            <select id="txt_estado" name="txt_estado" class="select2 form-select">
                            <option value="Selecione...">Selecione...</option>
                            <option value="AC">AC</option>
                            <option value="AL">AL</option>
                            <option value="AP">AP</option>
                            <option value="AM">AM</option>
                            <option value="BA">BA</option>
                            <option value="CE">CE</option>
                            <option value="ES">ES</option>
                            <option value="GO">GO</option>
                            <option value="MA">MA</option>
                            <option value="MT">MT</option>
                            <option value="MS">MS</option>
                            <option value="MG">MG</option>
                            <option value="PA">PA</option>
                            <option value="PB">PB</option>
                            <option value="PR">PR</option>
                            <option value="PE">PE</option>
                            <option value="PI">PI</option>
                            <option value="RJ">RJ</option>
                            <option value="RN">RN</option>
                            <option value="RS">RS</option>
                            <option value="RO">RO</option>
                            <option value="RR">RR</option>
                            <option value="SC">SC</option>
                            <option value="SP">SP</option>
                            <option value="SE">SE</option>
                            <option value="TO">TO</option>
                            <option value="DF">DF</option>
                          </select>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="txt_complemento" class="form-label">Complemento:</label>
                            <input
                              class="form-control"
                              type="text"
                              id="txt_complemento"
                              name="txt_complemento"
                              placeholder="Digite o campo Complemento:"
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="txt_data_inicial" class="form-label">Data/inicial:</label>
                            <input
                              class="form-control"
                              type="date"
                              id="txt_data_inicial"
                              name="txt_data_inicial"
                              placeholder="Digite o campo Data Inicial:"
                              style="background-color: whitesmoke"
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="txt_evento" class="form-label">Evento:</label>
                            <input
                              class="form-control"
                              type="date"
                              id="txt_evento"
                              name="txt_evento"
                              placeholder="Digite o campo Data do Evento:"
                              style="background-color: whitesmoke"
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="txt_data_compra" class="form-label">Data/Compra:</label>
                            <input
                              class="form-control"
                              type="date"
                              id="txt_data_compra"
                              name="txt_data_compra"
                              placeholder="Digite o campo Data de Compra:"
                              style="background-color: whitesmoke"
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="txt_codigo_produto" class="form-label">Código/Produto:</label>
                            <select id="txt_codigo_produto" name="txt_codigo_produto" class="js-data-example-ajax" style="background-color: whitesmoke">
                            <option value="Selecione...">Selecione...</option>
                            <?php while ($dados = mysqli_fetch_array($sql)) { ?>
                           <option valeu="<?php echo $dados['pro_codigo']; ?>"> <?php echo utf8_encode($dados['pro_codigo']) ; ?> </option>
                           <?php } ?>
                          </select>
                          </div>

                          <div class="mb-3 col-md-6">
                            <label for="txt_descricao" class="form-label">Descrição:</label>
                            <input
                              class="form-control"
                              type="text"
                              id="txt_descricao"
                              name="txt_descricao"
                              style="background-color: whitesmoke"
                              placeholder="Digite o campo Descrição:"
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="txt_produto" class="form-label">Produto:</label>
                            <select id="txt_produto" name="txt_produto" class="select2 form-select" style="background-color: whitesmoke">
                            <option value="Selecione...">Selecione...</option>
                            <option value="Vestido">Vestido</option>
                            <option value="Estóla">Estóla</option>
                            <option value="Pashmina">Pashmina</option>
                            <option value="Brinco">Brinco</option>
                            <option value="Clutch">Clutch</option>
                            <option value="Colar">Colar</option>
                            <option value="Anel">Anel</option>
                          </select>
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
                            <label for="txt_tipo" class="form-label">Tipo:</label>
                            <select id="txt_tipo" name="txt_tipo" class="select2 form-select" style="background-color: whitesmoke">
                            <option value="Selecione...">Selecione...</option>
                            <option value="Longo">Longo</option>
                            <option value="Curto">Curto</option>
                            <option value="Midi">Midi</option>
                          </select>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="txt_tamanho" class="form-label">Tamanho:</label>
                            <select id="txt_tamanho" name="txt_tamanho" class="select2 form-select" style="background-color: whitesmoke">
                            <option value="Selecione...">Selecione...</option>
                            <option value="38">38</option>
                            <option value="40">40</option>
                            <option value="42">42</option>
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
                            <label for="txt_qtde" class="form-label">QTDE:</label>
                            <input
                              class="form-control"
                              type="text"
                              id="txt_qtde"
                              name="txt_qtde"
                              maxlength="12"
                              style="background-color: whitesmoke"
                              placeholder="Digite o campo Quantidade:"
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
                            <label for="txt_valor_sinal" class="form-label">Valor Sinal:</label>
                            <input
                              class="form-control"
                              type="text"
                              id="txt_valor_sinal"
                              name="txt_valor_sinal"
                              maxlength="12"
                              style="background-color: whitesmoke"
                              placeholder="Digite o campo Valor Sinal:"
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="txt_resta_pagar" class="form-label">Resta Pagar:</label>
                            <input
                              class="form-control"
                              type="text"
                              id="txt_resta_pagar"
                              name="txt_resta_pagar"
                              style="background-color: whitesmoke"
                              placeholder="Digite o Resta Pagar:"
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="txt_pago_total" class="form-label">Pago Total:</label>
                            <select id="txt_pago_total" name="txt_pago_total" class="select2 form-select" style="background-color: whitesmoke">
                            <option value="Selecione...">Selecione...</option>
                            <option value="SIM">SIM</option>
                            <option value="NÂO">NÂO</option>
                          </select>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="txt_tipo_pagamento" class="form-label">Tipo/Pagamento:</label>
                            <select id="txt_tipo_pagamento" name="txt_tipo_pagamento" class="select2 form-select" style="background-color: whitesmoke">
                            <option value="Selecione...">Selecione...</option>
                            <option value="Débito">Débito</option>
                            <option value="Crédito 1X">Crédito 1X</option>
                            <option value="Crédito 2X">Crédito 2X</option>
                            <option value="Crédito 3X">Crédito 3X</option>
                            <option value="Crédito 4X">Crédito 4X</option>
                            <option value="Crédito 5X">Crédito 5X</option>
                            <option value="Crédito 6X">Crédito 6X</option>
                            <option value="PIX">PIX</option>
                            <option value="LINK">LINK</option>
                          </select>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="txt_vendedor" class="form-label">Vendedor:</label>
                            <select id="txt_vendedor" name="txt_vendedor" class="js-data-example-ajax" style="background-color: whitesmoke">
                            <option value="Selecione...">Selecione...</option>
                            <?php while ($dados = mysqli_fetch_array($sql2)) { ?>
                              <option valeu="<?php echo $dados['ven_nome']; ?>"> <?php echo utf8_encode($dados['ven_nome']) ; ?> </option>
                            <?php } ?>
                          </select>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="txt_observacao" class="form-label">Observação:</label>
                            <textarea class="form-control" id="message-text" name="txt_observacao" style="background-color: whitesmoke"></textarea>
                            </div>

                            <div class="mt-2">
                          <button type="submit" class="btn btn-primary me-2" onclick="return validar_dados()">Cadastrar</button>
                          <button type="reset" class="btn btn-outline-secondary">Apagar</button>
                        </div>
                      </form>
                    </div>
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
    <script src="../assets/js/pages-account-settings-account.js"></script>
  
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

  </body>
</html>
