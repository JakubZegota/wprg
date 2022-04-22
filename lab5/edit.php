


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

        if(isset($_POST["zapisz"]))
        {
            $id = $_POST["me"];
            $editname = $_POST["name"];
            $edittresc = $_POST["tresc"];
            $tablica[$id]["name"] = $editname;
            $tablica[$id]["tresc"] = $edittresc;

            $filef = fopen('strony.csv', 'w+');

            foreach ($tablica as $line) {
                fwrite($filef, $line["name"]);
                fwrite($filef, ",");
                fwrite($filef, $line["link"]);
                fwrite($filef, ",");
                fwrite($filef, $line["tresc"]);
                fwrite($filef, "\n");
            }

            fclose($filef);


        }

        
        ?>

        <!DOCTYPE html>
        <head>
            <meta charset="UTF-8">
            <title>EDYCJA</title>
        </head>
        <body>
        <table>

        <?php
        for ($i=0;$i<3;$i++)
        {
            echo "<li>";
            echo "<a href=edit.php?menu=";
            echo $tablica[$i]["link"];
            echo ">";
            echo $tablica[$i]["name"];
            echo "</a>";
            echo "</li>";
        }


        ?>

    <FORM action="edit.php" method="post">

            <label for="fname">Nazwa:</label><br>
            <input type="text" id="name" name="name" value="<?php echo $tablica[$menu]["name"]; ?>"><br>
            <label for="lname">Tresc:</label><br>
            <input type="text" id="tresc" name="tresc" value="<?php echo $tablica[$menu]["tresc"]; ?>"><br><br>
            <input type="hidden" id="me" name="me" value="<?php echo $menu; ?>">
            <input type="submit" name="zapisz" value="Edytuj">

        <br>
        <a href="http://szuflandia.pjwstk.edu.pl/~s24317/lab5/zad3.php">Powrót do strony</a>
    </FORM>


</table>
</body>
</html>
