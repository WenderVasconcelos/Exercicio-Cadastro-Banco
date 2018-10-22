<?php
include '../Connecta/ConexaoBanco.classe.php';
class Manipula {
    
    private $conexao = null;
   
    function __construct() {

        $this->conexao = ConexaoBanco::getInstancia();
        
    }
    public function cadastraUsuario($u){
        try {
            $stat = $this->conexao->prepare("insert into "
                     ."usuario(id_usuario,nome,cpf,tipo,aco,tamanho,cabo,detalhes,valor_total)"
                     ."values(null,?,?,?,?,?,?,?,?)");

            $stat->bindValue(1,$u->nome);
            $stat->bindValue(2,$u->cpf);
            $stat->bindValue(3,$u->tipo);
            $stat->bindValue(4,$u->aco);
            $stat->bindValue(5,$u->tamanho);
            $stat->bindValue(6,$u->cabo);
            $stat->bindValue(7,$u->exibeArray());
            $stat->bindValue(8,$u->valorTotal());
            
            $stat->execute();
            $this->conexao = null; 
        } catch (Exception $e) {
            echo "Erro ao cadastrar usuário";
        }
    }
public function buscarUsuario(){
    try{
        $sql= $this->conexao->query("select * from usuario");
        $array=array();
        $array=$sql->fetchAll(PDO::FETCH_CLASS,'Usuario');
        $this->conexao =NULL;
        return $array;
    }  catch (PDOException $e){
        echo "Erro ao buscar".$e;
    }
}
    public function deletaUsuario($idusuario){
        try{
            $sql = $this->conexao->prepare("delete"." from usuario where id_usuario=?");
            $sql->bindValue(1,$idusuario);
            $sql->execute();
            $this->conexao=null;
        }  catch (PDOException $e){
    echo "Erro ao DELETAR.".$e;
        }
    }
    public function filtraUsuario($query){
        try{
        $sql= $this->conexao->query("select * from usuario ".$query);
        $array=array();
        $array=$sql->fetchAll(PDO::FETCH_CLASS,'Usuario');
        $this->conexao =null;
        return $array;
    }  catch (PDOException $e){
        echo "Erro ao buscar".$e;
    }
    }
    public function alterarUsuario($u){
        try{
        $sql = $this->conexao->prepare('update usuario set nome=?, cpf=?, tipo=?, aco=?, tamanho=?, cabo=?, detalhes=?, valor_total=? where id_usuario=?');
        
        $sql->bindValue(1, $u->nome);
        $sql->bindValue(2, $u->cpf);
        $sql->bindValue(3, $u->tipo);
        $sql->bindValue(4, $u->aco);
        $sql->bindValue(5, $u->tamanho);
        $sql->bindValue(6, $u->cabo);
        $sql->bindValue(7, $u->exibeArray());
        $sql->bindValue(8, $u->valorTotal());
        $sql->bindValue(9, $u->id_usuario);
        $sql->execute();
        $this->conexao=null;
       }catch(PDOException $e){
           echo "Erro ao alterar".$e;
    }
}
}