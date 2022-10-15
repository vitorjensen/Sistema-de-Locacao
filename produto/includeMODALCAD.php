<?PHP
require_once('../conexao/banco.php');

$sql = "select * from tb_fornecedor";
$sql = mysqli_query($con, $sql) or die ("Erro na sql!") ;


?>



<div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  aria-hidden="true">
 
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
    <form method="POST" id="exampleModal5" action="cadastrar_produto.php" enctype="multipart/form-data">
    <div class="row">
    <div class="mb-3 col-md-6">
                            <label class="form-label" for="txt_arquivo">Foto:</label>
                            <div class="input-group input-group-merge">
                              <span class="input-group-text"></span>
                              <input
                                type="file"
                                id="txt_arquivo"
                                name="txt_arquivo"
                                class="form-control"
                                style="background-color: whitesmoke"
                              />
                            </div>
                            <!--<span class="erro">Por favor, insira a foto.</span>!-->
                          </div>

                          <div class="mb-3 col-md-6">
                            <label for="txt_fornecedor" class="form-label">Fornecedor:</label>
                            <select id="txt_fornecedor" name="txt_fornecedor" class="select2 form-select" style="background-color: whitesmoke" >
                            <option value="Selecione...">Selecione...</option>
                            <?php while ($dados = mysqli_fetch_array($sql)) { ?>
                           <option value="<?php echo $dados['for_fantasia']; ?>"> <?php echo utf8_encode($dados['for_fantasia']) ; ?> </option>
                          <?php } ?>
                          </select>
                          
                        </div>
                          <div class="mb-3 col-md-6">
                            <label for="txt_descricao" class="form-label">Descrição:</label>
                            <input class="form-control" type="text" name="txt_descricao" id="txt_descricao" style="background-color: whitesmoke" placeholder="Digite o campo Descrição:" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="txt_descricao_add" class="form-label">Descrição/ADD:</label>
                            <input
                              class="form-control"
                              type="text"
                              id="txt_descricao_add"
                              name="txt_descricao_add"
                              style="background-color: whitesmoke"
                              placeholder="Digite o campo Descrição/ADD:" 
                            />
                          </div>

                          <div class="mb-3 col-md-6">
                            <label for="txt_custo" class="form-label">Custo:</label>
                            <input
                              class="form-control"
                              type="text"
                              id="txt_custo"
                              name="txt_custo"
                              style="background-color: whitesmoke"
                              placeholder="Digite no campo Custo:" 
                              
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="txt_indice" class="form-label">Indice:</label>
                            <input
                              class="form-control"
                              type="text"
                              id="txt_indice"
                              name="txt_indice"
                              style="background-color: whitesmoke"
                              placeholder="Digite o campo Indice:" 
                              
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
                            <label for="txt_tamanho" class="form-label">Tamanho:</label>
                            <select id="txt_tamanho" name="txt_tamanho" class="select2 form-select" style="background-color: whitesmoke" >
                            <option value="Selecione...">Selecione...</option>
                            <option value="36">36</option>
                            <option value="38">38</option>
                            <option value="40">40</option>
                            <option value="42">42</option>
                            <option value="42">44</option>
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
                            <label for="txt_aluguel" class="form-label">Aluguel:</label>
                            <select id="txt_aluguel" name="txt_aluguel" class="select2 form-select" style="background-color: whitesmoke" >
                            <option value="Selecione...">Selecione...</option>
                            <option value="Sim">Sim</option>
                            <option value="Não">Não</option>
                          </select>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="txt_qtde" class="form-label">QTDE:</label>
                            <input class="form-control" type="text" name="txt_qtde" id="txt_qtde" style="background-color: whitesmoke" placeholder="Digite o campo Quantidade:" />
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
                            <label for="txt_status" class="form-label">Status:</label>
                            <select id="txt_status" name="txt_status" class="select2 form-select" style="background-color: whitesmoke" >
                            <option value="Selecione...">Selecione...</option>
                            <option value="Ativo">Ativo</option>
                            <option value="Inativo">Inativo</option>
                          </select>
                          </div>
                          
                          
                          
                          <div class="mb-3 col-md-6">
                            <label for="txt_tipo" class="form-label">Tipo:</label>
                            <select id="txt_tipo" name="txt_tipo" class="select2 form-select" style="background-color: whitesmoke" >
                            <option value="Selecione...">Selecione...</option>
                            <option value="Longo">Longo</option>
                            <option value="Curto">Curto</option>
                            <option value="Midi">Midi</option>
                          </select>
                          </div>
                          

                          <div class="mb-3 col-md-6">
                            <label for="txt_data_cadastro" class="form-label">Data/Cadastro:</label>
                            <input
                              class="form-control"
                              type="date"
                              id="txt_data_cadastro"
                              name="txt_data_cadastro"
                              style="background-color: whitesmoke"
                              placeholder="Selecione o campo Data/Cadastro:" 
                              
                            />
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
</div>

