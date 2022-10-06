<?php
require_once('../conexao/banco.php');

$id = $_REQUEST['alu_codigo'];

$sql = "select *, date_format(alu_data_inicial,'%d/%m/%Y') as data from tb_aluguel where alu_codigo = '$id'";
$sql = mysqli_query($con, $sql) or die ("Erro na sql!") ;

$dados = mysqli_fetch_array($sql);

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

    <title>Contrato:</title>

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
      .titulo{
        display: block;
        padding: 5px;
        margin: auto;
        text-align: center;
      }
      .sub{
        color: black;
       text-align: center;
      }

    }
      
      </style>

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
                <span class="text-muted fw-light">Contrato/</span>Aluguel:</h4>
                  
                </div>
              </div>
              <!-- /Search -->
  
              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                <li class="nav-item lh-1 me-3">
                </li>
  
                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="">
                      <i class="menu-icon tf-icons bx bx-user"></i>
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                    
                    </li>
                    <li>
                      <a class="dropdown-item" href="../index.php">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span> 
                      </a>
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
              
             
   <div class="card-body" style="background-color: white;">               
<nav class="navbar navbar-expand-sm navbar-dark" aria-label="Third navbar example" style="background-color: lightgray">
    <div class="container-fluid">
      
     
      <div class="collapse navbar-collapse" id="navbarsExample03">
        <ul class="navbar-nav me-auto mb-2 mb-sm-0">
          <h4 class="titulo"> CONTRATO DE LOCAÇÃO DE ROUPAS ESPECIAIS:</h4>
</u>
       
    </div>
</nav>
                    <!-- Account -->
        <br>								
      <hr>
      <p class="sub"> "Linna Roupas e Acessórios Ltda – “AMISS MODA FESTA” CNPJ 08.778.678/0001-01, empresa especializada em aluguéis de trajes para eventos, com sede e foro a Rua Itabirito, 700 – Jardim Ipiranga – CEP 13.468-520, Americana – SP, Telefone:(19) 3601-1547/ 3601-1599 -WHATS 99927-8804 doravante denominada LOCADORA (A), neste ato representada por esta supra e, do outro doravante denominado de LOCATÁRIO, resolvem celebrar o presente contrato de locação com as cláusulas e condições seguintes:</p><br>                                                                     
    </hr>	
    <hr>					
    </hr>
    <form id="form_atualizar_aluguel" method="POST" action="testePDF.php">                 
    <div id="dados"> 

            <label for="codigo" class="form-label">#:</label>
            <input
              class="input"
              value="<?php echo $dados['alu_codigo']; ?>"
              type="text"
              id="txt_codigo"
              name="txt_codigo"
              placeholder="Digite seu código:"
          />
          NOME:  <input class="input"  value="<?php echo $dados['cli_nome']; ?>" type="text" name="txt_nome" id="txt_nome" placeholder="Digite o campo nome:"/>
          
          TEL:  <input class="input"  value="<?php echo $dados['alu_telefone']; ?>"  type="text" name="txt_telefone" onkeypress="mascara(this, '## #####-####')" maxlength="13" id="txt_telefone" placeholder="Digite o campo Telefone:"/>	
          		
        
          DATA:	<input class="input" value="<?php echo $dados['alu_data_inicial']; ?>"  type="text" name="txt_data_inicial" id="txt_data_inicial"/> 	
          <br>
          <br>
          CPF: <input class="input"  value="<?php echo $dados['alu_cpf']; ?>"  type="text" name="txt_cpf" maxlength="14" id="txt_cpf" placeholder="Digite o campo CPF:"/>	
              
          ENDEREÇO: <input class="input"  value="<?php echo $dados['alu_rua']; ?>" type="text" name="txt_endereco" id="txt_endereco" placeholder="Digite o campo Endereço:"/>	
          
          Nº: <input class="input"  value="<?php echo $dados['alu_numero']; ?>" type="text" name="txt_numero" id="txt_numero" placeholder="Digite o campo Número:"/>		
          
          BAIRRO: <input class="input"  value="<?php echo $dados['alu_bairro']; ?>" type="text" name="txt_bairro" id="txt_bairro" placeholder="Digite o campo Bairro:"/> <br>
          <br>	
          
          CIDADE: <input class="input"  value="<?php echo $dados['alu_cidade']; ?>" type="text" name="txt_cidade" id="txt_cidade" placeholder="Digite o campo Cidade:"/> <br>
          <br>
          <strong>Cláusula 01</strong> – O objeto do presente contrato é a locação de artigos do vestuário:<br>
          <br>									
          <strong>Cláusula 02</strong> – A locação terá INÍCIO em	 <input class="input" value="<?php echo $dados['alu_data_inicial']; ?>" style="background-color: whitesmoke;"  type="text" name="txt_data_inicial" id="txt_data_inicial"/>	
          
          e TÉRMINO  <input class="input" value="<?php echo $dados['alu_data_final']; ?>" style="background-color: whitesmoke;"  type="text" name="txt_data_final" id="txt_data_final"/><br>			
          <br>              
          <strong>Cláusula 03</strong> – O horário de funcionamento da loja é: SEGUNDA-FEIRA á SEXTA-FEIRA das 10:00 ás 18:00 h e SÁBADO das 09:00 ás 13:00h;<br>									
          <br>              
          <strong>Cláusula 04</strong> – O traje alugado deverá ser devolvido até as 18:00 h da data estabelecida na cláusula 02;<br>								
          <br>              
          <strong>Cláusula 05</strong> – Caso o objeto seja devolvido com excesso de sujeira ou mancha, será cobrada uma taxa de R$ 30,00 (trinta reais) para lavagem da peça.<br>									
          <br>              
          <strong>Cláusula 06</strong>– Se houver qualquer danificação ao(s) traje(s) que não possa ser reparado será cobrado valor de venda do item;	<br>								
          <br>              
          <strong>Cláusula 07</strong> – A não devolução no prazo de 5 (cinco) dias será considerado EXTRAVIO, sendo que o LOCATÁRIO terá que pagar 02 (duas) vezes o valor do aluguel de cada item;<br>									
          <br>              
          <strong>Cláusula 08</strong> – A não devolução de algumas peças serão cobradas separadamente; (Cabides, Echarpes, Capas).<br>									
          <br>                
          <strong>Cláusula 09</strong> – A troca do traje poderá ser efetuada até 1 dia antes do ajuste, neste caso ira prevalecer o maior valor do traje;	<br>								
          <br>                
          <strong>Cláusula 10</strong> – A Empresa se compromete a entregar o traje lavado e passado e em perfeito estado de conservação e uso, na data estabelecida na cláusula 02. Na retirada o traje devera ser provado e caso haja necessidade de novos ajustes o traje será entregue no dia seguinte a data estabelecida;<br>									
          <br>               
          <strong>Cláusula 11</strong>1 – Caso seja constada alguma danificação no traje locado, até a data de retirada da peça, o LOCADOR se compromete a efetuar a substituição, ou troca, do traje, independente do seu preço de locação, ou a devida devolução do valor pago, tudo conforme a disponibilidade do produto; Parágrafo Único - O LOCADOR não se responsabiliza pelas peças danificadas por lavagem, ajustes ou por aluguel anterior. O Locatório desde já concorda e isenta o LOCADOR de possível reparação por danos materiais e/ou morais que possam advir por estes motivos, visto que as peças são delicadas no uso;<br>									
          <br>               
          <strong>Cláusula 12</strong> – Caso haja DESISTÊNCIA por parte do LOCATÁRIO em até 07 (sete) dias após assinatura do contrato, será devolvido valor total (conforme lei vigente do código do consumidor). Após 07 (sete) dias o LOCADOR não faz devolução de valor, caso haja o cancelamento ou alteração da data do evento, o mesmo poderá usar o valor total pago na loja em qualquer linha (festa, casual e acessórios).<br>									
          <br>
          <strong>Cláusula 13</strong> – E por estarem justos e acordados, firma o presente contrato em 02 (duas) vias de igual teor e forma, ficando eleito o Foro da Comarca de Americana/SP para dirimir quaisquer dúvidas que possam surgir.<br>	
          <br>
          <hr>
</hr>							                
          Abaixo, Relação dos Produtos Locado:				<strong>NÃO EFETUAMOS TROCAS/AJUSTES AOS SÁBADOS:</strong>
          <br>				
          <br>                
          <label for="codigo" class="form-label">Código:</label>
            <input
              class="input"
              value="<?php echo $dados['alu_codigo']; ?>"
              type="text"
              id="txt_codigo"
              name="txt_codigo"
              placeholder="Digite seu código:"
          />
                  <label for="txt_opção_de_compra" class="form-label">OPÇÃO DE COMPRA:</label>
                  <select id="txt_opção_de_compra" name="txt_opção_de_compra" class="select" style="background-color: whitesmoke" style="width: 186px; height: 28px;">
                  <option value="Selecione...">Selecione...</option>
                  <option value="SIM">SIM</option>
                    <option value="NÃO">NÃO</option>
                  </select>
                    <br>
                    <br>
                    <label for="txt_pre_reserva" class="form-label">PRÉ-RESERVA:</label>
                  <select id="txt_pre_reserva" name="txt_pre_reserva" class="select" style="background-color: whitesmoke" style="width: 186px; height: 28px;">
                  <option value="Selecione...">Selecione...</option>
                  <option value="SIM">SIM</option>
                    <option value="NÃO">NÃO</option>
                  </select>	
                  <br>
                  
                  <strong>AJUSTE: SEGUNDA À SEXTA-FEIRA 09:00 ÀS 17:00hs SOMENTE C/ CALÇADO e HORARIO AGENDADO:</strong>	
                  <br>
                  <br>			
                        
                  <label for="codigo" class="form-label">Descrição:</label>
                    <input
                      class="input"
                      type="text"
                      value="<?php echo $dados['alu_descricao']; ?>"
                      id="txt_descricao"
                      name="txt_descricao" 
                  />													
                            
                  <label for="codigo" class="form-label">Cor:</label>
                    <input
                      class="input"
                      value="<?php echo $dados['alu_cor']; ?>"
                      type="text"
                      id="txt_cor"
                      name="txt_cor" 
                  />													
                  <label for="txt_evento" class="form-label">EVENTO:</label>
                  <select id="txt_evento" name="txt_evento" class="select" style="background-color: whitesmoke" style="width: 186px; height: 28px;">
                  <option value="Selecione...">Selecione...</option>
                  <option value="MANHÂ">MANHÂ</option>
                    <option value="NÃO">TARDE</option>
                    <option value="NÃO">NOITE</option>
                  </select>
                  <br>
                  <br>
                  <label for="txt_evento" class="form-label">1º ALUGUEL:</label>
                  
                  <select id="txt_evento" name="txt_evento" class="select" style="background-color: whitesmoke" style="width: 186px; height: 28px;">
                  <option value="Selecione...">Selecione...</option>
                  <option value="SIM">SIM</option>
                    <option value="NÃO">NÃO</option>
                  </select>					
                  <label for="txt_tamanho" class="form-label">TAMANHO:</label>
                    <input
                      class="input"
                      value="<?php echo $dados['alu_tamanho']; ?>"
                      type="text"
                      id="txt_tamanho"
                      name="txt_tamanho" 
                  />									
                            
                  <label for="txt_valor" class="form-label">VALOR:</label>
                    <input
                      class="input"
                      value="<?php echo $dados['alu_valor']; ?>"
                      type="text"
                      id="txt_valor"
                      name="txt_valor" 
                  />								 
                  <label for="txt_valor_sinal" class="form-label">SINAL:</label>
                    <input
                      class="input"
                      value="<?php echo $dados['alu_valor_sinal']; ?>"
                      type="text"
                      id="txt_valor_sinal"
                      name="txt_valor_sinal" 
                  />	
                  <br>
                  <br>							
                  
                  <label for="txt_resta_pagar" class="form-label">RESTANTE:</label>
                    <input
                      class="input"
                      value="<?php echo $dados['alu_resta_pagar']; ?>"
                      type="text"
                      id="txt_resta_pagar"
                      name="txt_resta_pagar" 
                  />								
                        
          <hr>                  
                                      
          <label for="txt_locatario" class="form-label"><strong>LOCATÁRIO:</strong></label>
        
                    <input
                      class="input"
                      value="<?php echo $dados['cli_nome']; ?>"
                      type="text"
                      id="txt_locatario"
                      name="txt_locatario" 
                  />									                         	
                  <label for="txt_restante" class="form-label">TESTEMUNHAS:</label>
                                                    
                  <input
                      class="input"
                      type="text"
                      id="txt_restante"
                      name="txt_restante"
                      placeholder="Nome:" 
                  />
                  <label for="txt_restante" class="form-label">CPF:</label>		          

                  <input
                      class="input"
                      type="text"
                      id="txt_restante"
                      name="txt_restante"
                      placeholder="Cpf:" 
                  />
                  <br>
                  <br>

          <label for="txt_restante" class="form-label"><strong>LOCADOR:</strong></label>
        
        <input
          class="input"
          type="text"
          id="txt_restante"
          name="txt_restante" 
      />
      <label for="txt_restante" class="form-label">TESTEMUNHAS:</label>
                                        
      <input
            class="input"
            type="text"
            id="txt_restante"
            name="txt_restante"
            placeholder="Nome:" 
        />
        <label for="txt_restante" class="form-label">CPF:</label>		          

        <input
            class="input"
            type="text"
            id="txt_restante"
            name="txt_restante"
            placeholder="Cpf:" 
        />
      <br>
      <span>Linna Roupas e Acessáorios Ltda <br>
      CNPJ: 08.778.678/0001-01.</span>									                         	
    
      <br>
      

    <div class="modal-footer">
      <button type="submit" class="btn btn-danger" value="IMPRIMIR" onclick="return validar_dados()">PDF</button>
  </form>
</div>
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
