<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Strona testowa</title>
</head>
<body>
<table>

    <FORM action="zad1.php" method="get">
        <TABLE>
            <TR>
                <TD>Liczba A:</TD>
                <TD><INPUT type="number" name="a"></TD>
            </TR>
            <TR>
                <TD>Liczba B:</TD>
                <TD><INPUT type="number" name="b"></TD>
            </TR>
            <p>Działanie:</p>

            <div>
                <input type="radio" id = "do" name="dzialanie" value="dodawanie"
                       checked>
                <label for="dodawanie">Dodawanie</label>
            </div>

            <div>
                <input type="radio" id = "od" name="dzialanie" value="odejmowanie">
                <label for="odejmowanie">Odejmowanie</label>
            </div>

            <div>
                <input type="radio" id = "mn" name="dzialanie" value="mnozenie">
                <label for="mnozenie">Mnożenie</label>
            </div>

            <div>
                <input type="radio" id = "dz" name="dzialanie" value="dzielenie">
                <label for="dzielenie">Dzielenie</label>
            </div>

            <TD>&nbsp;</TD>
            <TD><INPUT type="submit" value="Wyślij"></TD>
            </TR>
        </TABLE>
    </FORM>

</table>
</body>
</html>

<?php

$dzialanie = $_GET['dzialanie'];
$a = $_GET['a'];
$b = $_GET['b'];

if ($dzialanie == 'odejmowanie') {
    echo $a - $b;
} else if ($dzialanie == 'dodawanie') {
    echo $a + $b;
} else if ($dzialanie == 'mnozenie') {
    echo $a * $b;
    } else if ($dzialanie == 'dzielenie')
{
    echo $a/$b;
    if ($b == 0) {
        echo "niezdefiniowane";
    }
}
?>
