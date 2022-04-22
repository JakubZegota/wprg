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
                <input type="radio" id="do" name="dzialanie" value="1"
                       checked>
                <label for="1">Dodawanie</label>
            </div>

            <div>
                <input type="radio" id="od" name="dzialanie" value="2"
                <label for="2">Odejmowanie</label>
            </div>

            <div>
                <input type="radio" id="mn" name="dzialanie" value="3"
                <label for="3">Mnożenie</label>
            </div>

            <div>
                <input type="radio" id="dz" name="dzialanie" value="4"
                <label for="4">Dzielenie</label>
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
include 'dzialania.php';

$dzialanie = $_GET['dzialanie'];
$a = $_GET['a'];
$b = $_GET['b'];

switch ($dzialanie) {
    case "1":
        dodawanie($a, $b);
        break;
    case "2":
        odejmowanie($a,$b);
        break;
    case "3":
        mnozenie($a,$b);
        break;
    case "4":
        dzielenie($a,$b);
        break;
    default:
        echo "Wynik:";
}
?>
