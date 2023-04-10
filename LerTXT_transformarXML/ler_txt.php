<?php


/**
 * Origem desta informação 
 * 
 * https://pt.stackoverflow.com/questions/189409/como-transformar-esse-texto-em-um-array-com-nome-e-descri%C3%A7%C3%A3o
 * 
 * 
 * 
 */



$caminho = 'D:/documentos/Praticando/xml/arquivosLidos/';

//Primeiro abra o conteúdo do texto e salve numa variável:
//$string = file_get_contents($caminho.'sicredi.ofx');




//Em seguida vamos criar um array com cada linha do arquivo.
//$array = array_filter(explode("\n", $string));




$array2 = array_filter(file($caminho.'sicredi.ofx'));

print_r( $array2);

echo '<br> <br>';




/**
 * 
 * Agora vamos mapear o array para que ele transforme a divisão de : em um array de 2 items. 
 * Em seguida, vamos usar array_combine para combinar chaves com os dois valores (as chaves serão "nome" e "descrição")
 */


$callback = function ($value) {
    return array_combine(array('funcao', 'valor'), explode(":", $value, 2));
};

$array3 = array_map($callback, $array2);

var_dump($array3);


//instancia do documento 
$dom = new DOMDocument('1.0', 'UTF-8');

//formatar a saida do arquivo
$dom->formatOutput = true ;


//instancia do no root - principal
$rootNode = $dom->createElement('root');


//criando o filho user de root
$userNode = $dom->createElement('info');

//adicionando o user ao root 
$rootNode->appendChild( $userNode );


//adicionadno o no root dentro do XML 
$dom->appendChild( $rootNode);

foreach(  $array3 as $key => $value ){

    

    //criando o valor de email como texto
    $NodeValue = $dom->createTextNode(  trim($value['valor']) );

    //criando o no email
    $Node = $dom->createElement($value['funcao']);

    //adicionando o valor ao id
    $Node->appendChild( $NodeValue);

    $userNode->appendChild( $Node );




}


foreach ($array3 as $key => $value) {
    echo '<br>Funcao: '. $value['funcao'];
    echo '<br>Valor: '. $value['valor'];
}



//salvar em uma determinada pasta 

$caminho = 'D:/documentos/Praticando/xml/arquivosGerados/';
$data = date('Ymd_hms');

$dom->save( $caminho.'arquivo_'.$data.'.xml');





?>