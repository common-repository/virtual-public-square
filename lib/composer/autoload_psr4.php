<?php

// autoload_psr4.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Psr\\Http\\Message\\' => array($vendorDir . '/psr/http-message/src', $vendorDir . '/psr/http-factory/src'),
    'Psr\\Http\\Client\\' => array($vendorDir . '/psr/http-client/src'),
    'Jose\\Component\\Signature\\Algorithm\\' => array($vendorDir . '/web-token/jwt-signature-algorithm-ecdsa'),
    'Jose\\Component\\Signature\\' => array($vendorDir . '/web-token/jwt-signature'),
    'Jose\\Component\\KeyManagement\\' => array($vendorDir . '/web-token/jwt-key-mgmt'),
    'Jose\\Component\\Core\\' => array($vendorDir . '/web-token/jwt-core'),
    'Jose\\' => array($baseDir . '/src'),
    'FG\\' => array($vendorDir . '/fgrosse/phpasn1/lib'),
    'Base64Url\\' => array($vendorDir . '/spomky-labs/base64url/src'),
);