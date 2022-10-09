


<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  aria-hidden="true">
 
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
    <form method="POST" id="exampleModal2" action="cadastrar_login.php" enctype="multipart/form-data">
    <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                  <label for="username" class="form-label">Nome:</label>

                  </div>
                  <div class="input-group input-group-merge">
                    <input
                    type="text"
                    class="form-control"
                    id="txt_nome"
                    name="txt_nome"
                    placeholder="Digíte seu Nome:"
                    autofocus
                  />
                  </div>
                </div>
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                  <label for="username" class="form-label">Login:</label>

                  </div>
                  <div class="input-group input-group-merge">
                    <input
                    type="text"
                    class="form-control"
                    id="txt_login"
                    name="txt_login"
                    placeholder="Digíte seu Login:"
                    autofocus
                  />
                  </div>
                </div>
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Senha</label>

                  </div>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="txt_senha"
                      class="form-control"
                      name="txt_senha"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                    />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>
                <hr>
                <div class="mb-3">
 
                  <button type="submit" class="btn btn-primary d-grid w-100">Cadastrar</button>
                </div>
      </form>
    </div>
  </div>
</div>

