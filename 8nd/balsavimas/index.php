<?php include("failai/konfiguracija.php");?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
 <head><title>Balsavimai</title>
        <link href="failai/style.css" type="text/css" rel="stylesheet">
		<link href="failai/st.css" type="text/css" rel="stylesheet">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">	
 </head>

 <body class="bg">
<table width="100%" height="100%" cellpadding="0" cellspacing="0" class="bg2">
  <tr>
    <td colspan="2" align="center" valign="top"><table width="100%" height="476" border="0" align="left" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="93" height="63">&nbsp;</td>
        <td width="185" valign="top"><img src="images/decorwise_feedback_02.jpg" width="185" height="63"></td>
        <td width="348">&nbsp;</td>
      </tr>
      <tr>
        <td height="198" valign="top"><img src="images/decorwise_feedback_06.jpg" width="93" height="198"></td>
        <td valign="top"><img src="images/decorwise_feedback_07.jpg" width="185" height="198"></td>
        <td align="left" valign="top"><img src="images/decorwise_feedback_08.jpg" width="238" height="198" border="0" usemap="#Map"></td>
      </tr>
      <tr>
        <td height="69">&nbsp;</td>
        <td valign="top"><img src="images/decorwise_feedback_11.jpg" width="185" height="69"></td>
        <td valign="top">&nbsp;<h3 id="v"> Balsavimų svetainė</h3><hr></td>
      </tr>
      <tr class="100">
        <td height="146" valign="bottom">&nbsp;</td>
        <td height="146" valign="bottom">&nbsp;</td>
        <td height="146" valign="top">
		<p>Balsavimų svetainėje galėsite balsuoti, sukurti naują balsavimą, sužinoti kitų balsavimų rezultatus...</p>
          <?php 
		  if (isset($_GET['naujas'])){include('naujas.php');}
		    elseif(isset($_GET['balsavimai'])){include('balsavimai.php');}
			  elseif(isset($_GET['rezultatai'])){include('rezultatai.php');}
			  // ...elseif(isset($_GET['...'])){include('...');}
			    else{include('pradzia.php');}
		?>
		
		  </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td width="278" align="center" valign="top">&nbsp;</td>
    <td width="504" align="center" valign="top"><table width="80%"  cellspacing="0" cellpadding="0">
      <tr>
        <td><div align="center"><span class="copyright">2008 &copy;</span></div></td>
      </tr>
    </table></td>
  </tr>
</table>
<map name="Map">
  <area shape="rect" coords="10,40,90,63" href="index.php?pradzia">
  <area shape="rect" coords="10,65,90,85" href="index.php?balsavimai">
  <area shape="rect" coords="10,87,90,106" href="index.php?rezultatai">
  <area shape="rect" coords="10,107,90,128" href="index.php?naujas">
  <area shape="rect" coords="10,129,90,152" href="#">
</map>


</body>
</html>
 
</html>