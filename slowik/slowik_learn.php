<?php
session_start();
if (!isset($_SESSION['i'])) {
    $_SESSION['i'] = 0;
}
if (isset($_POST['kontynuuj'])) {
    $_SESSION['i']++;
}
$learnTab = $_SESSION['deck'];


?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Słowik</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div><h2 class="slowik" >SŁOWIK</h2></div>


<FORM action method="get">

    <?php
    if (!isset($_GET['translation'])) {

        echo "Podaj tłumaczenie słowa: ";
        echo $learnTab[$_SESSION['i']][1];
        echo '<INPUT type="text" name="translation">';
        echo '<INPUT type="submit" value="Zatwierdz">';
    }
    ?>

</FORM>

<?php

if (isset($_GET['translation'])) {
    echo '<br/>';
    $userTranslation = strtolower($_GET['translation']); //ma działać niezależnie od wielkości liter
    $correctTranslation = strtolower($learnTab[$_SESSION['i']][2]);
    if ($userTranslation == $correctTranslation) {
        echo "Tłumaczenie poprawne!";
    } else {
        echo "Błąd. Prawidłowe tłumaczenie to ";
        echo $learnTab[$_SESSION['i']][2];
    }
    unset($_GET['translation']);
    echo '<form action="slowik_learn.php" method="POST">';
    echo '<button class="kontynuuj" type="submit" name="kontynuuj">Kontynuuj</button>';
    echo '</form>';
}

?>


<form action="slowik_interfejs.php" method="POST">
    <button class="zakoncz" type="submit" name="zakoncz"> Zakończ</button>
</form>

</body>
</html>

