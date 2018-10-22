<!DOCTYPE html>
<html>
    <head>
        <title>Monte sua faca</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="Estilo/estilo.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="icon" type="image/png" sizes="16x16" href="Imagens/icon.png">

    </head>
    <body> 
        
        <div class="navegacao">
        
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
        <li class="nav-item">
            <img src="Imagens/logo.png" width="50" height="50" alt="logo"/>
        </li>
      <li class="nav-item active">
          <a class="nav-link" href="index.php">II Ferreiros<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Controle/ControleUsuario.php?op=buscar">Buscar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Resposta/deleta.php">Deletar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Resposta/filtrar.php">Filtrar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Resposta/BuscaID.php">Alterar</a>
      </li>
    </ul>
  </div>
</nav>
        </div>
        <div class="conteudo">                      
        <form method="post" action="Controle/ControleUsuario.php?op=cadastrar"><br/>
            <div class="formulario">
            <div class="form-group">
                <label for="formGroupExampleInput">Nome:</label>
                <input type="text" name="nome" class="form-control" id="formGroupExampleInput" placeholder="Digite seu nome">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">CPF:</label>
                <input type="text" name="cpf" class="form-control" id="formGroupExampleInput2" placeholder="Digite seu CPF">
            </div>
            </div>
            <div class="aco">
            
            <!--AÇO-->
                <br/><label>Seleicone o Aço</label><br/>
                
                <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio1" value="Aco 5160" name="aco" checked="checked" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio1">Aço 5160 </label><span style='color:green'> R$50,00</span><br/>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio2" value="Aco 1070" name="aco" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio2">Aço 1070 </label><span style='color:green'> R$60,00</span><br/>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio3" value="Aco 1095" name="aco" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio3">Aço 1095 </label><span style='color:green'> R$100,00</span><br/>
                </div>
            </div>

            <div class="tamanho">

                <!--TAMANHO-->
                <br/><label>Selecione o Tamanho da Lâmina</label><br/>
                
                <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio4" value="7 Polegadas" name="tamanho" checked="checked" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio4">7 Polegadas </label><span style='color:green'> R$30,00</span><br/>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio5" value="8 Polegadas" name="tamanho" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio5">8 Polegadas </label><span style='color:green'> R$40,00</span><br/>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio6" value="9 Polegadas" name="tamanho" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio6">9 Polegadas </label><span style='color:green'> R$50,00</span><br/>
                </div>
            </div>

            <div class="cabo">
                <!--CABO-->
               <br/><label>Selecione o Cabo</label><br/> 
                <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio7" value="Chifre" name="cabo" checked="checked" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio7">Chifre </label><span style='color:green'> R$50,00</span><br/>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio8" value="Osso" name="cabo" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio8">Osso </label><span style='color:green'> R$40,00</span><br/>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio9" value="Madeira" name="cabo" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio9">Madeira </label><span style='color:green'> R$40,00</span><br/>
                </div>
            </div>

            <div class="detalhes">

                <!--DETALHES-->
                <br/><label>Selecione Adicionais ao Cabo</label><br/>
                
                <div class="custom-control custom-checkbox">
                    <input name="add[]" type="checkbox" value="Guarda" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">Guarda</label><span style='color:green'>R$20,00</span><br/>
                </div>
                <div class="custom-control custom-checkbox">
                    <input name="add[]" type="checkbox" value="Pino Mosaico" class="custom-control-input" id="customCheck2">
                    <label class="custom-control-label" for="customCheck2">Pino Mosaico</label><span style='color:green'>R$40,00</span><br/>
                </div>
                <div class="custom-control custom-checkbox">
                    <input name="add[]" type="checkbox" value="Pino Latao" class="custom-control-input" id="customCheck3">
                    <label class="custom-control-label" for="customCheck3">Pino Latão</label><span style='color:green'>R$20,00</span><br/>
                </div>
                <div class="custom-control custom-checkbox">
                    <input name="add[]" type="checkbox" value="Botao Traseiro" class="custom-control-input" id="customCheck4">
                    <label class="custom-control-label" for="customCheck4">Botão Traseiro</label><span style='color:green'>R$10,00</span><br/>
                </div>
            </div>

            <div class="bainha">

                <!--BAINHA-->
                <br/><label>Bainha</label>
                
                <select name="tipo" class="custom-select">
                    <option selected>Selecione...</option>
                    <option value="sim">Sim</option>
                    <option value="nao">Não</option>
                </select><br/>
                <br/><button type="submit" class="btn btn-outline-light">Efetuar Pedido</button>
                <br/><br/>
            </div>

        </form>
        </div>

    </body>
</html>
