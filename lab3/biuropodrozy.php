<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Strona testowa</title>
</head>
<body>
<table>

    <FORM action="biuroobliczenia.php" method="post">
        <TABLE>
            <TR>
                <TD>Liczba osób:</TD>
                <TD><INPUT type="number" name="osoby"></TD>
            </TR>

            <TR>
                <TD>Od:</TD>
                <TD><INPUT type="date" name="od"></TD>
            </TR>
            <TR>
                <TD>Do:</TD>
                <TD><INPUT type="date" name="do"></TD>
            </TR>

            <p>Kraj:</p>

            <div>
                <input type="radio" name="kraj" value="Polska"
                <label for="Polska">Polska</label>
            </div>

            <div>
                <input type="radio" name="kraj" value="Hiszpania">
                <label for="Hiszpania">Hiszpania</label>
            </div>

            <div>
                <input type="radio" name="kraj" value="Kostaryka">
                <label for="Kostaryka">Kostaryka</label>
            </div>

            <div>
                <input type="radio" name="kraj" value="Mars">
                <label for="Mars">Mars</label>
            </div>

            <TD>&nbsp;</TD>
            <TD><INPUT type="submit" value="Wyślij"></TD>
            </TR>
        </TABLE>
    </FORM>

</table>
</body>
</html>