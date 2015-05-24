<?php 
include('failai/konfiguracija.php'); 
header('content-type:image/png'); 
$im=imageCreate(500,200); 
imageColorAllocate($im,250,250,250); 
$juoda=imageColorAllocate($im,0,0,0); 
//imageString($im,2,5,180,$_GET['id'],$juoda); 
imageLine($im,5,170,495,170,$juoda); 
prisijungti_prie_MySQL(); 
$r=mysql_query("select pavadinimas,balsavo from balsavimai where id=".$_GET['id']); 
$e=mysql_fetch_array($r); 
imageString($im,2,5,20,$e['pavadinimas'],$juoda); 
imageString($im,2,5,185,"Viso: ".$e['balsavo'],$juoda); 
$r1=mysql_query("select tekstas,pasirinko from balsavimu_duomenys where balid=".$_GET['id']) or die('Nepavyko1'); 
$kiek1=mysql_num_rows($r1); 
for($i=0;$i<$kiek1;$i++){ 
	$e1=mysql_fetch_array($r1); 
	imageRectangle($im,10+40*$i,40,30+40*$i,170,$juoda); 
	$proc=round(($e1['pasirinko']*1000)/$e['balsavo'])/10; 
	$kiek=round(($proc*130)/100); 
	imageFilledRectangle($im,10+40*$i,170-$kiek,30+40*$i,170,$juoda); 
	imageString($im,2,10+40*$i,170,$proc.'%',$juoda); 
} 
imagePng($im); 
imageDestroy($im); 
?> 