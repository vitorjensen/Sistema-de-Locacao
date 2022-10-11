


<div class="modal fade" id="exampleModalfornecedor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  aria-hidden="true">
 
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <span id="titulo-pessoa-fisica" style="display: none;">Nova pessoa Física:</span>
        <span id="titulo-pessoa-juridica" style="display: none;">Nova pessoa Jurídica:</span>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <hr>
      <div class="modal-body">
    <form method="POST" id="exampleModalfornecedor" action="cadastrar_fornecedor.php" enctype="multipart/form-data">
    <div class="row">
                        <div class="mb-3 col-md-6">
                        <input class="form-check-input" type="radio" name="txt_pessoa" id="txt_pessoa" value="Física" onchange="formPessoaFisica();">
  <label class="form-check-label" for="flexRadioDefault1">
    Física
  </label>
<br>
<br>
  <div class="form-check">
  <input class="form-check-input" type="radio" name="txt_pessoa" id="txt_pessoa" checked value="Jurídica" onchange="formPessoaJuridica();">
  <label class="form-check-label" for="flexRadioDefault2">
    Jurídica
  </label>
  <script>
    function formPessoaFisica(){
      //console.log("carregar formulario pessao fisica");
      document.getElementById("titulo-pessoa-fisica").style.display = 'block';
      document.getElementById("titulo-pessoa-juridica").style.display = 'none';

      document.getElementById("form-pessoa-fisica-cpf").style.display = 'block';
      document.getElementById("form-pessoa-juridica-cnpj").style.display = 'none';
      document.getElementById("form-pessoa-juridica-razao").style.display = 'block';
    }
    function formPessoaJuridica(){
      //console.log("carregar formulario pessao juridica");
      document.getElementById("titulo-pessoa-juridica").style.display = 'block';
      document.getElementById("titulo-pessoa-fisica").style.display = 'none';

     
      document.getElementById("form-pessoa-fisica-cpf").style.display = 'none';
      document.getElementById("form-pessoa-juridica-cnpj").style.display = 'block';
      document.getElementById("form-pessoa-juridica-razao").style.display = 'block';
     
    }
  </script>

</div>
                          </div>
                          <div id="form-pessoa-fisica-cpf" class="mb-3 col-md-6" style="display: none;">
                            <label for="txt_cnpj" class="form-label">CPF:</label>
                            <input class="form-control" type="text" onblur="checkCPF(this.value)" data-mask="000.000.000-00" name="txt_cnpj" id="txt_cnpj" style="background-color: whitesmoke" placeholder="Digite o campo CPF:"/>
                          </div>
                          <div id="form-pessoa-juridica-cnpj"class="mb-3 col-md-6" style="display: none;">
                            <label for="txt_cnpj_cpf" class="form-label">CNPJ:</label>
                            <input class="form-control" type="text" onblur="checkCnpj(this.value)" data-mask="00.000.000/0000-00" name="txt_cnpj_cpf" id="txt_cnpj_cpf" style="background-color: whitesmoke" placeholder="Digite o campo CNPJ:"/>
                          </div>
                          <div id="form-pessoa-juridica-razao"class="mb-3 col-md-6" style="display: none;">
                            <label for="razao" class="form-label">Razão:</label>
                            <input
                              class="form-control"
                              type="text"
                              id="txt_razao"
                              name="txt_razao"
                              style="background-color: whitesmoke"
                              placeholder="Digite o campo Razão:" 
                            />
                          </div>

                          <div class="mb-3 col-md-6">
                            <label for="txt_fantasia" class="form-label">Fantasia:</label>
                            <input
                              class="form-control"
                              type="text"
                              id="txt_fantasia"
                              name="txt_fantasia"
                              style="background-color: whitesmoke"
                              placeholder="Digite no campo Fantasia:" 
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="txt_endereco" class="form-label">Endereço:</label>
                            <input
                              class="form-control"
                              type="text"
                              id="txt_endereco"
                              name="txt_endereco"
                              style="background-color: whitesmoke"
                              placeholder="Digite o campo Endereço:"
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
                              placeholder="Digite o campo Número:" 
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
                            <input
                              class="form-control"
                              type="text"
                              id="txt_estado"
                              name="txt_estado"
                              style="background-color: whitesmoke"
                              placeholder="Digite o campo Estado:" 
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="txt_telefone" class="form-label">Telefone:</label>
                            <input
                              class="form-control"
                              type="text"
                              id="txt_telefone"
                              name="txt_telefone"
                              onkeypress="mascara(this, '## ####-####')"
                              maxlength="14"
                              style="background-color: whitesmoke"
                              placeholder="Digite o campo Telefone:"
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="txt_data_cadastro" class="form-label">Data/Cadastro:</label>
                            <input
                              class="form-control"
                              type="date"
                              id="txt_data_cadastro"
                              name="txt_data_cadastro"
                              style="background-color: whitesmoke"
                              required
                            />
                          </div>
      <hr>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-secondary">Cadastrar</button>
      </div>
      <script>
  function checkCnpj(cnpj)
  {
    $.ajax({
      'url': 'https://receitaws.com.br/v1/cnpj/'+ cnpj.replace(/[^0-9]/g, ''),
      'type': "GET",
      'dataType': 'jsonp',
      'success': function(data){

        if(data.nome == undefined){
          alert(data.status + '' + data.message)
        }else{
          document.getElementById('txt_razao').value = data.natureza_juridica;
          document.getElementById('txt_fantasia').value = data.nome;
          document.getElementById('txt_endereco').value = data.logradouro;
          document.getElementById('txt_numero').value = data.numero;
          document.getElementById('txt_cidade').value = data.municipio;
          document.getElementById('txt_estado').value = data.uf;
          document.getElementById('txt_telefone').value = data.telefone;
        }
        //console.log(dado.municipio);
      }
    })
  }
  
  </script>
      </form>
    </div>
  </div>
</div>

