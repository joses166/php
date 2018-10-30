<?php

namespace Endereco;

class Endereco
{
    
    private $cep;
    private $logradouro;
    private $complemento;
    private $bairro;
    private $localidade;
    private $uf;
    private $unidade;
    private $ibge;
    private $gia;
    
    public function __construct( $cep = "", $logradouro = "", $complemento = "", $bairro = "", $localidade = "", $uf = "", $unidade = "", $ibge = "", $gia = "" )
    {
        $this->setCep() = $cep;
        $this->setLogradouro() = $logradouro;
        $this->setComplemento() = $complemento;
        $this->setBairro() = $bairro;
        $this->setLocalidade() = $localidade;
        $this->setUf() = $uf;
        $this->setUnidade() = $unidade;
        $this->setIbge() = $ibge;
        $this->setGia() = $gia;
    }

    public function getCep() 
    {
        return $this->cep;
    }

    public function setCep( $cep )
    {
        $this->cep = $cep;
    }

    public function getLogradouro() 
    {
        return $this->logradouro;
    }

    public function setLogradouro( $logradouro )
    {
        $this->logradouro = $logradouro;
    }
    
    public function getComplemento() 
    {
        return $this->complemento;
    }

    public function setComplemento( $complemento )
    {
        $this->complemento = $complemento;
    }
    
    public function getBairro() 
    {
        return $this->bairro;
    }

    public function setBairro( $bairro )
    {
        $this->bairro = $bairro;
    }
    
    public function getLocalidade() 
    {
        return $this->localidade;
    }

    public function setLocalidade( $localidade )
    {
        $this->localidade = $localidade;
    }
    
    public function getUf() 
    {
        return $this->uf;
    }

    public function setUf( $uf )
    {
        $this->uf = $uf;
    }
    
    public function getUnidade() 
    {
        return $this->unidade;
    }

    public function setUnidade( $unidade )
    {
        $this->unidade = $unidade;
    }
    
    public function getIbge() 
    {
        return $this->ibge;
    }

    public function setIbge( $ibge )
    {
        $this->ibge = $ibge;
    }
    
    public function getGia() 
    {
        return $this->gia;
    }

    public function setGia( $gia )
    {
        $this->gia = $gia;
    }

    /**
     * Método que irá retornar os dados do endereço
     */
    public function getDadosEndereco( $cep ) {

        $link = "https://viacep.com.br/ws/$cep/json/";
        
        $ch = curl_init($link);
        
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );//Manda valor e espera um resposta, o ultimo parametro será 0 ou 1;
        curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, 0 );
        
        $response = curl_exec( $ch );
        
        curl_close( $ch );
        
        $data = json_decode( $response, true );
    
        return $data;

    }
}