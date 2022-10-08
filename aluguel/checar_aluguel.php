
<?php
  include_once "../conexao_movimentacao/banco.php";

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
      content="width=100%, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Locados | Aluguel</title>

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
    background: red;
    color: #ffffff;
    cursor: pointer;
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
                <span class="text-muted fw-light">Locados/</span> Consulta
                  
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                <li class="nav-item lh-1 me-3">
                </li>

                <!-- User -->
                <?php include("includeUSER.php");?>
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
			
			<a href="consulta_aluguel.php">
				<h4 class="no-margin pull-left">| Movimento:</h4>
			 
			</a>
      
			<div class="clearfix"></div>
		
						
			<div class="back-color-5" style="position:absolute;bottom:0px;left:0px;width:100%;height:7px"></div>
		</div>
		
    <nav class="navbar navbar-expand-sm navbar-dark" aria-label="Third navbar example" style="background-color: lightgray">
    <div class="container-fluid">
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample03">
        <ul class="navbar-nav me-auto mb-2 mb-sm-0">
        
          <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>
         
        </ul>
  </nav>
              <div class="row">
                <div class="col-md-12">
                  
                  <div class="card">
                    <!-- Notifications -->
                    
                      <div class="table-responsive text-nowrap">
                        <table class="table table-hover">
                            <div class="container">
			
                            
				<div class="main-content">
				
					
					<br/>

            
    <h2>
      Check de Locados:</h2>
    <br/>

    <script>
    function ValidateForm(form)
    {
      if(form.start_time.value=="")
      {
        alert("Por favor, selecione uma data de inicio!");
        return false;
      }
      
      if(form.end_time.value=="")
      {
        alert("Por favor, selecione uma data de término!");
        return false;
      }
      
      var start_time = Date.parse(form.start_time.value);
      var end_time = Date.parse(form.end_time.value);
      
      if(start_time>end_time)
      {
        alert("A Data Inicial não pode ser depois da Data Final!");
        return false;
      }
      
      return true;
    }
    </script>


    <?php
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    ?>

    <form method ="POST" action="" onsubmit="return ValidateForm(this)">

    <?php
    $data_inicio = "";
    if(isset($dados['data_inicio'])){
      $data_inicio = $dados['data_inicio'];
    }

    ?>
    <input type="hidden" name="page" value="results"/>
    <div class="panel panel-default search-result">

      <div class="panel-body">
        <div class="row">
        
          
          <div class="col-sm-3">
            <strong>Data Inicial</strong>
            <br/>
              <div class="input-group">
              <input  autocomplete="0" type="date" id="start_time" class="form-control" name="data_inicio" value="<?php echo $data_inicio; ?>">
              </div>
            
          </div>
          
          <div class="col-sm-3">

          <?php
          $data_final = "";
          if(isset($dados['data_final'])){
            $data_final = $dados['data_final'];
          }

          ?>
            
            <strong>Data Final</strong>
            <br/>
              <div class="input-group">
              <input  autocomplete="0" type="date" id="end_time" class="form-control" name="data_final"  value="<?php echo $data_final; ?>">
              
              </div>
            
          </div>
          
          
          <div class="col-sm-3">
            <br/>
            <input type="submit" class="btn btn-success" value="Pesquisar" name="pesqEntreDatas"/>
          </div>
      </div>



</form>	
<link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css"/ >
      <script src="js/jquery.datetimepicker.full.min.js"></script>
      <script>
      $('#data_inicial').datetimepicker({
        format:"m/d/Y",
        formatTime:"",
          timepicker:0
      }
      );
      $('#data_final').datetimepicker({
        format:"m/d/Y",
        formatTime:"",
          timepicker:0
      });

      </script>	

                
<div class="container-xxl flex-grow-1 container-p-y">
            </div>
            
            <div class="table-responsive text-nowrap">
                        <table class="table table-bordered">
                          <?php
                        include_once "../conexao_movimentacao/banco.php";
                          ?>
                          <thead style="background-color: whitesmoke;">
                            <tr>
                              <th>#:</th>
                              <th>Foto:</th>
                              <th>Descrição:</th>
                              <th>Qtde/Estoque:</th>
                              <th>Qtde/Locado:</th>
                          
                              </tr>
                            </thead>
                            <?php
                        if(!empty($dados['pesqEntreDatas'])){
                          //var_dump($dados);
                         $query_usuarios = "select p.pro_codigo, p.pro_foto, p.pro_descricao, p.pro_qtde, a.qtde_locado from tb_produto p
                         inner join(select al.pro_codigo, SUM(al.alu_qtde) as qtde_locado from tb_aluguel al
                                    where al.alu_status <> 'DEVOLVIDO' and
                                          al.alu_data_inicial between :data_inicio and :data_final OR 
                                          al.alu_data_inicial > al.alu_data_final and
                                          al.alu_data_final between :data_inicio and :data_final
                                    group by al.pro_codigo                                          
                         )a on a.pro_codigo = p.pro_codigo ";
                          $result_usuarios = $conn->prepare($query_usuarios);
                          $result_usuarios->bindParam(':data_inicio', $dados['data_inicio']);
                          $result_usuarios->bindParam(':data_final', $dados['data_final']);
                          $result_usuarios->execute();
                           echo "<br>";
                         } 
                         $query_usuarios = "select p.pro_codigo, p.pro_foto, p.pro_descricao, p.pro_qtde, a.qtde_locado from tb_produto p
                         inner join(select al.pro_codigo, SUM(al.alu_qtde) as qtde_locado from tb_aluguel al
                                    where al.alu_status <> 'DEVOLVIDO' and
                                          al.alu_data_inicial between :data_inicio and :data_final OR 
                                          al.alu_data_inicial > al.alu_data_final and
                                          al.alu_data_final between :data_inicio and :data_final
                                    group by al.pro_codigo                                          
                         )a on a.pro_codigo = p.pro_codigo ";
                         $result_usuarios = $conn->prepare($query_usuarios);
                         $result_usuarios->bindParam(':data_inicio', $dados['data_inicio']);
                         $result_usuarios->bindParam(':data_final', $dados['data_final']);
                         $result_usuarios->execute();
                         while($row_usuario = $result_usuarios->fetch(PDO::FETCH_ASSOC)) { ?>
                          <tbody class="table-border-bottom-0"> 
                          <tr>
                        <td> <?php echo $row_usuario['pro_codigo']; ?> </td>
                        <td> <img src="../produto/<?php echo $row_usuario['pro_foto']; ?> "target="_blank" style="width: 49px; height: 45px;" <?php echo $row_usuario['pro_foto']; ?>> </td>
                        <td> <?php echo $row_usuario['pro_descricao']; ?> </td> 
                        <td> <?php echo $row_usuario['pro_qtde']; ?> </td>
                        <td> <?php echo $row_usuario['qtde_locado']; ?> </td>
                        </td>
                       <?php  } ?>

                            </tbody>
                  </table>
                         </div>
			


     

			
			
				
			
			

			
			<div class="footer text-center">    
     

			</div>
			<br/>
		
	</div>

   
  <script type="text/javascript" src="js/bootstrap.min.js"></script>



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


  </body>
</html>
