<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Diena</title>
<style type="text/css">
.info{width:500px; margin:auto;}
.klaida{color:red; text-align: center;}
</style>
</head>

<body>
<hr>
<div class="info">
<p>Rasyti atsiliepima</p>
<form method="post" action="">
  <table>
    <tr>
      <td valign="top"><p>Vardas = <input type="text" name="vardas">
        <br>
		email = <input type="text" name="email">
		<br>
		atsiliepimas = <input type="text" name="atsiliepimas">
		<br></p>
      <p><input type="submit" value="Vykdyti"></p>
	  </td>
    </tr>
  </table>
</form>

<?php
if (isset($_POST['vardas'])){
    $A=$_POST['vardas'];
	$B=$_POST['email'];
	$C=$_POST['atsiliepimas'];
				$conn = mysql_connect('localhost','root','vertrigo');
				mysql_select_db('baze') or die('nerandu db');
				$sql = "INSERT INTO knyga "."(vardas, email, data, atsiliepimas) "."VALUES ( '$A', '$B', NOW(), '$C' )";
				$retval = mysql_query( $sql, $conn );
				if(! $retval ){
					die('Could not enter data: ' . mysql_error());
				}
				echo "Atsiliepimas nusiustas<br>";
				$rezultatai = mysql_query("SELECT vardas, email, atsiliepimas FROM knyga");
				$num = mysql_num_rows($rezultatai);
				for ($i=0; $i<$num; $i++) {
					$eile = mysql_fetch_array($rezultatai);
					echo $eile["vardas"]." ".$eile["email"]."   ".$eile["atsiliepimas"];
					echo "<br>";}
				mysql_close($conn);
  }
?></div>
<hr>


</body>
</html>
