<?php
echo 'Zadanie 0';
echo '<br />';
$zmienna = 2341;
echo 'Czy liczba ' . $zmienna . ' jest parzysta?';
echo '<br />';
$mod = $zmienna % 2;
if ($mod == 0) {
    echo "Tak, $zmienna jest parzysta"; //podwojne nawiasy do wstawiania zmiennych
} else {
    echo "Nie, $zmienna nie jest parzysta";
}
echo '<br />';
echo 'Zadanie 1.1';
echo '<br />';
$boki = [6, 2, 5];
sort($boki, SORT_NUMERIC);
$bok1 = $boki[0];
$bok2 = $boki[1];
$bok3 = $boki[2];
if (($bok1 * $bok1 + $bok2 * $bok2) == ($bok3 * $bok3)) {
    echo "Liczby $bok1, $bok2, $bok3 spełniają twierdzenie Pitagorasa.";
} else {
    echo "Liczby $bok1, $bok2, $bok3 NIE spełniają twierdzenia Pitagorasa.";
}
echo '<br />';
echo 'Zadanie 1.2';
echo '<br />';
$dzien = 3;
echo "$dzien dzien tygodnia to: ";
switch ($dzien) {
    case 1:
        echo 'poniedzialek';
        break;
    case 2:
        echo 'wtorek';
        break;
    case 3:
        echo 'sroda';
        break;
    case 4:
        echo 'czwartek';
        break;
    case 5:
        echo 'piatek';
        break;
    case 6:
        echo 'sobota';
        break;
    case 7:
        echo 'niedziela';
        break;
    default:
        echo 'dzien nieznany';
}
echo '<br />';
echo 'Zadanie 1.3';
echo '<br />';
$miesiac = 2;
$rok = 1900;
if ((($rok % 4 == 0) && ($rok % 100 != 0)) || ($rok % 400 == 0)) {
    $leap = true;
} else {
    $leap = false;
}

switch ($miesiac) {
    case 1:
        $dni = 31;
        break;
    case 2:
        if ($leap == true) {
            $dni = 29;
        } else {
            $dni = 28;
        }
        break;
    case 3:
        $dni = 31;
        break;
    case 4:
        $dni = 30;
        break;
    case 5:
        $dni = 31;
        break;
    case 6:
        $dni = 30;
        break;
    case 7:
        $dni = 31;
        break;
    case 8:
        $dni = 31;
        break;
    case 9:
        $dni = 30;
        break;
    case 10:
        $dni = 31;
        break;
    case 11:
        $dni = 30;
        break;
    case 12:
        $dni = 31;
        break;
    default:
        $dni = 'nieznana liczbe';
}

echo "miesiac $miesiac roku $rok ma $dni dni";
echo '<br />';
echo 'Zadanie 2.1';
echo '<br />';
function rzut()
{
    return rand(1, 6);
}

echo 'rzut koscia:';
echo rzut();
echo '<br />';
echo 'Zadanie 2.2';
echo '<br />';
$promien = 5;
function srednica($promien)
{
    echo 2 * $promien;
}

echo "Promien: $promien srednica: ";
srednica($promien);
echo '<br />';
echo 'Zadanie 2.3';
echo '<br />';
$zdanie = "Twoje hasło to Okoń123";
function cenzura($a)
{
    $slowa = array("Okoń123");
    $ocenzurowane = str_replace($slowa, "*******", $a);
    return $ocenzurowane;
}

echo cenzura($zdanie);
echo '<br />';
echo 'Zadanie 2.4';
echo '<br />';
$Pesel = "97070302376";
echo $Pesel[4] . $Pesel[5] . "-" . $Pesel[2] . $Pesel[3] . "-" . $Pesel[0] . $Pesel[1];
echo '<br />';
echo 'Zadanie 2.5';
echo '<br />';
function trojkat($a, $h)
{
    $pole = $a * $h * 0.5;
    return $pole;
}

function prostokat($a, $b)
{
    $pole = $a * $b;
    return $pole;
}

function trapez($a, $b, $h)
{
    $pole = ($a + $b) * 0.5 * $h;
    return $pole;
}

function liczpole($figura, $a, $b, $h)
{


    if ($figura == "trojkat") {
        echo trojkat($a, $h);
    } else if ($figura == "prostokat") {
        echo prostokat($a, $b);
    } else if ($figura == "trapez") {
        echo trapez($a, $b, $h);
    } else {
        echo "Nieprawidlowa figura";
    }

}

liczpole("prostokat", 5, 2, 4);

