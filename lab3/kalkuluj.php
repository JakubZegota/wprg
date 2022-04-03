<?php
$dzialanie = $_POST['dzialanie'];
$a = $_POST['a'];
$b = $_POST['b'];

if ($dzialanie=='odejmowanie') {
    echo $a-$b;
}
else if ($dzialanie=='dodawanie')
{
    echo $a+$b;
}
else if ($dzialanie=='mnozenie')
{
    echo $a*$b;
}
else
{
    echo $a/$b;
}
//dzielenie przez 0