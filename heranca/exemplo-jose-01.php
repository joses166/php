<?php

class Pessoas {

    private $codPessoa;

    public function getCodPessoa() {
        return $this->codPessoa;
    }

    public function setCodPessoa($cod) {
        $this->codPessoa = $cod;
    }

}

class Clientes extends Pessoas {

    private $numCliente;

    public function __construct($n) {
        $this->numCliente = $n;
    }

    public function getNumCliente() {
        return $this->numCliente;
    }

    public function setNumCliente($num) {
        $this->numCliente = $num;
    }

    public function setCadastrar() {

    }

    public function getConsultar() {
        
    }

}

class Atendentes extends Pessoas {

    private $numAtendente;

    public function __construct($n) {
        $this->numAtendente = $n;
    }

    public function getNumAtendente() {
        return $this->numAtendente;
    }

    public function setNumAtendente($num) {
        $this->numAtendente = $num;
    }

}

class Tecnicos extends Pessoas {

    private $numTecnico;

    public function __construct($n) {
        $this->numTecnico = $n;
    }

    public function getNumTecnico() {
        return $this->numTecnico;
    }

    public function setNumTecnico($num) {
        $this->numTecnico = $num;
    }

}

?>