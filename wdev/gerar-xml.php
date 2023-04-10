<?php




/**
 * Baseado no video de WDEV 
 * 
 * https://www.youtube.com/watch?v=gUSY6oZKayg
 * 
 * 
 */

//instancia do documento 
$dom = new DOMDocument('1.0', 'UTF-8');

//formatar a saida do arquivo
$dom->formatOutput = true ;

//criando o valor de id como texto
$idNodeValue = $dom->createTextNode( 10 );


//criando o no id
$idNode = $dom->createElement('id');

//adicionando o valor ao id
$idNode->appendChild( $idNodeValue);



//nome 
//criando o valor de nome  como texto
$nomeNodeValue = $dom->createTextNode( 'João Pé de FEIJÃO' );
//criando o no nome
$nomeNode = $dom->createElement('nome');
//adicionando o valor ao id
$nomeNode->appendChild( $nomeNodeValue);






//email
//criando o valor de email como texto
$emailNodeValue = $dom->createTextNode( 'email@teste.com' );

//criando o no email
$emailNode = $dom->createElement('email');

//adicionando o valor ao id
$emailNode->appendChild( $emailNodeValue);



//criando o filho user de root
$userNode = $dom->createElement('user');

//associando o id ao user
$userNode->appendChild( $idNode );

//associando o nome
$userNode->appendChild( $nomeNode);

//associando o email
$userNode->appendChild( $emailNode);

//instancia do no root - principal
$rootNode = $dom->createElement('root');
//adicionando o user ao root 
$rootNode->appendChild( $userNode );


//adicionadno o no root dentro do XML 
$dom->appendChild( $rootNode);


//imprimie o xml na tela 
// $xml =  $dom->saveXML();
// echo $xml ;


//salvar em uma determinada pasta 

$caminho = 'D:/documentos/Praticando/xml/arquivosGerados/';
$data = date('Ymd_hms');

$dom->save( $caminho.'arquivo_'.$data.'.xml');


/** 
 * Para trabalhar no terminal ,  apenas abra o terminal , no mesmo caminho onde esta o arquivo 
 * e digite:
 *  php gerar-xml.php 
 * e enter 
 */



?>   



