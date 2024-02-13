<?php
    class Automobile extends Veicolo{
        private $modello;

        public function __construct($marca, $anno, $modello)
        {
            parent::Automobile($marca, $anno);
            $this->modello = $modello;
        }

        public function __tostring(){
            return parent::__tostring() . " modello: $modello";
        }
    }

?>