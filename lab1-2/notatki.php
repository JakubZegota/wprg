<?php

echo 'tekst w php';
$variable = 1;
echo PHP_EOL; //enter - raczej nie używać - nie zawsze działa
echo $variable;
echo '<br />'; //enter - używać
$variable = "nadpisywanie zmiennej";
var_dump($variable); //wyświetla rozmiar i wartość zmiennej
$somebool = true;
/*
 * cztery typy zmiennych w php:
 * bool
 * int
 * float
 * string
*/
var_dump($somebool);
print_r($somebool);
echo '<br />';
$x = 'x';
$d = 'DDDDD';
$xd = $x . $d; //operator "dalszy ciąg"
echo $xd;

$a = 1;
echo $a; //wyswietla
echo $a++; //wyswietla a potem zmienia
echo ++$a; //zmienia a potem wyswietla
echo '<br />';
$b = 2;
$c = 3;
echo $b + $c;
echo '<br />';
$tablica = ["a", "b", "c"];
foreach ($tablica as $element) {
    echo $element;
    }
echo '<br />';
$tablica = ["a", "b", "c"];
foreach ($tablica as $klucz => $element) {
    echo $klucz . $element . " ";
}
?>

zwykły tekst w html



