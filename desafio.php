<?php

function qtdSpace($string) {
    $qtd = 0;
    for($i = 0; $i < strlen($string); $i++) {
        if($string[$i] == ' ') {
            $qtd++;
        }
    }
    
    return $qtd;
}

function formatString($string, $size) {
    
    $spaceString = qtdSpace($string) / 3;
    $spaceFinaly = qtdSpace($string) - $spaceString;

    $i = 0;
    $j = $size - 1; 
    
    $constString = $string;
    $spaceFound = 0;
    while ($i <= $j) {
        if ($constString[$j] == ' ') {
            $string[$j + $spaceFinaly - $spacoEncontrado] = '0';
            $string[$j + $spaceFinaly - 1 - $spacoEncontrado] = '2';
            $string[$j + $spaceFinaly - 2 - $spacoEncontrado] = '%';
            
            $spacoEncontrado = $spacoEncontrado + 2;
        } else {
            $string[$j + $spaceFinaly - $spacoEncontrado] = $constString[$j];
        }
        $j--;
    }
    return $string;
}

$string = 'Sr Joao Mario    ';
echo formatString($string, 13);