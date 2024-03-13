<?php
    class Misurazioni{
        private $data;
        private $valore;

        function __construct($data, $valore){
            $this->data = $data;
            $this->valore = $valore;

        }

        function getData(){
            return $this->data;
        }

        function setData($data){
            $this->data = $data;
        }

        function getValore(){
            return $this->valore;
        }

        function setValore($valore){
            $this->valore = $valore;
        }

        function toString(){
            return "dta: $this->data, valore: $this->valore";
        }
    }
?>