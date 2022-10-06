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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript">
    $(document).ready(function () {
    $('#listar-aluguel').DataTable(
      {
       "processing": true,
        "serverSide": true,
        "ajax":{
            url: 'cadastrar_aluguelDATA.php',
            type: 'POST',
        }
    }
    );

});
</script>
</head>
<body>
<nav class="navbar navbar-dark bg-dark" aria-label="Dark offcanvas navbar">
    <div class="container-fluid">
    <a class="navbar-brand" href="consulta_aluguel.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="blue" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
</svg> Voltar</a>
    </div>
  </nav>
<br>
<br>
<br>
<br>
<div class="card-body" style="background-color: whitesmoke;">
<div class="table-responsive text-nowrap">
<table id="listar-aluguel" class="display" style="width: 100%;">
                      <thead>
            <tr>
                              <th>#:</th>
                              <th>Nome: </th>
                              <th>CPF:  </th>
                              <th>Data/Inicial: </th>
                              <th>Evento: </th>
                              <th>Data/Compra: </th>
                              <th>Data/Final: </th>
                              <th>Código/Produto: </th>
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
<td> <?php echo $dados['alu_cpf']; ?> </td>
<td> <?php echo $dados['alu_data_inicial']; ?> </td>
<td> <?php echo $dados['alu_evento']; ?> </td> 
<td> <?php echo $dados['alu_data_compra']; ?> </td>
<td> <?php echo $dados['alu_data_final']; ?> </td>
<td> <?php echo $dados['pro_codigo']; ?> </td>
<td> <?php echo "R$" . number_format($dados['alu_valor_sinal'], 2, "," , "."); ?> </td> 
<td> <?php echo "R$" . number_format($dados['alu_resta_pagar'], 2, "," , "."); ?> </td> 
<td> <?php echo $dados['alu_pago_total']; ?> </td> 
<td> <?php echo $dados['alu_tipo_pagamento']; ?> </td>
<td> <?php echo $dados['ven_nome']; ?> </td>
<td> <?php echo $dados['alu_observacao']; ?> </td>
<td> <?php echo $dados['alu_status']; ?> </td>
             </tbody>
             </div>
             </div>
             <?php } ?>
                    </table>
                    
                    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>

   <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

</body>
</html>