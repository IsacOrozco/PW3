<?php

class empregados{
    private $nome;
    private $sobrenome;
    private $salario = 2022;

    public function __construct($par1 , $par2 , $par3){
        
        $this->nome = $par1;
        $this->sobrenome = $par2;

        if ($par3 <= 0){
            $this->salario = 0.0;
        }
        else{
            $this->salario = $par3;
        }

    }
    // Método get e set
    
        public function __set($atributo, $value){
            $this->$atributo = $value ;
    }

        public function __get($atributo){
            return $this->$atributo;
    }
    public function Empregado($salario, $nome = "SEM NOME", $sobrenome = "SEM SOBRENOME") {
        $this->setNome($nome);
        $this->setSobreNome($sobrenome);
        $this->setSalario($salario);
    }

    public function salarioIncrease() { $this->salario += $this->salario * 10 / 100; }

    public function getNome() { return $this->nome; }

    public function setNome($nome) { $this->name = $nome; }

    public function getSobrenome() { return $this->sobrenome; }

    public function setSobrenome($sobrenome) { $this->sobrenome = $sobrenome; }

    public function getSalario() { return $salario; }

    public function setSalario($salario) { $this->salario = $salario < 0 ? 0 : $salario; }
}
?>