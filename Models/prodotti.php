<?php 

class Prodotto{
    public $name;
    public $img;
    public $price;
    public $productionDate;
    public $tipo;

     public function __construct($name,$img,$prezzo,$produzione,$tipo){
        $this->name=$name;
        $this->img=$img;
        $this->price=$prezzo;
        $this->productionDate=$produzione;
        $this->tipo=$tipo;
    } 

    function Getprodotto (){
       return "costa: " . $this->price . " il prodotto è per solo: " . $this->tipo;
    }
}