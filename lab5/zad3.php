<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Strona testowa</title>
</head>
<body>
<table>


    <FORM action="zad2.php" method="get">
        <?php

        $file = fopen('strony.csv', 'r');
        $i=0;
        $tab=[];
        while(! feof($file))
        {
            $tab[$i]=fgetcsv($file);
            $i++;
        }
        //print_r($tab);
        fclose($file);
        $tablica = [];

        foreach ($tab as $line) {
            $tablica[]=["name"=>$line[0], "link"=>$line[1],"tresc"=>$line[2]];
        }

        $menu = $_GET['menu'];
        if (isset($_GET['menu'])==false){$menu=2;}
        if ($menu<0 || $menu>3){echo "404";}
        echo "<h1>".$tablica[$menu]["name"]."</h1>";
        echo $tablica[$menu]["tresc"];
        for ($i=0;$i<3;$i++)
        {
            echo "<li>";
            echo "<a href=zad3.php?menu=";
            echo $tablica[$i]["link"];
            echo ">";
            echo $tablica[$i]["name"];
            echo "</a>";
            echo "</li>";
        }


        ?>
        <a href="http://szuflandia.pjwstk.edu.pl/~s24317/lab5/edit.php">Edytuj stronę</a>
    </FORM>


</table>
</body>
</html>
