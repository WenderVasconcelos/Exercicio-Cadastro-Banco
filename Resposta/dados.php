<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../Estilo/estilo.css">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
        <link rel="icon" type="image/png" sizes="16x16" href="../Imagens/icon.png">
        <title>Buscar Dados</title>
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
      <li class="nav-item active">
        <a class="nav-link" href="../Controle/ControleUsuario.php?op=buscar">Buscar<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../Resposta/deleta.php">Deletar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../Resposta/filtrar.php">Filtrar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../Resposta/BuscaID.php">Alterar</a>
      </li>
    </ul>
  </div>
</nav>
        <div class="conteudo">  
        <?php
        session_start();
       include '../ClassePrincipal/Usuario.php';
       
       $dados = unserialize($_SESSION['dados']);
       foreach ($dados as $d){
           echo $d."<br/>_______________________________________________________<br/>";
       }        
        ?>
        </div>
    </body>
</html>
