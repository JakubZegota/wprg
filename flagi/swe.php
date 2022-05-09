<?php

$szer = 400;
$wys = 200;
$flag = imagecreatetruecolor($szer, $wys);
$bialy = imagecolorallocate($flag, 255, 255, 255);
$nieb = imagecolorallocate($flag, 0, 0, 255);
$zolt = imagecolorallocate($flag, 255, 255, 0);

imagefill($flag, 0, 0, $zolt);
imagefilledrectangle($flag, 0, 0, 100, 80, $nieb);
imagefilledrectangle($flag, 0, 120, 100, $wys, $nieb);
imagefilledrectangle($flag, 140, 0, $szer, 80, $nieb);
imagefilledrectangle($flag, 140, 120, $szer, $wys, $nieb);


header('Content-Type: image/png');
imagepng($flag, "flagswe.png");


?>

