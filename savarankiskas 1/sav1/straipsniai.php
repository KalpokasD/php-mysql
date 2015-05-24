<h1>Straipsniai</h1>
<hr>
<?php
prisijungti();
$r=@mysql_query("select * from straipsniai where status='taip'") or die("<p>Sistemos klaida...<br>Pamėginkite vėliau</p>");
$kiek=@mysql_num_rows($r);
if(empty($_GET['straipsniai'])){
if($kiek==0){echo "<p> Straipsnių nėra</p>";}
  else{
    for($i=0;$i<$kiek;$i++){
	   $e=@mysql_fetch_array($r);
	   echo '<table class="straipsnis"><tr><td>';
	   echo '<p class="antraste">'.$e['pavadinimas'].'</p>';
	   echo '<p class="laikas">'.$e['laikas'].'</p><hr>';
	   echo '<p>'.$e['sutr_tekstas'].'<br><a class="placiau" href="?straipsniai='.$e['ID'].'">Plačiau...</a></p>';
	   echo '</td></tr></table>';
	   }
    }
}
else{
   $s=$_GET['straipsniai'];
   $r=@mysql_query("select * from straipsniai where status='taip' and ID='$s'") or die("<p>Sistemos klaida...<br>Pamėginkite vėliau</p>");
   $kiek=@mysql_num_rows($r);
   if($kiek!=0){
     $e=@mysql_fetch_array($r);
	   echo '<table class="straipsnis"><tr><td>';
	   echo '<p class="antraste">'.$e['pavadinimas'].'</p>';
	   echo '<p class="laikas">'.$e['laikas'].'</p><hr>';
	   echo '<p>'.$e['tekstas'].'<br><a class="placiau" href="?straipsniai">Atgal...</a></p>';
	   echo '</td></tr></table>';	 
	 }
    else{
	   echo '<meta http-equiv="refresh" content="0;url=?straipsniai"/>';  
	}

   }	
	
?>