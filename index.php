<?php

function crack($hash){
    for ($i = 0; $i <= 99999; $i++) {
        $pin = sprintf('%05d', $i);
        $hashedPin = md5($pin);
        
        if ($hashedPin === $hash) {
            return $pin;
        }
    }
}