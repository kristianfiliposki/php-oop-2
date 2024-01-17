<?php 

    require_once __DIR__ . '/prodotti.php';

    class Cibo extends Prodotto{
        public $ingrdieti;
        public $scadenza;
        public $nome;
        public $marca;

        function __contruct($name,$prezzo,$produzione,$tipo,$ingrdieti,$scadenza,$nome,$marca){
            $this->ingredienti=$ingrdieti;
            $this->scadenza=$scadenza;
            $this->nome=$nome;
            $this->marca=$marca;


        }
    };