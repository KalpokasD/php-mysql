<?php
header("Content-type: image/jpeg");
$image=imageCreateFromJpeg("miske.jpg");
$color=imageColorAllocate($image, 100, 150, 250);
imageLine($image,0,420,537,420,$color);
imageLine($image,0,30,537,30,$color);
imageLine($image,30,0,30,450,$color);
imageLine($image,507,0,507,450,$color);

for($i=0;$i<537;$i++){
$color=imageColorAllocate($image, rand(0,255), rand(0,255), rand(0,255));
imageLine($image,$i,rand(420,450),$i+2,rand(420,450),$color); }

for($i=0;$i<537;$i++){
$color=imageColorAllocate($image, rand(0,255), rand(0,255), rand(0,255));
imageLine($image,$i,rand(0,30),$i+2,rand(0,30),$color); }

for($i=0;$i<450;$i++){
$color=imageColorAllocate($image, rand(0,255), rand(0,255), rand(0,255));
imageLine($image,rand(507,537),$i,rand(507,537),$i+2,$color); }

for($i=0;$i<450;$i++){
$color=imageColorAllocate($image, rand(0,255), rand(0,255), rand(0,255));
imageLine($image,rand(0,30),$i,rand(0,30),$i+2,$color); }

imageTtfText($image, 20, 0, 40,70,$color,"FLORES.TTF" ,"www.svetaine.lt"); 

imageJpeg($image);
imageDestroy($image); ?>