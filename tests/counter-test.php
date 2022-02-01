<?php



$token = md5(intdiv(time(), 10));
for ($i = 0; $i < 30; $i++) {
    $seed = intdiv(time(), 10);

    $valid = 'no';
    if ($token == md5($seed) || $token == md5($seed - 1)) {
        $valid = 'yes';
    }

    echo $seed." ".$valid."\n";
    sleep(1);
}



