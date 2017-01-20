<?php

/**
 * Created by PhpStorm.
 * User: fran lopez
 * Date: 19/01/2017
 * Time: 23:13
 */

$key            = 'jf8)*h9oOpl;.Lpa';
$iv             = 'abcd12344321dcba';
$texto          = ' U0upaDz4eTeuvv5eLnAN2J1MgdJ/f6H4qgfRS7GKjtI=';
$texto_cifrado  = base64_decode($texto);
$texto_claro    = mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $key,
    $texto_cifrado, MCRYPT_MODE_CBC, $iv);

echo $texto_claro;