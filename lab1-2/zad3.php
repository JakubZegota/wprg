<?php

echo '<br />';
echo 'Zadanie 3.1';
echo '<br />';

function losowa($a)
{
    $tablica = [];
    echo "tablica: ";
    {
        for ($i = 0; $i < 10; $i++) {
            $tablica[$i] = rand(1, 9);
            echo $tablica[$i];
        }
        echo ",   $tablica[$a]";
    }
}

$argument = 5;
losowa($argument);

echo '<br />';
echo 'Zadanie 3.2';
echo '<br />';

$tab = [];
function jakinarod($a)
{
    $tab = array("Polska" => "Polak", "Ukraina" => "Ukrainiec");
    return $tab[$a];
}

echo jakinarod("Polska");

echo '<br />';
echo 'Zadanie 4.1';
echo '<br />';
$tab = [];
echo "tablica: ";
for ($i = 0; $i < 10; $i++) {
    $tab[$i] = rand(1, 9);
    echo $tab[$i];
}
echo " Maksymalna wartość z tablicy: ";
function maksfor($t)
{
    $max = 0;
    for ($i = 0; $i < 10; $i++) {
        if ($t[$i] > $max) {
            $max = $t[$i];
        }
    }
    echo $max . " ";
}

function maksforeach($t)
{
    $max = 0;
    foreach ($t as $value) {
        if ($value > $max) {
            $max = $value;
        }
    }
    echo $max;
}

function makswhile($t)
{
    $max = 0;
    $i = 0;
    while ($i < 10) {
        if ($t[$i] > $max) {
            $max = $t[$i];
        }
        $i++;
    }
    echo " " . $max;
}

function maksdowhile($t)
{
    $max = 0;
    $i = 0;
    do {
        if ($t[$i] > $max) {
            $max = $t[$i];
        }
        $i++;
    } while ($i < 10);
    echo " " . $max;
}

maksfor($tab);
maksforeach($tab);
makswhile($tab);
maksdowhile($tab);

echo '<br />';
echo 'Zadanie 4.2';
echo '<br />';

function rzut($a)
{
    $rzuty = [];

    for ($i = 0; $i < $a; $i++) {
        $rzuty[$i] = rand(1, 6);
        echo $rzuty[$i];
    }
}

$liczbarzutow = 5;
rzut($liczbarzutow);
