<?php

class empregados{
    private $primnome;
    private $sobrenome;
    private $salamensal;
    private $salanual;

    public function __construct($par1 , $par2 , $par3){
        
        $this->primnome = $par1;
        $this->sobrenome = $par2;

        if ($par3 <= 0){
            $this->salamensal = 0.0;
        }
        else{
            $this->salamensal = $par3;
        }

    }
    // Método get e set
    
        public function __set($atributo, $value){
            $this->$atributo = $value ;
    }

        public function __get($atributo){
            return $this->$atributo;
    }

    public function salaanual(){
        return ($this->salamensal * 12);
    }
        public function get(){
            return ($this->salamensal * 0.10);
    }
    
}//fim da classe
    $empresa = new empregados( "Cairson" , "Napegadinha", 2022);

    echo "<p>Nome : {$empresa->primnome}</p>";
    
    echo "<p> Sobrenome : {$empresa->sobrenome}</p>";

    echo "<p> Salário mensal : {$empresa->salamensal}</p>";

    echo "<p> Salário anual : {$empresa->salaanual()}</p>";

    echo "<p>10% do sálario mensal : {$empresa->get()}</p>";
    

?>