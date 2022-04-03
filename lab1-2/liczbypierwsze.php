<?php
function checkifprime($a)
{
    $b = sqrt($a);
    $b = floor($b);
    $iterations = 0;
    $isprime = true;
    for ($i = 2; $i < $b + 1; $i++) {
        $iterations++;
        if ($a % $i == 0) {
            $isprime = false;
            break;
        }
    }
    if ($isprime) {echo "$a jest liczba pierwsza";} else {echo "$a NIE jest liczba pierwsza";}
    echo " <br/> Liczba powtorzen petli: $iterations";
}

$num = rand(2,100);
checkifprime($num);
