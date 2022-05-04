<?php
session_start();

if (!isset($_SESSION['nick'])) {
 header("Location: slowik_begin.php");
}

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Słowik</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div><h2 class="slowik">SŁOWIK</h2></div>

<div> Program do nauki słówek</div>

<FORM action method="get">
    <?php
    echo '<h1>';
    echo "Witaj, ".$_SESSION['nick'];
    echo '</h1>';
    ?>

    <p><span style="font-size: 200%; ">Wybierz talię słów:</span></p>

    <div>
        <label>
            <input type="radio" name="deck" value="snouns.csv"
        </label>
        <label for="snouns">hiszpańskie rzeczowniki</label>
    </div>

    <div>
        <label>
            <input type="radio" name="deck" value="ganimals.csv">
        </label>
        <label for="ganimals">zwierzęta po niemiecku</label>
    </div>

    <p><span style="font-size: 200%; ">Co chcesz zrobić?:</span></p>
    <div>
        <label>
            <input type="radio" name="choice" value="display" checked>
        </label>
        <label for="display">Wyświetl talię</label>
    </div>

    <div>
        <label>
            <input type="radio" name="choice" value="add">
        </label>
        <label for="add">Dodaj własną talię</label>
    </div>

    <div>
        <label>
            <input type="radio" name="choice" value="learn">
        </label>
        <label for="learn">Ucz się talii</label>
    </div>

    &nbsp;
    <INPUT type="submit" value="Dalej">

</FORM>

<form action="slowik_begin.php" method="POST">
    <input type="hidden" name="reset" value="reset">
    <button class="zakoncz" type="submit" value="resetuj"> Resetuj wszystko</button>
</form>

</body>
</html>

<?php

if (isset($_POST['zakoncz'])) {
    session_destroy();
}
$choice = $_GET['choice'];

function deckTab($filename) //Plik - > Tablica
{
    $file = fopen("$filename", 'r');
    $i = 0;
    $tab = [];
    while (!feof($file)) {
        $tab[$i] = fgetcsv($file);
        $i++;
    }
    fclose($file);
    return $tab;
}

function deckDisplay($tab) //Tablica -> Lista
{
    echo '<p><span style="font-size: 200%; ">Wybrana lista:</span></p>';
    foreach ($tab as $word) {
        echo $word[0];
        echo ".$word[1]" . "($word[2])";
        echo '<br/>';
    }
}


if (isset($_GET['choice'])) //menu główne
{

    switch ($_GET['choice']) {

        case "display":
            if (isset($_GET['deck'])) { //Wybrana talia -> Tablica -> Lista
                $choiceTab = deckTab($_GET['deck']);
                deckDisplay($choiceTab);
            } else {
                echo "Nie wybrano żadnej talii!";
                echo '<br/>';
            }
            break;

        case "add":
            echo "opcja tymczasowo niedostępna";
            /*
            echo '<form action = "slowik_interfejs.php" method="GET">';
            echo '<input type="number" name="wordsNum" min="2" max="100">';
            echo '<label for="wordsNum"> Ilość słówek w talii </label>';
            echo '<button type="submit" name="submitNum">Potwierdź</button>';
            */
            break;

        case "learn":
            if (isset($_GET['deck'])) {
                $_SESSION['deck'] = deckTab($_GET['deck']);
                header("Location: slowik_learn.php");
            } else {
                echo "Nie wybrano żadnej talii!";
                echo '<br/>';
            }
            break;
    }


}

echo '<br/>';
?>


