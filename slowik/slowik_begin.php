<?php
session_start();
if (isset($_POST['reset'])) {
    unset($_SESSION['nick']);
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


    <?php
    if (isset($_COOKIE['nick']) || isset($_GET['nick']) || isset($_SESSION['nick'])) {

        if (!isset($_SESSION['nick'])) {
            $_SESSION['nick'] = $_GET['nick'];
            setcookie("vote", $_SESSION['nick'], time() + (86400 * 30), "/");
        }

        echo '<h1>';
        echo "Witaj, ".$_SESSION['nick'];
        echo '</h1>';


        echo '<form action="slowik_interfejs.php" method="POST">';
        echo '<input type="hidden" name="zalogowano" value="zalogowano">';
        echo '<button class="kontynuuj" type="submit" value="zalog">Kontynuuj</button>';
        echo '</form>';

    }else {
     echo '<FORM action="slowik_begin.php" method="get">';
     echo '<br/>';
     echo '<div> Podaj swój nick:';
     echo '<INPUT type="text" name="nick" required>';
     echo '</div>';
     echo '<div>&nbsp;';
     echo '<INPUT type="submit" value="Wyślij">';
     echo '</div>';
     echo '</FORM>';
    }
    ?>

    <p>Ważna informacja: Strona korzysta
        z obsługi plików cookies. Jeśli twoja przeglądarka uniemożliwia
        korzystanie z cookies, aplikacja nie będzie działać prawidłowo. Zarejestrowanie się
        w aplikacji jest równoznaczne ze zgodą na wykorzystanie tej funkcjonalności.
        Ponadto, właściciel strony ma możliwość nieograniczonego wykorzystania
        duszy użytkownika w celach transcendentalnych.</p>

