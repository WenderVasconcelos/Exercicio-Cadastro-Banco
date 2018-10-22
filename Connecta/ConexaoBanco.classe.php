<?php


class ConexaoBanco extends PDO{
//variavel que ira receber a conexão do banco    
    private static $instancia=null;
    public function ConexaoBanco($dsn,$usuario,$senha){
        //esta linha constroi conexao a partir da classe pai PDO
        parent::__construct($dsn, $usuario, $senha);
        
    }
    public static function getInstancia(){
        //verifica a inexistencia de valores
        if(!isset(self::$instancia)){
            // try/catch gera exceção para retorno de erro 
            //utilizado para personalizar dentro de try executa catch
            try{
                //recebendo valores para conexão 
                self::$instancia = new ConexaoBanco("mysql:dbname=aulabanco;host=localhost","root","");
            }  catch (Exception $e){
                echo "Erro ao conectar";
                exit();
            }
        }
        return self::$instancia;
    }
}
