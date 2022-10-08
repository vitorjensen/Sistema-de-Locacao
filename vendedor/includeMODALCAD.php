


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  aria-hidden="true">
 
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Novo:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <hr>
      <div class="modal-body">
    <form method="POST" id="exampleModal" action="cadastrar_vendedor.php" enctype="multipart/form-data">
        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Nome:</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="txt_nome" name="txt_nome" placeholder="Digite seu nome:">
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Empresa:</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="txt_empresa" name="txt_empresa"  placeholder="Digite o campo empresa:">
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-email">Email:</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <input type="text" id="txt_email" name="txt_email" class="form-control" placeholder="Digite o campo email:" aria-label="john.doe" aria-describedby="basic-default-email2">
                            </div>
                          </div>
                      </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-message">Data:</label>
                          <div class="col-sm-10">
                          <input type="date" id="txt_data_cadastro" name="txt_data_cadastro" class="form-control" placeholder="Digite o campo de data:" aria-label="john.doe" aria-describedby="basic-default-email2">
                          </div>
                        </div>
                        <div class="row justify-content-end">
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

