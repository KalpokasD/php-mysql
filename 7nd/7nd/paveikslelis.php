<?php
header("Content-type:image/png");
if (isset($_GET['x'])){
$X=$_GET['x']; $Y=$_GET['y'];}
else{$X=100; $Y=100;}
$ix=$X/10;
$iy=$Y/10;
$pic=imageCreate($X,$Y);
imageColorAllocate($pic,255,255,200);
$sp1 = ImageColorAllocate($pic,0,185,120);
$sp2 = ImageColorAllocate($pic,0,20,155);
$sp3 = ImageColorAllocate($pic,0,0,0);
$koord=array(2*$ix,8*$iy,8*$ix,2*$iy,9*$ix,9*$iy);
imagefilledRectangle($pic,$ix,$iy,7*$ix,7*$iy,$sp1);
imageFilledPolygon($pic,$koord,3,$sp2);

imagefilledellipse($pic,5*$ix,5*$iy, 3*$ix, 3*$iy, $sp3);

imagepng($pic);
imageDestroy($pic);
?>