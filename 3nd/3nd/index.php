<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"><html>
<head><title>Skaièiavimu svetaine</title></head>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
<body>
 <table width="90%" align="center">
  <tr>
    <td colspan="2"><h1 align="center">Skaieiavimu svetaine</h1><hr></td>
  </tr>
  <tr>
    <td width="200">
	  <a href="?meniu=1">Pradzia</a>
	  <br><br>
	  <a href="?meniu=2">Skaiciuotuvas</a>
	  <br><br>
	  <a href="?meniu=3">Valiutos konvertuotojas</a>
	  <br><br>
	  <a href="?meniu=4">Savaites dienos nustatymas</a>
	  </td>
    <td align="left"> 
	<?php
	  if (isset($_GET['meniu'])){
	  
	    $koks=$_GET['meniu'];
		if($koks==1){include('puslapiai/link1.php');}
		elseif($koks==2){include('puslapiai/link2.php');}
		elseif($koks==3){include('puslapiai/link3.php');}
		elseif($koks==4){include('puslapiai/link4.php');}
		else {echo "<h1>404 Klaida</h1><hr><p>Tokio puslapio nëra</p>";}
		
		}
	   else{
	       include('puslapiai/link1.php');}
	
	
	?> </td>
  </tr>
  <tr>
    <td colspan="2" align="center">2014&copy;</td>
  </tr>
 </table>
</body>
</html>

