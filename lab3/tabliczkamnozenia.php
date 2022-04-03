<?php
function tabliczka($a)
{
    for ($i = 1; $i < $a + 1; $i++)
    {
        $tab[$i]=$i;
    }

    foreach ($tab as $t) {
        echo "<tr>";
        for ($i=1; $i<$a+1; $i++)
        {
            echo  "<td>".$t*$i."</td>";
        }
        echo "</tr>";
    }

}
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Strona testowa</title>
</head>
<body>
<table>

    <?php
    $bok = 3;
    tabliczka($bok);
    ?>

</table>
</body>
</html>