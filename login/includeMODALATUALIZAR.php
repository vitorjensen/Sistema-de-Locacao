


<div class="modal fade" id="exampleModal12" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  aria-hidden="true">
 
 <div class="modal-dialog modal-dialog-centered" role="document">
   <div class="modal-content">
     <div class="modal-header">
       <h5 class="modal-title" id="exampleModalLabel">Editar:</h5>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>
     <hr>
     <div class="modal-body">
   <form method="POST" id="exampleModal12" action="atualizar_login.php" enctype="multipart/form-data">
       <div class="row mb-3">
                         <label class="col-sm-2 col-form-label" for="basic-default-name">Nome:</label>
                         <div class="col-sm-10">
                           <input type="text" class="form-control" id="recipient-nome" name="txt_nome" placeholder="Digite seu nome:">
                         </div>
                       </div>
                       <div class="row mb-3">
                         <label class="col-sm-2 col-form-label" for="basic-default-company">Login:</label>
                         <div class="col-sm-10">
                           <input type="text" class="form-control" id="recipient-login" name="txt_login"  placeholder="Digite seu Login:">
                         </div>
                       </div>
                       <div class="row mb-3">
                         <label class="col-sm-2 col-form-label" for="basic-default-email">Senha:</label>
                         <div class="col-sm-10">
                           <div class="input-group input-group-merge">
                           <input
                            type="password"
                            id="recipient-senha"
                            class="form-control"
                            name="txt_senha"
                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                            aria-describedby="password"
                          />
                         </div>
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

