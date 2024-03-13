<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

    class ControllerImpianti {
        function Dati(Request $request, Response $response, $args) { 
           
            $impianto = new Impianto();

            $response->getBody()->write($impianto->toString());
            
            return $response;
        }
        function rilevatoriByCodiceSeriale(Request $request, Response $response, $args) {
           
            $inpianto = new Impianto();
            $codiceSeriale = $args["codiceSeriale"];
            $rilevatore = $inpianto->getRilevatoriCodiceSeriale($codiceSeriale);
                
            $message ="";
            if(empty($rilevatore)){
                $message.="not found";
            }else{
                foreach($rilevatore as $a){
                    $message.=$a->toString();
                }
            }
            $response->getBody()->write($message);
            return $response;
        }
    }

?>