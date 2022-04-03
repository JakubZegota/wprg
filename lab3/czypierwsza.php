<?php
$liczba = $_POST['liczba'];
checkifprime($liczba);

function checkifprime($a)
{
    $it = 0;
    $b = sqrt($a);
    $b = floor($b);
    $isprime = true;

    for ($i = 2; $i < $b + 1; $i++) {
        $it=$i;
        if ($a % $i == 0) {
            $isprime = false;
            break;
        }
    }
    if ($isprime) {
        echo "$a jest liczba pierwsza";
    } else {
        echo "$a NIE jest liczba pierwsza";
    }
        echo $it;

}



