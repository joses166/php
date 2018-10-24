<?php 

class Carro {
    /**
     * Atributos
     */
    private $modelo;
    private $motor;
    private $ano;

    /**
     * Metodos getter e setter dos atributos privados
     */
    public function getModelo() {
        return $this->modelo;
    }
    
    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function getMotor():float {
        return $this->motor;
    }
    
    public function setMotor($motor) {
        $this->motor = $motor;
    }

    public function getAno():int {
        return $this->ano;
    }

    public function setAno($ano) {
        $this->ano = $ano;
    }
    /**
     * Metodo exibir mostra um array com os dados do carro
     */
    public function exibir() {
        return array(
            "modelo" => $this->getModelo(),
            "motor" => $this->getMotor(),
            "ano" => $this->getAno()
        );
    }

}



?>