<?php
$flaga = $_POST['flag'];
if (isset($_POST['flag'])){
header("Location: $flaga");

}


?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <title>flagi</title>
</head>
<body>



<FORM action method="post">

    <div>
        <label>
            <input type="radio" name="flag" value="nsk.php"
        </label>
        <label for="nsk" >NSK</label>
    </div>

    <div>
        <label>
            <input type="radio" name="flag" value="swe.php">
        </label>
        <label for="swe">SWE</label>
    </div>

    <div>
        <label>
            <input type="radio" name="flag" value="pl.php">
        </label>
        <label for="pol">POL</label>
    </div>



    &nbsp;
    <INPUT type="submit" value="Dalej">

</body>
</html>