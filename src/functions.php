<?php

// Encode token to URL usign base64
$authToken = strtr(base64_encode(json_encode([
    'email' => $email,
    'secret' => md5($email.'|'.intdiv(time(), 10).'|'.OPENCRMITALIA_PORTAL_TOKEN)
])), '+/=', '._-');

// Decode toke from url usign base64
$authInfo = json_decode(base64_decode(strtr($_GET['auth_token'], '._-', '+/=')), true);


