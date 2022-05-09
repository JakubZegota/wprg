<?php


$szer = 400;
$wys = 200;
$flag = imagecreatetruecolor($szer, $wys);
$bialy = imagecolorallocate($flag, 255, 255, 255);
$czer = imagecolorallocate($flag, 255, 0, 0);
$nieb = imagecolorallocate($flag, 0, 0, 255);


imagefill($flag, 0, 0, $czer);
imagefilledrectangle($flag, 100, 0, 150, $wys, $bialy);
imagefilledrectangle($flag, 0, 80, $szer, 120, $bialy);
imagefilledrectangle($flag, 110, 0, 140, $wys, $nieb);
imagefilledrectangle($flag, 0, 90, $szer, 110, $nieb);

header('Content-Type: image/png');
imagepng($flag, 'flagnsk.png');

?>


