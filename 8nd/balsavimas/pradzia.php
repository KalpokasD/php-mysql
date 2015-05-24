<p>Pateikti balsavimai:</p> 
<?
prisijungti_prie_MySQL();
$r=mysql_query("select pavadinimas from balsavimai where rodyti='taip'") or die('Nepavyko');
$kiek=mysql_num_rows($r);
	if ($kiek != 0){
		echo "<ul>";
			for($i=0;$i<$kiek;$i++){
				$e=mysql_fetch_array($r);
				echo "<li>".$e['pavadinimas']."</li>";
			}
		echo "</ul>";
	}
	else{echo "Balsavimu nera";}
?>
<hr> 
<p>Noredami balsuoti pereikite i puslapi <b>Balsavimai</b></p> 