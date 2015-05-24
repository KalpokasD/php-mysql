<p>Balsavimu rezultatai</p> 
<?php prisijungti_prie_MySQL(); 
$r=mysql_query("select id,pavadinimas,balsavo from balsavimai where rodyti='taip'") or die('Nepavyko'); 
$kiek=mysql_num_rows($r); 
for($i=0;$i<$kiek;$i++){ 
	$e=mysql_fetch_array($r); 
	echo "<p>".$e['pavadinimas']."</p>"; 
	$r1=mysql_query("select tekstas,pasirinko from balsavimu_duomenys where balid=".$e['id']) or die('Nepavyko1'); 
	$kiek1=mysql_num_rows($r1); 
	echo "<ul>"; 
	for($j=0;$j<$kiek1;$j++){ 
		$e1=mysql_fetch_array($r1); 
		$proc=round(($e1['pasirinko']*1000)/$e['balsavo'])/10; 
		echo "<li>".$e1['tekstas']." : ".$e1['pasirinko']." (".$proc." %)</li>"; 
	}  
	echo "</ul>"; 
	echo '<p> <img src="stulpeline.php?id='.$e['id'].'"></p>';
	echo "<p>Is viso : ".$e['balsavo']."</p>"; 
} 
?>