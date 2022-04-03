<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Strona testowa</title>
</head>
<body>
<table>


    <FORM action="zad2.php" method="get">
        <?php


        $tablica[0] = ["name" => "Gdzie sie znajdujemy", "link" => "0", "tresc" => "Brzegi 55, 80-045 Gdańsk"];
        $tablica[1] = ["name" => "Numer telefonu", "link" => "1", "tresc" => "58 683 59 75"];
        $tablica[2] = ["name" => "Strona glowna", "link" => "2", "tresc" => "Witamy"];

        $menu = $_GET['menu'];
        if (isset($_GET['menu'])==false){$menu=2;}
        if ($menu<0 || $menu>2){echo "404";}
        echo "<h1>".$tablica[$menu]["name"]."</h1>";
        echo $tablica[$menu]["tresc"];

        for ($i=0;$i<3;$i++)
        {
            echo "<li>";
            echo "<a href=zad2.php?menu=";
            echo $tablica[$i]["link"];
            echo ">";
            echo $tablica[$i]["name"];
            echo "</a>";
            echo "</li>";
        }


        ?>


    </FORM>


</table>
</body>
</html>

