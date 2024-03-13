<?php

    class Impianto{
        private $rilevat = [];
        private $nome="inpianto p";
        private $latitudine=99;
        private $longitudine=104;
        
        function __construct($rilevat=[]){
            
            $rilevat = array(
                new Rilevatori("", "", ""), 
                new Rilevatori("", "", ""), 
                new Rilevatori("", "", ""),
                new Rilevatori("", "", ""),
                new Rilevatori("", "", "") 
            );
        
            $this->rilevat = $rilevat;
            
        }


        function getRilevatori(){
            return $this->rilevat;
        }

        function setRilevatori($rilevat){
            $this->rilevat = $rilevat;
        }

        function getNome(){
            return $this->nome;
        }

        function setNome($nome){
            $this->nome = $nome;
        }

        function getLatitudine(){
            return $this->latitudine;
        }

        function setLatitudine($latitudine){
            $this->latitudine = $latitudine;
        }

        function getLongitudine(){
            return $this->longitudine;
        }

        function setLongitudine($longitudine){
            $this->longitudine = $longitudine;
        }

        
        function toString(){
            $strng= "nome:  $this->nome longitudine:   $this->longitudine  latitudine:  $this->latitudine";
            return $strng;
        }


        function getRilevatoreCodiceSeriale($codiceSeriale){
            $arr = [];
            foreach($this->getRilevatore() as $a){
                if($a->get_name() == $codiceSeriale){
                    array_push($rilevatore, $a);
                }
            }
            return $rilevatore;
        }

        function addRilevatore(Rilevatori $r){
            array_push($this->rilevat, $r);
        }
    }
?>