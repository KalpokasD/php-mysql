<?php include('failai/konfiguracija.php'); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
 <head><title><? echo title; ?></title>
        <link href="failai/st.css" type="text/css" rel="stylesheet">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">	
 </head>
 <body>
  <table id="pagr" align="center">
    <tr>
	 <td colspan="2" id="virsus"><? include('failai/virsus.php'); ?></td>
	</tr>
	<tr>
	  <td colspan="2" valign="top">
	    <h1 align="center">Administravimas</h1><hr>
		<?php 
		 if (isset($_POST['Red'])){
			//echo $_POST['Red'];
			taisyti($_POST['Red']);
}
		   elseif($_POST['Tr']){
		         // trinti irasa
					trinti($_POST['Tr']);
				 //--------------------
		         }
		     elseif($_POST['Papildyti']){papildyti();}
		     else{lentele();}
		  //==============================================
		if(isset($_POST['Irasyti'])){
			$p=$_POST['Pav'];
			$st=$_POST['ST'];
			$t=$_POST['T'];
			$l=date('Y-n-d H:i:s');
			if(empty($p) or empty($st) or empty($t)){
				echo '<p align="center">Neužpildėte visų formos laukų</p>';}
			else{
				prisijungti();
				$r=mysql_query("insert into straipsniai values(null,'taip','$p','$st','$t','$l')") or die('Įkelti nepavyko');
				echo '<meta http-equiv="refresh" content="0;url=adm.php"/>';
			}
		}
		 if(isset($_POST['Keisti'])){
			$id=$_POST['nr']; $p=$_POST['Pav'];
			$st=$_POST['ST']; $t=$_POST['T'];
			$b=$_POST['B']; $l=$_POST['L'];
			if(empty($p) or empty($st) or empty($t) or empty($l) or empty($b)){
				echo '<p align="center">Neužpildėte visų formos laukų</p>';
			}
			else{
				prisijungti();
				echo "update straipsniai set status='$b', pavadinimas='$p', sutr_tekstas='$st', tekstas='$t', laikas=$l where ID=$id";
				$r=mysql_query("update straipsniai set `status`='$b', `pavadinimas`='$p', `sutr_tekstas`='$st', `tekstas`='$t', `laikas`='$l' where `ID`=$id limit 1") or die('Ikelti nepavyko');
				echo '<meta http-equiv="refresh" content="0;url=adm.php"/>';
			}
		}
		if(isset($_POST['trinti'])){
			$koks=$_POST['trinti'];
			prisijungti();
			$r=mysql_query("delete from straipsniai where ID=$koks") or die('Ikelti nepavyko');
			echo '<meta http-equiv="refresh" content="0;url=adm.php"/>';
		}
		  
		  //==============================================
				
		?></td>	  
	</tr>
	<tr>
	 <td colspan="2"><?php include('failai/apacia.php'); ?></td>
	</tr>
	<tr>
	 <td colspan="2" id="apacia"></td>
	</tr>
  </table>
 </body>
</html>