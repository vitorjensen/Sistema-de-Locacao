
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

<div class="modal fade" id="exampleModal10" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  aria-hidden="true">
 
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
    <form method="POST" id="exampleModal10" action="atualizar_cliente.php" enctype="multipart/form-data">
    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="txt_nome" class="form-label">Nome:</label>
                            <input class="form-control" type="text" name="txt_nome" id="txt_nome" style="background-color: whitesmoke" placeholder="Digite o campo Nome:" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="txt_telefone" class="form-label">Telefone:</label>
                            <input
                              class="form-control"
                              type="text"
                              id="txt_telefone"
                              name="txt_telefone"
                              onkeypress="mascara(this, '## #####-####')"
                              maxlength="13"
                              style="background-color: whitesmoke"
                              placeholder="Digite o campo Telefone:" 
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="txt_cpf" class="form-label">CPF:</label>
                            <input class="form-control" type="text" name="txt_cpf" onkeypress="mascara(this, '###.###.###-##')" maxlength="14" id="txt_cpf" style="background-color: whitesmoke" placeholder="Digite o campo CPF:" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="txt_rua" class="form-label">Rua:</label>
                            <input
                              class="form-control"
                              type="text"
                              id="txt_rua"
                              name="txt_rua"
                              style="background-color: whitesmoke"
                              placeholder="Digite o campo Rua:" 
                              
                            />
                          </div>

                          <div class="mb-3 col-md-6">
                            <label for="txt_numero" class="form-label">Número:</label>
                            <input
                              class="form-control"
                              type="text"
                              id="txt_numero"
                              name="txt_numero"
                              style="background-color: whitesmoke"
                              placeholder="Digite no campo Número:" 
                              
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="txt_bairro" class="form-label">Bairro:</label>
                            <input
                              class="form-control"
                              type="text"
                              id="txt_bairro"
                              name="txt_bairro"
                              style="background-color: whitesmoke"
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
                              style="background-color: whitesmoke"
                              placeholder="Digite o campo Cidade:" 
                              
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="txt_estado" class="form-label">Estado:</label>
                            <select id="txt_estado" name="txt_estado" class="select2 form-select" style="background-color: whitesmoke" >
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
                          <div class="mb-3 col-md-6">
                            <label for="txt_complemento" class="form-label">Complemento:</label>
                            <input
                              class="form-control"
                              type="text"
                              id="txt_complemento"
                              name="txt_complemento"
                              style="background-color: whitesmoke"
                              placeholder="Digite o campo Complemento:" 
                              
                            />
                          </div>
                      
      </div>
      <hr>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-secondary">Cadastrar</button>
      </div>
      </form>
    </div>
  </div>
</div>

