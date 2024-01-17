<?php 

    class User  {
        public $nome;
        public $cognome;
        public $ruolo;

        public function __construct($name,$surname,$role){
            $this->nome=$name;
            $this->cognome=$surname;
            $this->ruole=$role;
        }
    }