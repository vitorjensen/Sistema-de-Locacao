


<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  aria-hidden="true">
 
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
    <form method="POST" id="exampleModal3" action="cadastrar_aluguel.php" enctype="multipart/form-data">
        <div class="row">
                        <div class="mb-3 col-md-6">
                        <label for="txt_nome" class="form-label">Nome:</label>
                        <input
                              class="form-control"
                              type="text"
                              id="txt_nome"
                              name="txt_nome"
                              style="background-color: whitesmoke"
                              placeholder="Digite no campo nome:" 
                              
                            />
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
                            <label for="txt_evento" class="form-label">Evento:</label>
                            <input
                              class="form-control"
                              type="date"
                              id="txt_evento"
                              name="txt_evento"
                              placeholder="Selecione o campo Data Evento:"
                              style="background-color: whitesmoke"
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="txt_data_compra" class="form-label">Data/Compra:</label>
                            <input
                              class="form-control"
                              type="date"
                              id="txt_data_compra"
                              name="txt_data_compra"
                              placeholder="Selecione o campo Data Compra:"
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
                            <input
                              class="form-control"
                              type="text"
                              id="txt_codigo_produto"
                              name="txt_codigo_produto"
                              style="background-color: whitesmoke"
                              placeholder="Digite no campo código do produto:" 
                              
                            />
                          </div>

                          <div class="mb-3 col-md-6">
                            <label for="txt_descricao" class="form-label">Descrição:</label>
                            <input
                              class="form-control"
                              type="text"
                              id="txt_descricao"
                              name="txt_descricao"
                              style="background-color: whitesmoke"
                              placeholder="Digite o campo Descrição:"
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="txt_produto" class="form-label">Produto:</label>
                            <select id="txt_produto" name="txt_produto" class="select2 form-select" style="background-color: whitesmoke">
                            <option value="Selecione...">Selecione...</option>
                            <option value="Vestido">Vestido</option>
                            <option value="Estóla">Estóla</option>
                            <option value="Pashmina">Pashmina</option>
                            <option value="Brinco">Brinco</option>
                            <option value="Clutch">Clutch</option>
                            <option value="Colar">Colar</option>
                            <option value="Anel">Anel</option>
                          </select>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="txt_cor" class="form-label">Cor:</label>
                            <select id="txt_cor" name="txt_cor" class="select2 form-select" style="background-color: whitesmoke">
                            <option value="Selecione...">Selecione...</option>
                            <option value="VERMELHO">VERMELHO</option>
                            <option value="AZUL">AZUL</option>
                            <option value="AMARELO">AMARELO</option>
                            <option value="VERDE">VERDE</option>
                            <option value="DOURADO">DOURADO</option>
                            <option value="PRATA">PRATA</option>
                            <option value="SERENITY">SERENITY</option>
                            <option value="TIFANY">TIFANY</option>
                            <option value="TERRACOTA">TERRACOTA</option>
                            <option value="MARSALA">MARSALA</option>
                            <option value="BRANCO">BRANCO</option>
                            <option value="ROSE">ROSE</option>
                            <option value="MARINHO">MARINHO</option>
                            <option value="FIGO">FIGO</option>
                            <option value="LILAS">LILAS</option>
                            <option value="ROXO">ROXO</option>
                            <option value="SALMÃO">SALMÃO</option>
                            <option value="PRETO">PRETO</option>
                            <option value="PETROLEO">PETROLEO</option>
                            <option value="GELO">GELO</option>
                            <option value="PINK">PINK</option>
                            <option value="CINZA">CINZA</option>
                            <option value="NUDE/AZUL">NUDE/AZUL</option>
                            <option value="HOLOGRAFICO">HOLOGRAFICO</option>
                            <option value="LARANJA">LARANJA</option>
                            <option value="ROYAL">ROYAL</option>
                            <option value="FUCHSIA">FUCHSIA</option>
                            <option value="ROSA">ROSA</option>
                            <option value="VERDE">VERDE</option>
                            <option value="MENTA">MENTA</option>
                            <option value="PESSEGO">PESSEGO</option>
                            <option value="CHUMBO">CHUMBO</option>
                            <option value="MNUDE/VERDE">NUDE/VERDE</option>
                            <option value="MARROM">MARROM</option>
                            <option value="NUDE">NUDE</option>
                            <option value="CORAL">CORAL</option>
                            <option value="ESMERALDA">ESMERALDA</option>
                          </select>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="txt_tipo" class="form-label">Tipo:</label>
                            <select id="txt_tipo" name="txt_tipo" class="select2 form-select" style="background-color: whitesmoke">
                            <option value="Selecione...">Selecione...</option>
                            <option value="Longo">Longo</option>
                            <option value="Curto">Curto</option>
                            <option value="Midi">Midi</option>
                          </select>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="txt_tamanho" class="form-label">Tamanho:</label>
                            <select id="txt_tamanho" name="txt_tamanho" class="select2 form-select" style="background-color: whitesmoke">
                            <option value="Selecione...">Selecione...</option>
                            <option value="38">38</option>
                            <option value="40">40</option>
                            <option value="42">42</option>
                            <option value="46">46</option>
                            <option value="48">48</option>
                            <option value="50">50</option>
                            <option value="52">52</option>
                            <option value="PP">PP</option>
                            <option value="P">P</option>
                            <option value="M">M</option>
                            <option value="G">G</option>
                            <option value="GG">GG</option>
                            <option value="UN">UN</option> 
                          </select>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="txt_qtde" class="form-label">QTDE:</label>
                            <input
                              class="form-control"
                              type="text"
                              id="txt_qtde"
                              name="txt_qtde"
                              maxlength="12"
                              style="background-color: whitesmoke"
                              placeholder="Digite o campo Quantidade:"
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
                            <option value="Crédito 1X">Crédito 1X</option>
                            <option value="Crédito 2X">Crédito 2X</option>
                            <option value="Crédito 3X">Crédito 3X</option>
                            <option value="Crédito 4X">Crédito 4X</option>
                            <option value="Crédito 5X">Crédito 5X</option>
                            <option value="Crédito 6X">Crédito 6X</option>
                            <option value="PIX">PIX</option>
                            <option value="LINK">LINK</option>
                          </select>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="txt_vendedor" class="form-label">Vendedor:</label>
                            <input
                              class="form-control"
                              type="text"
                              id="txt_vendedor"
                              name="txt_vendedor"
                              style="background-color: whitesmoke"
                              placeholder="Digite no campo vendedor:" 
                              
                            />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="txt_observacao" class="form-label">Observação:</label>
                            <textarea class="form-control" id="message-text" name="txt_observacao" style="background-color: whitesmoke"></textarea>
                          </div>
                          <div class="mb-3 col-md-6">
                          <label for="txt_status" class="form-label">Status:</label>
                          <select id="txt_status" name="txt_status" class="select2 form-select" style="background-color: whitesmoke">
                            <option value="Selecione...">Selecione...</option>
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

