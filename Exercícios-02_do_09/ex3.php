<?php
class Circle {

    private $x;
    private $y;
    private $radianos;
    
    public function __construct($par1 , $par2 , $par3){
        
        $this->x = $par1;
        $this->y = $par2;
        $this->radius = $par3;


    }
    // Método get e set
    
        public function __set($atributo, $value){
            $this->$atributo = $value ;
    }

        public function __get($atributo){
            return $this->$atributo;
    }



    public function Circle($radius,$x = 0, $y = 0 ) {
        $this->x = $x;
        $this->y = $y;
        $this->setRadianos($radius);
    }
 
    public function area() { return pi() * ($this->radius * 2); }

    public function mova($point) {
        $this->x = $ponto->getX();
        $this->y = $ponto->getY();
    }

    public function increase($value) { $this->setRadianos($this->radianos + $value); }

    public function decrease($value) { $this->setRadianos($this->radianos - $value); }

    public function getX() { return $this->x; }

    public function setX($x) { $this->x = $x; }

    public function getY() { return $this->y; }

    public function setY($x) { $this->y = $y; }

    public function getRadianos() { return $this->radianos; }

    public function setRadianos($radianos) { $this->radianos = $radianos < 0 ? 0 : $radius; }
}
?>