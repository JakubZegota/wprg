<?php
$b = $_POST["yourtext"];
$a = fopen('dane.txt', 'a+');

if (!$a = fopen("dane.txt", 'a+')) {
    echo "błąd przy otwieraniu pliku";
}
else {
        fwrite($a,$b."\n");
        echo "zapisano pomyślnie";
     }


    fclose($a);

?>



