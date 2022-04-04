<?php
$danie = $_POST['danie'];
setcookie("vote", $danie, time() + (86400 * 30), "/");
?>

<html>
<body>

<?php
if(!isset($_COOKIE["vote"])) {
    echo "Dziękujemy za zagłosowanie na ".$danie."!";
} else {
    echo "Nie możesz zagłosować dwa razy w tej ankiecie.";
}
?>

</body>
</html>
