<?php

// autoload_psr4.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'voku\\helper\\' => array($vendorDir . '/voku/anti-xss/src/voku/helper'),
    'voku\\' => array($vendorDir . '/voku/portable-utf8/src/voku'),
    'test\\' => array($baseDir . '/src/test', $vendorDir . '/tmtbe/swooledistributed/src/test'),
    'app\\' => array($baseDir . '/src/app', $vendorDir . '/tmtbe/swooledistributed/src/app'),
    'Symfony\\Polyfill\\' => array($vendorDir . '/symfony/polyfill/src'),
    'Symfony\\Component\\Intl\\' => array($vendorDir . '/symfony/intl'),
    'Server\\' => array($vendorDir . '/tmtbe/swooledistributed/src/Server'),
    'Psr\\Log\\' => array($vendorDir . '/psr/log/Psr/Log'),
    'PhpAmqpLib\\' => array($vendorDir . '/php-amqplib/php-amqplib/PhpAmqpLib'),
    'Noodlehaus\\' => array($vendorDir . '/hassankhan/config/src'),
    'Monolog\\' => array($vendorDir . '/monolog/monolog/src/Monolog'),
    'League\\Plates\\' => array($vendorDir . '/league/plates/src'),
    'Gelf\\' => array($vendorDir . '/graylog2/gelf-php/src/Gelf'),
    'Ds\\' => array($vendorDir . '/php-ds/php-ds/src'),
);
