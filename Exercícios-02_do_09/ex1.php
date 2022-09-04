<?php

class invoice{
    private $numeroFat;
    private $descItem;
    private $qtdItem;
    private $preco;


        public function __construct($par1, $par2 , $par3 , $par4){

            $this->numeroFat = $par1;
            $this->descItem = $par2;
    if ($par3 <= 0){
        $this->qtdItem = 0;
    }
    else{
        $this->qtdItem = $par3;
    }
     
    if($par4 <= 0.0){
        $this->preco = 0.0;
    }
    else{
        $this->preco = $par4;
    }
    }

        //método set e um método get

        public function __set($atributo, $value){
            $this->$atributo = $value ;
        }

        public function __get($atributo){
            return $this->$atributo;
        }

    // getInvoiceAmount

        public function getInvoiceAmount(){
            return ($this->preco * $this->qtdItem);
        }



} //fim da classe

    $informatica = new invoice( 19 , "Monitor", 20, 499.99);

    echo "<p>Numero da FATURA : {$informatica->numeroFat}</p>";
    
    echo "<p>Descrição de Item : {$informatica->descItem}</p>";

    echo "<p>Quantidade : {$informatica->qtdItem}</p>";

    echo "<p>Preço : {$informatica->preco}</p>";

    echo "<p> Total : {$informatica->getInvoiceAmount()}</p>";
?>