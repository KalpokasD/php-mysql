<?php
define(title,"Kažkokia svetainė");
define(DB,"sav1");
define(Vartotojas,"root");
define(Slaptazodis,"vertrigo");
//---------------------------------------------------------------
function prisijungti(){
@mysql_connect('localhost',Vartotojas,Slaptazodis) or die("<p>Nėra galimybių prisijungti prie MySQL<br>Pamėginkite vėliau</p>");
@mysql_select_db(DB) or die("<p>Nėra galimybių prisijungti prie Duomenų bazės<br>Pamėginkite vėliau</p>");
}
//-------------------------------------------------------------------
function papildyti(){?>
<form method="POST">
<table align="center">
<tr>
<td>Pavadinimas</td><td><input type="text" size="50" name="Pav"></td>
</tr>
<tr>
<td>Trumpas tekstas</td><td><textarea name="ST" cols="50" rows="3"></textarea></td>
</tr>
<tr>
<td>Tekstas</td><td><textarea name="T" cols="50" rows="5"></textarea></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" value="Įrašyti..." name="Irasyti"></td>
</tr>
</table>
</form>
<?php }
//--------------------------------------------------------------------
function taisyti($nr){
	prisijungti();
	$r=mysql_query("select * from straipsniai where ID=$nr") or die('Nepavyko rasti iraso');
	$e=mysql_fetch_array($r); ?>
<form method="POST">
<input type="hidden" name="nr" value="<? echo $e['ID']; ?>">
<table align="center">
<tr><td>Pavadinimas</td><td><input type="text" size="50" name="Pav" value="<? echo $e['pavadinimas']; ?>"></td></tr>
<tr><td>Trumpas tekstas</td><td><textarea name="ST" cols="50" rows="3"><? echo $e['sutr_tekstas']; ?></textarea></td></tr>
<tr><td>Tekstas</td><td><textarea name="T" cols="50" rows="5"> <? echo $e['tekstas']; ?></textarea></td> </tr>
<tr><td>Būsena</td><td><input type="text" size="50" name="B" value="<? echo $e['status']; ?>"></td> </tr>
<tr><td>Laikas</td><td><input type="text" size="50" name="L" value="<? echo $e['laikas']; ?>"></td> </tr>
<tr><td colspan="2" align="center"><input type="submit" value="Keisti..." name="Keisti"></td>
</tr></table></form> <?}
//--------------------------------------------------------------------

function lentele(){
prisijungti();
$r=@mysql_query("select * from straipsniai") or die("<p>Sistemos klaida...<br>Pamėginkite vėliau</p>");
$kiek=@mysql_num_rows($r);
echo '<table border="1">';
echo '<tr><th>ID</th><th>Būsena</th><th>Pavadinimas</th><th>Sutrumpintas tekstas</th><th>Tekstas</th><th>Laikas</th><th>Veiksmai</th></tr>';
for($i=0;$i<$kiek;$i++){
	   $e=@mysql_fetch_array($r);
	   if ($e['status']=='taip'){$b='publikuojamas';}
	    else{$b='nepublikuojamas';}
	   echo '<tr><td>'.$e['ID'].'</td>';
	   echo '<td>'.$b.'</td>';
	   echo '<td>'.$e['pavadinimas'].'</td>';
	   echo '<td>'.$e['sutr_tekstas'].'</td>';
	   echo '<td>'.$e['tekstas'].'</td>';
	   echo '<td>'.$e['laikas'].'</td>';
	   echo '<td><form method="post"><input type="hidden" name="Red" value="'.$e['ID'].'"><input type="submit" value="Redaguoti..."></form><form method="post"><input type="hidden" name="Tr" value="'.$e['ID'].'"><input type="submit" value="Trinti..."></form></td>';
	     }
echo '</tr></table>';		 
echo '<form method="post"><input type="submit" value="Papildyti..." name="Papildyti"></form>';
}
//---------------------------------------------------------------------------------
function trinti($nr){
prisijungti();
$r=mysql_query("select * from straipsniai where ID=$nr") or die('Nepavyko rasti iraso');
$e=mysql_fetch_array($r);
?>
<p align="center">Tikrai norite trinti įrašą:<br><b><? echo $e['ID'].".".$e['sutr_tekstas'];?>?</p>
<table align="center"><tr><td>
<input type="hidden" name="trinti" value="<? echo $e['ID']; ?>">
<form method="POST"><input type="submit" value="Taip"></form></td>
<td><form method="POST"><input type="submit" value="Ne"></form></td></tr></table>
<?
}

?>