<?php
class RilevatoriU extends Rilevatori
{
    private $posizione;
    function __construct($identificativo, $codiceSeriale, $unitaDiMisura, $misur = [], $posizione){
        parent::__construct($identificativo, $codiceSeriale, $unitaDiMisura, $misur = []);
        $identificativo = "umidità";
        $unitaDiMisura = "%";
        $this->posizione = $posizione;

    }

    function getIdentificativo(){
        return $this->identificativo;
    }

    function setIdentificativo($identificativo){
        $this->identificativo = $identificativo;
    }

    function getUnitaDiMisura(){
        return $this->unitaDiMisura;
    }

    Function getPosizione(){
        return $this->posizione;
    }



    function toString()
    {
        return "$this->codiceSeriale, $this->identificativo, ";
    }
}

?>