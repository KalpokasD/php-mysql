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
	  <td id="meniu" valign="top">
	      <p>&nbsp;</p>
	      <p><a href="?pradzia">Pradžia</a></p>
		  <p><a href="?naujienos">Naujienos</a></p>
		  <p><a href="?straipsniai">Straipsniai</a></p>
		  <p><a href="?galerija">Galerija</a></p>
	  </td>
      <td valign="top">
	    <?php 
		  if (isset($_GET['naujienos'])){include('naujienos.php');}
		    elseif(isset($_GET['straipsniai'])){include('straipsniai.php');}
			  elseif(isset($_GET['galerija'])){include('galerija.php');}
			  // ...elseif(isset($_GET['...'])){include('...');}
			    else{include('pradzia.php');}
		?></td>	  
	</tr>
	<tr>
	 <td colspan="2"><? include('failai/apacia.php'); ?></td>
	</tr>
	<tr>
	 <td colspan="2" id="apacia"></td>
	</tr>
  </table>
 </body>
</html>