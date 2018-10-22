<?php

class Usuario {
    private $nome;
    private $tipo;
    private $cpf;
    private $id_usuario;
    private $aco;
    private $tamanho;
    private $cabo;
    private $add;
    private $detalhes;
    private $valor_total;
    
            
    function __get($name){
        return $this->$name;
    }
    function __set($name,$value){
        $this->$name = $value;
    }
   //RADIO BUTTONS
   function valorAco(){
        if($this->aco == "Aço 5160"){
            return 50;
        } else if($this->aco == "Aço 1070"){
            return 60;
        } else {
            return 100;
        }
   }   
   function valorTamanho(){
        if($this->tamanho == "7 Polegadas"){
            return 30;
        } else if($this->tamanho == "8 Polegadas"){
            return 40;
        } else {
            return 50;
        }
   }
   function valorCabo(){
        if($this->cabo == "Chifre"){
            return 50;
        } else if($this->cabo == "Osso"){
            return 40;
        } else {
            return 40;
        }
   }    
    function calculoCheck(){ 
       
       $v = 0;
       foreach ($this->add as $a){
           if($a == "Guarda"){
               $v += 20;
           }if($a == "Pino Mosaico"){
               $v += 40;
           }if($a == "Pino Latao"){
               $v += 20;
           }if($a == "Botao Traseiro"){
               $v += 10;
           }
           
       }return $v; 
   } 
   
   
   function exibeArray(){
        $exibe=" ";
        foreach ($this->add as $a){
            $exibe=$exibe.$a.", ";
        }
        return $this->detalhes = $exibe;
    }

    
   function valorTotal(){
       return $this->valor_total = $this->calculoCheck()+$this->valorAco()+$this->valorCabo()+$this->valorTamanho();
   }
               function __toString(){
        return  "Dados do Usuario: "."<span style='color:red'>".$this->id_usuario."</span>".
                "<br/>Nome: ".$this->nome.
                "<br/>Cpf: ".$this->cpf.
                "<br/>Bainha: ".$this->tipo.
                "<br/>Aço: ".$this->aco.
                "<br/>Tamanho: ".$this->tamanho.
                "<br/>Cabo: ".$this->cabo.
                "<br/>Detalhes: ".$this->detalhes.
                "<br/>Valor Total: ".$this->valor_total;         
    }
}
