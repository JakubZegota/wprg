<?php
//if isset
$osoby = $_POST['osoby'];
$kraj = $_POST['kraj'];
$od =strtotime($_POST['od']);
$do = strtotime($_POST['do']);
$dni = $do - $od;
$dni2 = round($dni / (60 * 60 * 24));
$kraje = ["Polska"=>100, "Hiszpania"=>300, "Kostaryka"=>800, "Mars"=>1250000];
$cena = $kraje[$kraj]*$osoby*$dni2;

if ($cena<0){echo "Nieprawidłowy zakres dat";}

else {


    echo "Kraj: $kraj" . "<br/>";
    echo "Cena za osobę za dzień: $kraje[$kraj]" . "<br/>";
    echo "Liczba osób: $osoby" . "<br/>";
    echo "Dni: $dni2 " . "<br/>";
    echo "Cena za całość: $cena " . "<br/>";

}