<?php

class pessoa{ 
    // visibilidade
       // public
       // protected
       // private
   
     // iremos adicinar propriedades(variavel)
     public $nome ;
     public $etnia;
     public $cor_cabe;
     public $olhos;
     public $sexo;
     public $idade;
     public $altura;
     public $peso;
     public $nacionalidade;    
    
     //iremos adicionar Métodos(Função)
    function __construct($nomeC, 
                        $idadeC, 
                        $etniaC, 
                        $cor_cabeC, 
                        $olhosC, 
                        $sexoC, 
                        $alturaC, 
                        $pesoC, 
                        $nacionalidadeC){

        $this->nome = $nomeC;
        $this->idade = $idadeC;
        $this->etnia = $etniaC;
        $this->cor_cabe = $cor_cabeC;
        $this->olhos = $olhosC;
        $this->sexo = $sexoC;
        $this->altura = $alturaC;
        $this->peso = $pesoC;
        $this->nacionalidade = $nacionalidadeC;
        
    
    
    }
    }
    
?>