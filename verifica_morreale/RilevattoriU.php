<?php
class RilevatoriU extends Rilevatori
{
    private $tipologia;
    function __construct($identificativo, $codiceSeriale, $unitaDiMisura, $misur = [], $tipologia){
        parent::__construct($identificativo, $codiceSeriale, $unitaDiMisura, $misur = []);
        $identificativo = "umidità";
        $unitaDiMisura = "%";
        $this->tipologia = $tipologia;

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

    Function getTipologia(){
        return $this->tipologia;
    }



    function toString()
    {
        return "$this->codiceSeriale, $this->identificativo";
    }
}

?>