<?php

function suma($skaicius1, $skaicius2) {
    $suma = $skaicius1 + $skaicius2;
    return $suma;
}

function dalyba($skaicius1, $skaicius2) {
    $dalyba = $skaicius1 / $skaicius2;
    return $dalyba;
}

function daugyba($skaicius1, $skaicius2) {
    $daugyba = $skaicius1 * $skaicius2;
    return $daugyba;
}

function picture($number) {
    for($break=1; $break<=$number; $break++) {
        echo "<br>";
        for($dot=1; $dot<=$break; $dot++) {
            echo "*";
        }
    }
    for ($break=$number; $break>=1; $break--) {
        echo "<br>";
        for($dot=1; $dot<=$break; $dot++) {
            echo "0";
        }
    }
}

function getChineseZodiac($year) {

    switch ($year % 12) :
        case 1: return 'Avinas';
        case 2: return 'vanduo';
        case 3: return 'suo';
        case 4: return 'kate';
        case 5: return 'lape';
        case 6: return 'vilkas';
        case 7: return 'meska';
        case 8: return 'vovere';
        case 9: return 'lapinas';
        case 10: return 'mesk';
        case 11: return 'katinas';
        case 12: return 'opa';
    endswitch;

}

function reverse($string)
{
    $string = strrev($string);
    return $string;
}
function didziosios($string) {
    $string = strtoupper($string);
    return $string;
}
function mazosios($string) {
    $string = strtolower($string);
}

function Palindrome($string)
{
    if ($string = strrev($string)) {
        return strtoupper($string);
    }
    else{
        return strtolower($string);
    }
}

$vardas="Martynas" ;
$vardas="<br> Laurynas <br>" ;

$amzius=21;
if ($amzius>=21) {
    echo $amzius;
}
else {
    echo "nepilnametis";
}


?>