<!DOCTYPE html>
<html>
    <head>
        <title>Filtrar Dados</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../Estilo/estilo.css">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
        <link rel="icon" type="image/png" sizes="16x16" href="../Imagens/icon.png">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
        <li class="nav-item">
                <img src="../Imagens/logo.png" width="50" height="50" alt="logo"/>
            </li>
      <li class="nav-item">
          <a class="nav-link" href="../index.php">II Ferreiros</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../Controle/ControleUsuario.php?op=buscar">Buscar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../Resposta/deleta.php">Deletar</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="../Resposta/filtrar.php">Filtrar<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../Resposta/BuscaID.php">Alterar</a>
      </li>
    </ul>
  </div>
</nav>
        <div class="conteudo">
        <form action="../Controle/ControleUsuario.php?op=filtrar" method="post">
            <fieldset>
                <legend>Busca Avançada</legend>
                <div class="formulario">
                <div class="form-group">
                <label for="formGroupExampleInput">Digite o que deseja filtrar</label>
                <input type="text" name="txtbusca" class="form-control" id="formGroupExampleInput" placeholder="Digite o que deseja filtrar">
                </div>
                </div>
    
                <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio1" value="nome" name="rdbusca" checked="checked" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio1">Nome </label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio2" value="tipo" name="rdbusca" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio2">Bainha </label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio3" value="aco" name="rdbusca" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio3">Aço </label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio4" value="tamanho" name="rdbusca" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio4">Tamanho </label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio5" value="cabo" name="rdbusca" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio5">Cabo </label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio5" value="idusuario" name="rdbusca" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio5">ID Usuario </label>
                </div>
                
                <br/><button value="filtrar" type="submit" class="btn btn-outline-light">Filtrar</button>
                
                
<!--                <input type="radio" name="rdbusca" value="nome"/>Nome
                <input type="radio" name="rdbusca" value="partesnome"/>Partes Nome
                <input type="radio" name="rdbusca" value="tipo"/>Tipo-->
<!--                <input type="radio" name="rdbusca" value="aco"/>Aço
                <input type="radio" name="rdbusca" value="tamanho"/>Tamanho
                <input type="radio" name="rdbusca" value="cabo"/>Cabo-->
<!--                <input type="radio" name="rdbusca" value="idusuario"/>ID Usuario-->
                <!--<input type="submit" value="filtrar"/>-->
            </fieldset>
        </form>
        </div>
    </body>
</html>
