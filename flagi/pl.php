<?php

$szer = 400;
$wys = 200;
$flag = imagecreatetruecolor($szer, $wys);
$bialy = imagecolorallocate($flag, 255, 255, 255);
$czer = imagecolorallocate($flag, 255, 0, 0);

imagefill($flag, 0, 0, $bialy);
imagefilledrectangle($flag, 0, $wys / 2, $szer, $szer / 2, $czer);
header('Content-Type: image/png');
imagepng($flag, 'flagpl.png');

?>


