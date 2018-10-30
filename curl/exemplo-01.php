<?php 

$cep = $_GET['cep'];

$link = "https://viacep.com.br/ws/$cep/json/";

$ch = curl_init($link);

curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );//Manda valor e espera um resposta, o ultimo parametro será 0 ou 1;
curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, 0 );

$response = curl_exec( $ch );

curl_close( $ch );

$data = json_decode( $response, true );


echo "cep: " . $data['cep'] . "<br/>";
echo "logradouro: " . $data['logradouro'] . "<br/>";
echo "complemento: " . $data['complemento'] . "<br/>";
echo "bairro: " . $data['bairro'] . "<br/>";
echo "localidade: " . $data['localidade'] . "<br/>";
echo "uf: " . $data['uf'] . "<br/>";
echo "unidade: " . $data['unidade'] . "<br/>";
echo "ibge: " . $data['ibge'] . "<br/>";
echo "gia: " . $data['gia'] . "<br/>";

?>