<?php

require __DIR__ . '/src/Autoload.php';

$autoload = new PuntelFig\SoN_PHP\PSRs\Autoload;
$autoload->register();
$autoload->addNamespace('PuntelFig\SoN_PHP\PSRs', 'src');
