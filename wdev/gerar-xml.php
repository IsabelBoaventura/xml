<?php
echo 'gerar xml ';



/**
 * Baseado no video de WDEV 
 * 
 * https://www.youtube.com/watch?v=gUSY6oZKayg
 * 
 * 
 */

//instancia do documento 
$dom = new DOMDocument('1.0', 'UTF-8');


//imprimie o xml na tela 

echo  $dom->saveXML();

/** 
 * Para trabalhar no terminal ,  apenas abra o terminal , no mesmo caminho onde esta o arquivo 
 * e digite:
 *  php gerar-xml.php 
 * e enter 
 */



?>   



