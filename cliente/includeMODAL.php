


<div class="modal fade" id="exampleModal13" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  aria-hidden="true">
 
 <div class="modal-dialog modal-xl" role="document">
   <div class="modal-content">
     <div class="modal-header">
       <h5 class="modal-title" id="exampleModalLabel">Novo:</h5>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>
     <hr>
     <div class="modal-body">
   <form method="POST" id="exampleModal13" action="atualizar_cliente.php" enctype="multipart/form-data">
       <div class="row mb-3">
                         <label class="col-sm-2 col-form-label" for="basic-default-name">Nome:</label>
                         <div class="col-sm-10">
                           <input type="text" class="form-control" id="recipient-nome" name="txt_nome" placeholder="Digite seu nome:">
                         </div>
                       </div>
                       <div class="row mb-3">
                         <label class="col-sm-2 col-form-label" for="basic-default-company">Telefone:</label>
                         <div class="col-sm-10">
                           <input type="text" class="form-control" id="recipient-telefone" name="txt_telefone"  placeholder="Digite o campo Telefone:">
                         </div>
                       </div>
                       <div class="row mb-3">
                         <label class="col-sm-2 col-form-label" for="basic-default-email">CPF:</label>
                         <div class="col-sm-10">
                           <div class="input-group input-group-merge">
                             <input type="text" id="recipient-cpf" name="txt_cpf" class="form-control" placeholder="Digite o campo email:" aria-label="john.doe" aria-describedby="basic-default-email2">
                           </div>
                         </div>
                     </div>
                       <div class="row mb-3">
                         <label class="col-sm-2 col-form-label" for="basic-default-message">Rua:</label>
                         <div class="col-sm-10">
                         <input type="text" id="recipient-rua" name="rua" class="form-control" placeholder="Digite o campo de data:" aria-label="john.doe" aria-describedby="basic-default-email2">
                         </div>
                       </div>
                       <div class="row mb-3">
                         <label class="col-sm-2 col-form-label" for="basic-default-company">Número:</label>
                         <div class="col-sm-10">
                           <input type="text" class="form-control" id="recipient-numero" name="txt_numero"  placeholder="Digite o campo Número:">
                         </div>
                       </div>
                       <div class="row mb-3">
                         <label class="col-sm-2 col-form-label" for="basic-default-company">Bairro:</label>
                         <div class="col-sm-10">
                           <input type="text" class="form-control" id="recipient-bairro" name="txt_bairro"  placeholder="Digite o campo Bairro:">
                         </div>
                       </div>
                       <div class="row mb-3">
                         <label class="col-sm-2 col-form-label" for="basic-default-company">Cidade:</label>
                         <div class="col-sm-10">
                           <input type="text" class="form-control" id="recipient-cidade" name="txt_cidade"  placeholder="Digite o campo Cidade:">
                         </div>
                       </div>
                       <div class="row mb-3">
                         <label class="col-sm-2 col-form-label" for="basic-default-company">Estado:</label>
                         <div class="col-sm-10">
                         <select id="recipient-estado" name="txt_estado" class="select2 form-select">
                            <option value=""></option>
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
                       </div>
                       <div class="row mb-3">
                         <label class="col-sm-2 col-form-label" for="basic-default-company">Complemento:</label>
                         <div class="col-sm-10">
                           <input type="text" class="form-control" id="recipient-complemento" name="txt_complemento"  placeholder="Digite o campo Complemento:">
                         </div>
                       </div>
                       <div class="row justify-content-end">
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

