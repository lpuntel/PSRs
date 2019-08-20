<?php

namespace PuntelFig\SoN_PHP\PSRs\logger;

use Psr\Log\LoggerInterface;

use Psr\Log\LoggerTrait;

class Logger implements LoggerInterface
{
    use LoggerTrait;

    private $base_dir;

    public function __construct($base_dir){
        $this->base_dir = $base_dir;
    }

    public function log($level, $message, array $context = array()){
        
        $message = $this->interpolate($message, $context);

        file_put_contents($this->base_dir . '/' . $level . '.log',$message);
    }

    public function interpolate($message, array $context = array()){
        $replace = array();
    foreach ($context as $key => $val) {
        // check that the value can be casted to string
        if (!is_array($val) && (!is_object($val) || method_exists($val, '__toString'))) {
            $replace['{' . $key . '}'] = $val;
        }
    }

    // interpolate replacement values into the message and return
    return strtr($message, $replace);
    }

}
