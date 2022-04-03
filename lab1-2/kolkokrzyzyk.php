<?php
$vic = 0;

$aint = array_fill(0, 3, array_fill(0, 3, 0));
$a_str = array_fill(0, 3, array_fill(0, 3, '_'));

function wygrana($a)
{
    $wynik = 0;

    for ($i = 0; $i < 3; $i++) {
        $poziom = $a[$i][0] + $a[$i][1] + $a[$i][2];
        if ($poziom == 3) {
            $wynik = 1;
            break;
        } else if ($poziom == -3) {
            $wynik = -1;
            break;
        }

        $pion = $a[0][$i] + $a[1][$i] + $a[2][$i];
        if ($pion == 3) {
            $wynik = 1;
            break;
        } else if ($pion == -3) {
            $wynik = -1;
            break;
        }
    }

    $skos1 = $a[0][0] + $a[1][1] + $a[2][2];
    if ($skos1 == 3) {
        $wynik = 1;
    } else if ($skos1 == -3) {
        $wynik = -1;
    }

    $skos2 = $a[2][0] + $a[2][1] + $a[2][2];
    if ($skos2 == 3) {
        $wynik = 1;
    } else if ($skos2 == -3) {
        $wynik = -1;
    }

    $licz=0;
    for ($i=0; $i<3;$i++)
    {
        if ($a[0][$i]==0){$licz++;}
        if ($a[1][$i]==0){$licz++;}
        if ($a[2][$i]==0){$licz++;};
    }
    if ($licz<1){$wynik=2;}

    return $wynik;

}

do {

    $dalej = false;

    do {
        echo "<br />";
        echo "Kółko - wybierz wiersz (0-2): ";
        $o_w = rand(0, 2); echo $o_w;
        echo "<br />";
        echo "Kółko - wybierz kolumnę (0-2): ";
        $o_k = rand(0, 2); echo $o_k;
        echo "<br />";
        if ($aint[$o_w][$o_k] != 0) {
            echo "<br /> Miejce jest zajęte! Wybierz inne miejsce.";
            $dalej = true;
        } else {
            $dalej = false;
        }
        echo "<br />";

    } while ($dalej == true);

    $aint[$o_w][$o_k] = 1;
    $a_str[$o_w][$o_k] = 'o';
    echo $a_str[0][0] . "_____" . $a_str[0][1] . "_____" . $a_str[0][2] . "<br />";
    echo $a_str[1][0] . "_____" . $a_str[1][1] . "_____" . $a_str[1][2] . "<br />";
    echo $a_str[2][0] . "_____" . $a_str[2][1] . "_____" . $a_str[2][2] . "<br />";
    $vic = wygrana($aint);
    if ($vic!=0){break;}


    do {

        echo "Krzyzyk - wybierz wiersz (0-2): ";
        $x_w = rand(0, 2); echo $x_w;
        echo "<br />";
        echo "Krzyzyk - wybierz kolumnę (0-2): ";
        $x_k = rand(0, 2); echo $x_k;
        if ($aint[$x_w][$x_k] != 0) {
            echo "<br /> Miejce jest zajęte! Wybierz inne miejsce.";
            $dalej = true;
        } else {
            $dalej = false;
        }
        echo "<br />";

    } while ($dalej == true);

    $aint[$x_w][$x_k] = -1;
    $a_str[$x_w][$x_k] = '+';
    echo $a_str[0][0] . "_____" . $a_str[0][1] . "_____" . $a_str[0][2] . "<br />";
    echo $a_str[1][0] . "_____" . $a_str[1][1] . "_____" . $a_str[1][2] . "<br />";
    echo $a_str[2][0] . "_____" . $a_str[2][1] . "_____" . $a_str[2][2] . "<br />";
    $vic = wygrana($aint);
    if ($vic!=0){break;}
    echo "<br />";



} while ($vic == 0);



if ($vic == -1) {
    echo "<br /> Wygrały krzyżyki";
} else if ($vic == 1) {
    echo  "<br /> Wygrały kółka";
}
else {echo "<br /> Nikt nie wygral";}