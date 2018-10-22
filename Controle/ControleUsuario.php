<!DOCTYPE html>
<html>
    <head>
        <title>Resposta Usuario</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../Estilo/estilo.css">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
        <link rel="icon" type="image/png" sizes="16x16" href="../Imagens/icon.png">
        
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
            <img src="../Imagens/logo.png" width="50" height="50" alt="logo"/>
        </li>
      <li class="nav-item active">
          <a class="nav-link" href="../index.php">II Ferreiros<span class="sr-only">(current)</span></a>
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
      <li class="nav-item">
        <a class="nav-link" href="../Resposta/BuscaID.php">Alterar</a>
      </li>
    </ul>
  </div>
</nav>
        </div>
        <div class="conteudo">
<?php
session_start();
session_unset();
include '../ClassePrincipal/Usuario.php';
include '../ClasseManipula/Manipula.php';

switch($_GET['op']){
    case 'cadastrar':
    $u = new Usuario();
    $u->nome = $_POST['nome'];
    $u->cpf = $_POST['cpf'];
    $u->tipo = $_POST['tipo'];
    $u->aco = $_POST['aco'];
    $u->tamanho = $_POST['tamanho'];
    $u->cabo = $_POST['cabo'];
    $u->add = $_POST['add'];

    $manipula = new Manipula();
    $manipula->cadastraUsuario($u);
    
    echo $u;
    break;
    case 'buscar':  
        $dados = new Manipula();
        $array=array();
        $array = $dados->buscarUsuario();
        print_r($array);
        $_SESSION['dados'] = serialize($array);
        header('location:../Resposta/dados.php');
    break;
   case 'deletar':
            $manipula = new Manipula();
            $manipula->deletaUsuario($_POST['idusuario']);
            header("location:../Controle/ControleUsuario.php?op=buscar");
   break;
    case 'filtrar': 
        $manipula = new Manipula();
        $usuario = array();
        if($_POST['rdbusca']=='nome'){
            $query ="where nome='".$_POST['txtbusca']."'";
        }
        else if ($_POST['rdbusca']=='idusuario') {
            $query ="where id_usuario='".$_POST['txtbusca']."'";
        }
        else if ($_POST['rdbusca']=='tipo') {
            $query ="where tipo='".$_POST['txtbusca']."'";
        }
        else if ($_POST['rdbusca']=='aco') {
            $query ="where aco='".$_POST['txtbusca']."'";
        }
        else if ($_POST['rdbusca']=='tamanho') {
            $query ="where tamanho='".$_POST['txtbusca']."'";
        }
        else if ($_POST['rdbusca']=='cabo') {
            $query ="where cabo='".$_POST['txtbusca']."'";
        }
        else if ($_POST['rdbusca']=='detalhes') {
            $query ="where detalhes='".$_POST['txtbusca']."'";
        }
            $dados = $manipula->filtraUsuario($query);
            $_SESSION['dados'] = serialize($dados);
            header("location:../Resposta/dados.php");
            break;
    case 'buscaid':
        $query = 'where id_usuario ='.$_POST['idusuario'];
        $m = new Manipula();
        $usuario = $m->filtraUsuario($query);
         
        
        if(count($usuario)!=0){
           
        $_SESSION['dados'] = serialize($usuario);
        header('location:../Resposta/alterar.php');
        }else{echo "Usuario não existe!";
        }
    break;
    case 'confalterar':
        $u = new Usuario();
        $u->id_usuario = $_POST['idusuario'];
        $u->nome = $_POST['nome'];
        $u->cpf = $_POST['cpf'];
        $u->tipo = $_POST['tipo'];
        $u->aco = $_POST['aco'];
        $u->tamanho = $_POST['tamanho'];
        $u->cabo = $_POST['cabo'];
        $u->add = $_POST['add'];
        $m = new Manipula();
        $m->alterarUsuario($u);
        $_SESSION['dados'] = serialize($array);
        header("location:../Controle/ControleUsuario.php?op=buscar");
        
    break;
       default :echo 'deu erro no switch';
           
          
}?>
        </div>
    </body>
</html>
