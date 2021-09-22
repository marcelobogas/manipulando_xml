<?php

/* string XML */
/* $string = '<?xml version="1.0" encoding="UTF-8"?>
<root>
  <user>
    <id>1</id>
    <email>teste@teste.com.br</email>
    <name><![CDATA[João da Silva]]></name>
  </user>
</root>'; */

/* carrega o XML com base em uma string */
/* $xml = simplexml_load_string($string); */

/* carrega o XML com base em um arquivo */
$xml = simplexml_load_file(__DIR__ . './arquivos/document.xml');

/* dados do XML em objeto */
echo 'Id: ' . $xml->user->id . "\n";
echo 'Nome: ' . $xml->user->name . "\n";
echo 'E-mail: ' . $xml->user->email . "\n";