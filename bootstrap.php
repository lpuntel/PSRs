<?php

require __DIR__ . '/autoload.php';

$product = new PuntelFig\SoN_PHP\PSRs\computers\product;
echo $product -> retornaNome();

echo PHP_EOL;

$product = new PuntelFig\SoN_PHP\PSRs\musics\instruments\product;
echo $product -> retornaNome();

echo PHP_EOL;

$product = new PuntelFig\SoN_PHP\PSRs\musics\audio\product;
echo $product -> retornaNome();

$logger = new PuntelFig\SoN_PHP\PSRs\logger\Logger(__DIR__ . '/logs');
$logger->log('info', 'O usuário {name} acaba de acessar a aplicação', [name=>'Puntel']);
