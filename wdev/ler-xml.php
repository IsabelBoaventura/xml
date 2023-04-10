<?php


//string xml 
$string='<?xml version="1.0" encoding="UTF-8"?>
<root>
  <user>
    <id>10</id>
    <nome>João Pé de FEIJÃO</nome>
    <email>email@teste.com.br</email>
  </user>
</root>
';

//carrega o xml com base em uma string 
//$xml = simplexml_load_string( $string );




$caminho = 'D:/documentos/Praticando/xml/arquivosLidos/';



//lendo o xml com base em um arquivo 
$xml = simplexml_load_file( $caminho.'arquivo.xml');

echo 'ID: '.$xml->user->id. ' <br>';
echo 'Nome: '.$xml->user->nome. '<br>';
echo 'E-mail: '. $xml->user->email.'<br>';

echo '<pre>';
print_r( $xml );
echo '</pre>';exit;



?>