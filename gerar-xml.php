<?php 

/* instância do documento */
$dom = new DOMDocument('1.0', 'UTF-8');

/* formata a saída do XML */
$dom->formatOutput = true;

/* NÓ de ID do usuáio */
$idNodeValue = $dom->createTextNode(1);
$idNode = $dom->createElement('id');
$idNode->appendChild($idNodeValue);

/* NÓ de e-mail do usuáio */
$emailNodeValue = $dom->createTextNode('teste@teste.com.br');
$emailNode = $dom->createElement('email');
$emailNode->appendChild($emailNodeValue);

/* NÓ de nome do usuáio */
$nameNodeValue = $dom->createCDATASection('João da Silva');
$nameNode = $dom->createElement('name');
$nameNode->appendChild($nameNodeValue);

/* NÓ de usuário */
$userNode = $dom->createElement('user');
$userNode->appendChild($idNode);
$userNode->appendChild($emailNode);
$userNode->appendChild($nameNode);

/* instância do NÓ ROOT - Nó principal */
$rootNode = $dom->createElement('root');
$rootNode->appendChild($userNode);
$dom->appendChild($rootNode);

/* imprime o documento na tela */
/* $xml = $dom->saveXML();
echo $xml; */

/* salva o conteúdo em um arquivo */
$dom->save(__DIR__ . './arquivos/document.xml');