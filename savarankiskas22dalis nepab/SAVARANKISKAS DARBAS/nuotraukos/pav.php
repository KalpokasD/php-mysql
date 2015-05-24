<?php 
if (isset($_GET["pav"])){
 $tipas=substr($_GET["pav"],strlen($_GET["pav"])-3,strlen($_GET["pav"]));
 if ($tipas=='jpg'){ header("Content-type: image/jpeg"); $image=imageCreateFromJpeg($_GET["pav"]);}
  elseif($tipas=='png'){ header("Content-type: image/png"); $image=imageCreateFromPng($_GET["pav"]);}
   elseif($tipas=='gif'){ header("Content-type: image/gif"); $image=imageCreateFromGif($_GET["pav"]);}
     else{die("Klaida!!!");}
  
  $plotis = imageSX($image);
  $aukstis = imageSY($image);
  $juoda=imageColorAllocate($image, 0, 0, 0); 
  $balta=imageColorAllocate($image, 255, 255, 255);
  imageTTFText($image, 6, 0, $plotis-150, 30, $juoda, "Flores.ttf", "www.svetaine.lt");
  imageFilledEllipse($image,$plotis-170,25,25,25,$juoda);
  imageFilledEllipse($image,$plotis-165,25,10,10,$balta);
  	

	if ($tipas=='jpg'){ imageJpeg($image); }
    if($tipas=='png'){ imagePng($image); }
    if($tipas=='gif'){ imageGif($image); }
    imageDestroy($image);
}
else {echo "Klaida!";}
 ?>