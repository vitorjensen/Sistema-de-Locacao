

<div class="modal fade" id="exampleModal11" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  aria-hidden="true">
 
 <div class="modal-dialog modal-xl" role="document">
   <div class="modal-content">
     <div class="modal-header">
       <h5 class="modal-title" id="exampleModalLabel">Editar:</h5>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>
     <hr>
     <div class="modal-body">
   <form method="POST" id="exampleModal11" action="atualizar_aluguel.php" enctype="multipart/form-data">
       <div class="row mb-3">
                         <label class="col-sm-2 col-form-label" for="basic-default-name">Nome:</label>
                         <div class="col-sm-10">
                           <input type="text" class="form-control" id="recipient-nome" name="txt_nome" placeholder="Digite seu nome:">
                         </div>
                       </div>
                       <div class="row mb-3">
                         <label class="col-sm-2 col-form-label" for="basic-default-name">Telefone:</label>
                         <div class="col-sm-10">
                           <input type="text" class="form-control" id="recipient-telefone" name="txt_telefone" placeholder="Digite no campo telefone:">
                         </div>
                       </div>
                       <div class="row mb-3">
                         <label class="col-sm-2 col-form-label" for="basic-default-name">CPF:</label>
                         <div class="col-sm-10">
                           <input type="text" class="form-control" id="recipient-cpf" name="txt_cpf" placeholder="Digite no campo CPF:">
                         </div>
                       </div>
                       <div class="row mb-3">
                         <label class="col-sm-2 col-form-label" for="basic-default-message">Data Inicial:</label>
                         <div class="col-sm-10">
                         <input type="date" id="recipient-data-inicial" name="txt_data_inicial" class="form-control" placeholder="Digite o campo Data Inicial:"">
                         </div>
                         
                       </div>
                       <div class="row mb-3">
                         <label class="col-sm-2 col-form-label" for="basic-default-message">Data Final:</label>
                         <div class="col-sm-10">
                         <input type="date" id="recipient-data-final" name="txt_data_final" class="form-control" placeholder="Digite o campo Data Final:">
                         </div>
                         
                       </div>
                       
                       <div class="row mb-3">
                         <label class="col-sm-2 col-form-label" for="basic-default-message">Código do Produto:</label>
                         <div class="col-sm-10">
                         <input type="text" id="recipient-codigo-produto" name="txt_codigo_produto" class="form-control" placeholder="Digite o campo Código do produto">
                         </div>
                         
                       </div>
                       
                       <div class="row mb-3">
                         <label class="col-sm-2 col-form-label" for="basic-default-message">Descrição:</label>
                         <div class="col-sm-10">
                         <input type="text" id="recipient-descricao" name="txt_descricao" class="form-control" placeholder="Digite o campo Descrição:">
                         </div>
                         
                       </div>
                       
                       <div class="row mb-3">
                         <label class="col-sm-2 col-form-label" for="basic-default-message">QTDE:</label>
                         <div class="col-sm-10">
                         <input type="text" id="recipient-qtde" name="txt_data_cadastro" class="form-control" placeholder="Digite o campo de Quantidade:">
                         </div>
                         
                       </div>
                       <div class="row mb-3">
                         <label class="col-sm-2 col-form-label" for="basic-default-message">Valor:</label>
                         <div class="col-sm-10">
                         <input type="text" id="recipient-valor" name="txt_valor" class="form-control" placeholder="Digite o campo Valor:">
                         </div>
                         
                       </div>
                       <div class="row mb-3">
                         <label class="col-sm-2 col-form-label" for="basic-default-message">valor Sinal:</label>
                         <div class="col-sm-10">
                         <input type="text" id="recipient-valor-sinal" name="txt_valor_sinal" class="form-control" placeholder="Digite o campo Valor Sinal:">
                         </div>
                         
                       </div>
                       <div class="row mb-3">
                         <label class="col-sm-2 col-form-label" for="basic-default-message">Resta Pagar:</label>
                         <div class="col-sm-10">
                         <input type="text" id="recipient-resta-pagar" name="txt_resta_pagar" class="form-control" placeholder="Digite o campo Resta Pagar:">
                         </div>
                         
                       </div>
                       <div class="row mb-3">
                         <label class="col-sm-2 col-form-label" for="basic-default-message">Pago Total:</label>
                         <div class="col-sm-10">
                         <input type="text" id="recipient-pago-total" name="txt_pago_total" class="form-control" placeholder="Digite o campo Pago Total:">
                         </div>
                         
                       </div>
                       <div class="row mb-3">
                         <label class="col-sm-2 col-form-label" for="basic-default-message">Tipo Pagamento:</label>
                         <div class="col-sm-10">
                         <input type="text" id="recipient-tipo-pagamento" name="txt_tipo_pagamento" class="form-control" placeholder="Digite o campo Tipo de Pagamento:">
                         </div>
                         
                       </div>
                       <div class="row mb-3">
                         <label class="col-sm-2 col-form-label" for="basic-default-message">Vendedor:</label>
                         <div class="col-sm-10">
                         <input type="text" id="recipient-vendedor" name="txt_vendedor" class="form-control" placeholder="Digite o campo Vendedor:">
                         </div>
                         
                       </div>
                       <div class="row mb-3">
                         <label class="col-sm-2 col-form-label" for="basic-default-message">Status:</label>
                         <div class="col-sm-10">
                         <select id="recipient-status" name="txt_status" class="select2 form-select">
                              <option value="LOCADO">LOCADO</option>
                              <option value="RESERVADO">RESERVADO</option>
                              <option value="DEVOLVIDO">DEVOLVIDO</option>
                            </select>
                         </div>
                         
                       </div>
                       
     </div>
     <hr>
     <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
       <button type="submit" class="btn btn-secondary">Atualizar</button>
     </div>
     </form>
   </div>
 </div>
</div>




