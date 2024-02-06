<?php
    class Automobile extends Veicolo{
        private $modello;

        public function __construct($modello)
        {
            $this->modello = $modello;
        }
    }

?>