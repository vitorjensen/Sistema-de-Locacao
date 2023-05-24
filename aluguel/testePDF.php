<?php
 $usuario = "root";
 $senha = "";
 $dbname = "dblocar";

// use true se quiser remover caracteres que não sejam utf-8
 $checkUtf = true;
 

 $con = mysqli_connect("localhost","root","","dblocar");
 mysqli_select_db($con, $dbname) or die(mysqli_connect_errno());

 $id = "1";
 $result_usuario = "SELECT * FROM tb_aluguel, tb_cliente WHERE alu_codigo = '$id' LIMIT 1";
 $resultado_usuario = mysqli_query($con, $result_usuario);
 while ($row_usuario = mysqli_fetch_assoc($resultado_usuario)) {
  echo $row_usuario['alu_codigo'];

 }


use Dompdf\Dompdf;
require_once 'dompdf/autoload.inc.php';

$dompdf = new DOMPDF();

$dompdf->loadHtml('

<div class="card-body" style="background-color: lightgray;">
<h4 class="titulo" style="display: block; padding: 5px; margin: auto; text-align: center; padding: 5px;"> CONTRATO DE LOCAÇÃO DE ROUPAS ESPECIAIS:</h4>
</div>
     <hr>
      <div class="collapse navbar-collapse" id="navbarsExample03" style="padding: -30px; padding-left: -38px;">
        <ul class="navbar-nav me-auto mb-2 mb-sm-0">
        <p class="sub"> "Linna Roupas e Acessórios Ltda – “AMISS MODA FESTA” CNPJ 08.778.678/0001-01, empresa especializada 
        <br>em aluguéis de trajes para eventos, com sede e foro a Rua Itabirito, 700 – Jardim Ipiranga – CEP 13.468-520, 
        Americana – SP, Telefone:(19) 3601-1547/ 3601-1599 -WHATS 99927-8804, doravante denominada LOCADORA (A), neste ato representada por esta supra e, do outro doravante denominado 
        de LOCATÁRIO, resolvem celebrar o presente contrato de locação com as cláusulas e condições seguintes:</p>
          </u>
       
    </div>
    <form>            
    <div class="row">
    <div class="mb-3 col-md-7" style="background-color: #fffdd0;">
                          <label for="txt_nome" class="form-label">Cód:</label>
                          </div>
                          <br>
                          <div class="mb-3 col-md-6" style="padding-left: 175px; padding-top: -40px; background-color: #fffdd0;">
                            <label for="txt_nome" class="form-label">Nome:</label>
                            
                            </div>
                            <div class="mb-3 col-md-6" style="background-color: #fffdd0;">
                            <label for="txt_nome" class="form-label">Cidade:</label>
                            
                            </div>
                            <br>
                              <div class="mb-3 col-md-6" style="padding-left: 175px; padding-top: -38px;  background-color: #fffdd0;">
                                <label for="txt_telefone" class="form-label">Endereço:</label>
                              
                              </div>
                          
                              <div class="row" style="padding-left: 355px; padding-top: -78px;">
                              <div class="mb-3 col-md-7" style="">
                            <label for="txt_nome" class="form-label">Tel:</label>
                          
                            </div>
                            <br>
                            <div class="mb-3 col-md-6" style="padding-left: 175px; padding-top: -40px;">
                              <label for="txt_nome" class="form-label">CPF:</label>
                             
                              </div>
                              <div class="mb-3 col-md-6" style="">
                              <label for="txt_nome" class="form-label">Nº:</label>
                             
                              
                      </div>
                      <br>
                        <div class="mb-3 col-md-6" style="padding-left: 175px; padding-top: -37px;">
                          <label for="txt_telefone" class="form-label">Bairro:</label>
                          
                        </div>
                        </div> 
                        <hr>
                        <div class="row">
                        <strong>Cláusula 01</strong> – O objeto do presente contrato é a locação de artigos do vestuário:
                        <br>
                        <strong>Cláusula 02</strong> – A locação terá INÍCIO em:	  e TÉRMINO  em: <br>	                     
                        <strong>Cláusula 03</strong> – O horário de funcionamento da loja é: SEGUNDA-FEIRA á SEXTA-FEIRA das 10:00 ás 18:00 h e SÁBADO das 09:00 ás 13:00h;<br>									             
                        <strong>Cláusula 04</strong> – O traje alugado deverá ser devolvido até as 18:00 h da data estabelecida na cláusula 02;<br>								
                        <strong>Cláusula 05</strong> – Caso o objeto seja devolvido com excesso de sujeira ou mancha, será cobrada uma taxa de R$ 30,00 (trinta reais) para lavagem da peça.<br>									
                        <strong>Cláusula 06</strong>– Se houver qualquer danificação ao(s) traje(s) que não possa ser reparado será cobrado valor de venda do item;	<br>								         
                        <strong>Cláusula 07</strong> – A não devolução no prazo de 5 (cinco) dias será considerado EXTRAVIO, sendo que o LOCATÁRIO terá que pagar 02 (duas) vezes o valor do aluguel de cada item;<br>									
                        <strong>Cláusula 08</strong> – A não devolução de algumas peças serão cobradas separadamente; (Cabides, Echarpes, Capas).<br>									         
                        <strong>Cláusula 09</strong> – A troca do traje poderá ser efetuada até 1 dia antes do ajuste, neste caso ira prevalecer o maior valor do traje;	<br>								  
                        <strong>Cláusula 10</strong> – A Empresa se compromete a entregar o traje lavado e passado e em perfeito estado de conservação e uso, na data estabelecida na cláusula 02. Na retirada o traje devera ser provado e caso haja necessidade de novos ajustes o traje será entregue no dia seguinte a data estabelecida;<br>									
                        <strong>Cláusula 11</strong> – Caso seja constada alguma danificação no traje locado, até a data de retirada da peça, o LOCADOR se compromete a efetuar a substituição, ou troca, do traje, independente do seu preço de locação, ou a devida devolução do valor pago, tudo conforme a disponibilidade do produto; Parágrafo Único - O LOCADOR não se responsabiliza pelas peças danificadas por lavagem, ajustes ou por aluguel anterior. O Locatório desde já concorda e isenta o LOCADOR de possível reparação por danos materiais e/ou morais que possam advir por estes motivos, visto que as peças são delicadas no uso;<br>
                        <div class="mb-3 col-md-7" style="background-color: #add8e6;">									
                        <strong>Cláusula 12</strong> – Caso haja DESISTÊNCIA por parte do LOCATÁRIO em até 07 (sete) dias após assinatura do contrato, será devolvido valor total (conforme lei vigente do código do consumidor). Após 07 (sete) dias o LOCADOR não faz devolução de valor, caso haja o cancelamento ou alteração da data do evento, o mesmo poderá usar o valor total pago na loja em qualquer linha (festa, casual e acessórios).<br>
                        </div>									
                        <strong>Cláusula 13</strong> – E por estarem justos e acordados, firma o presente contrato em 02 (duas) vias de igual teor e forma, ficando eleito o Foro da Comarca de Americana/SP para dirimir quaisquer dúvidas que possam surgir.<br>	
         
                        </div>
<br>
                        <form>            
    <div class="row">
    <div class="mb-3 col-md-7" style="background-color: whitesmoke;">
                          <label for="txt_nome" class="form-label">Tamanho:</label> 
                        
                          </div>
                          <br>
                          <div class="mb-3 col-md-6" style="padding-left: 175px; padding-top: -40px; background-color: whitesmoke;">
                            <label for="txt_nome" class="form-label">Cor:</label>
                            
                            </div>
                            <div class="mb-3 col-md-6" style="background-color: whitesmoke;">
                            <label for="txt_nome" class="form-label">Valor:</label>
                            
                            </div>
                            <br>
                              <div class="mb-3 col-md-6" style="padding-left: 175px; padding-top: -38px;  background-color: whitesmoke;">
                                <label for="txt_telefone" class="form-label">Sinal:</label>
                                
                              </div>
                          
                              <div class="row" style="padding-left: 355px; padding-top: -78px;">
                              <div class="mb-3 col-md-7" style="">
                            <label for="txt_nome" class="form-label">Descrição:</label>
                            
                            </div>
                            <br>
                              <div class="mb-3 col-md-6" style="">
                              <label for="txt_nome" class="form-label">Restante:</label>  
                      </div>
                        </div> 
                        <hr>
');

  $dompdf->render();

//Exibir a Página
$dompdf->stream(
  "ContratoAmiss",
  array(
    "Attachment" => false
  )
  );
                       

