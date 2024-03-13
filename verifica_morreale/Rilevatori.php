<?php
    class Rilevatori{
        private $identificativo;
        private $unitaDiMisura;
        private $codiceSeriale;
        private $Misur = [];

        function __construct($identificativo, $codiceSeriale, $unitaDiMisura,  $Misur=[]){
            $this->identificativo = $identificativo;
            $this->codiceSeriale = $codiceSeriale;
            $this->unitaDiMisura = $unitaDiMisura;
            

            $Misur = array(
                new Misurazioni("", ""), 
                new Misurazioni("", ""), 
                new Misurazioni("", ""),
                new Misurazioni("", ""),
                new Misurazioni("", "") 
            );
          
        }

        function getIdentificativo(){
            return $this->identificativo;
        }

        function setIdentificativo($identificativo){
            $this->identificativo = $identificativo;
        }

       

        function stampaCodiceSeriale(){
            return "codiceSeriale: $this->codiceSeriale";
        }

    
    }

    function addMisurazione(Misurazioni $m){
        array_push($Misur, $m);
    }

?>