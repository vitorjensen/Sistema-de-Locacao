

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  aria-hidden="true">
 
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
    <form method="POST" id="exampleModal" action="" enctype="multipart/form-data">
        <div class="row">
        <div class="mb-3 col-md-6">
                            <label for="txt_nome" class="form-label">Nome:</label>
                            <select id="txt_nome" name="txt_nome" class="select2 form-select" style="background-color: whitesmoke" >
                            <option value="Selecione...">Selecione...</option>
                            <?php while ($dados = mysqli_fetch_array($sql3)) { ?>
                           <option value="<?php echo $dados['cli_codigo']; ?>"> <?php echo utf8_encode($dados['cli_nome']) ; ?> </option>
                          <?php } ?>
                          </select>
                          
                        </div>
                          <div class="mb-3 col-md-6">
                            <label for="txt_data_inicial" class="form-label">Data/inicial:</label>
                            <input
                              class="form-control"
                              type="date"
                              id="txt_data_inicial"
                              name="txt_data_inicial"
                              placeholder="Selecione o campo Data Inicial:"
                              style="background-color: whitesmoke"
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="txt_data_compra" class="form-label">Data/Final:</label>
                            <input
                              class="form-control"
                              type="date"
                              id="txt_data_final"
                              name="txt_data_final"
                              placeholder="Selecione o campo Data Final:"
                              style="background-color: whitesmoke"
                            />
                          </div>
                          
                          <div class="mb-3 col-md-6">
                            <label for="txt_codigo_produto" class="form-label">Código/Produto:</label>
                            <select id="txt_codigo_produto" name="txt_codigo_produto" class="select2 form-select" style="background-color: whitesmoke" onchange="PreencherValor(this)">
                            <option value="Selecione...">Selecione...</option>
                            <?php while ($dados = mysqli_fetch_array($sql)) { ?>
                           <option value="<?php echo $dados['pro_codigo']; ?>"> <?php echo utf8_encode($dados['pro_codigo'].' - '.$dados['pro_descricao']) ; ?> </option>
                           <?php } ?>
                          </select>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="txt_qtde" class="form-label">QTDE:</label>
                            <input
                              class="form-control"
                              type="text"
                              id="txt_qtde"
                              name="txt_qtde"
                              style="background-color: whitesmoke"
                              placeholder="Digite o campo QTDE:"
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="txt_valor" class="form-label">Valor:</label>
                            <input
                              class="form-control"
                              type="text"
                              id="txt_valor"
                              name="txt_valor"
                              style="background-color: whitesmoke"
                              placeholder="Digite o campo Valor:"
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="txt_valor_sinal" class="form-label">Valor Sinal:</label>
                            <input
                              class="form-control"
                              type="text"
                              id="txt_valor_sinal"
                              name="txt_valor_sinal"
                              maxlength="12"
                              style="background-color: whitesmoke"
                              placeholder="Digite o campo Valor Sinal:"
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="txt_resta_pagar" class="form-label">Resta Pagar:</label>
                            <input
                              class="form-control"
                              type="text"
                              id="txt_resta_pagar"
                              name="txt_resta_pagar"
                              style="background-color: whitesmoke"
                              placeholder="Digite o Resta Pagar:"
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="txt_pago_total" class="form-label">Pago Total:</label>
                            <select id="txt_pago_total" name="txt_pago_total" class="select2 form-select" style="background-color: whitesmoke">
                            <option value="Selecione...">Selecione...</option>
                            <option value="SIM">SIM</option>
                            <option value="NÂO">NÂO</option>
                          </select>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="txt_tipo_pagamento" class="form-label">Tipo/Pagamento:</label>
                            <select id="txt_tipo_pagamento" name="txt_tipo_pagamento" class="select2 form-select" style="background-color: whitesmoke">
                            <option value="Selecione...">Selecione...</option>
                            <option value="Débito">Débito</option>
                            <option value="CRÉDITO 1X">CRÉDITO 1X</option>
                            <option value="CRÉDITO 2X">CRÉDITO 2X</option>
                            <option value="CRÉDITO 3X">CRÉDITO 3X</option>
                            <option value="CRÉDITO 4X">CRÉDITO 4X</option>
                            <option value="CRÉDITO 5X">CRÉDITO 5X</option>
                            <option value="CRÉDITO 6X">CRÉDITO 6X</option>
                            <option value="PIX">PIX</option>
                            <option value="LINK">LINK</option>
                          </select>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="txt_vendedor" class="form-label">Vendedor:</label>
                            <select id="txt_vendedor" name="txt_vendedor" class="select2 form-select" style="background-color: whitesmoke">
                            <option value="Selecione...">Selecione...</option>
                            <?php while ($dados = mysqli_fetch_array($sql2)) { ?>
                              <option valeu="<?php echo $dados['ven_nome']; ?>"> <?php echo utf8_encode($dados['ven_nome']) ; ?> </option>
                            <?php } ?>
                          </select>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="txt_observacao" class="form-label">Observação:</label>
                            <textarea class="form-control" id="message-text" name="txt_observacao" style="background-color: whitesmoke"></textarea>
                          </div>
                          <div class="mb-3 col-md-6">
                          <label for="txt_status" class="form-label">Status:</label>
                          <select id="txt_status" name="txt_status" class="select2 form-select" style="background-color: whitesmoke">
                            <option value="LOCADO">LOCADO</option>
                            <option value="RESERVADO">RESERVADO</option>
                            <option value="DEVOLVIDO">DEVOLVIDO</option>
                          </select>
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