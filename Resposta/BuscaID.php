<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../Estilo/estilo.css">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
        <link rel="icon" type="image/png" sizes="16x16" href="../Imagens/icon.png">
        
        <title>Alterar Dados</title>
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
      <li class="nav-item">
        <a class="nav-link" href="../Resposta/filtrar.php">Filtrar</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="../Resposta/BuscaID.php">Alterar<span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
        <div class="conteudo">
        <form action="../Controle/ControleUsuario.php?op=buscaid" method="post">
            <div class="formulario">
            <div class="form-group">
                <label for="formGroupExampleInput">Digite o ID: </label>
                <input type="text" name="idusuario" class="form-control" id="formGroupExampleInput" placeholder="Digite seu ID">
                <br/><button value="Enviar" type="submit" class="btn btn-outline-light">Enviar</button>
            </div>
        </form>
    
        <?php
        include '../ClassePrincipal/Usuario.php';
        include '../ClasseManipula/Manipula.php';
            $m = new Manipula();
            $array=array();
            $array=$m->buscarUsuario();
            foreach ($array as $a){
                echo $a."<br/>_______________________________________________________<br/>";
            }
            
        ?>
    </div>
    </body>
</html>
