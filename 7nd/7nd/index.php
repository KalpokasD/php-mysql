<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1257">
<title>Paveikslelis</title>
</head>

<body>
<form method="POST">
	<p>Paveikslelio dydis:</p>
	<p><input type="radio" value="x=100&y=100" checked name="R1">100 x 100 px</p>
	<p><input type="radio" value="x=200&y=200" name="R1">200 x 200 px</p>
	<p><input type="radio" value="x=300&y=300" name="R1">300 x 300 px</p>
	<p><input type="radio" value="V" name="R1"><input type="text" name="x" size="4">
	<input type="text" name="y" size="4"> px</p>
	<p><input type="submit" value="Rodyti"></p>
</form>
<hr>
<?php
if (isset($_POST['R1'])){
	if($_POST['R1']=='V'){
		if (empty($_POST['x']) or empty($_POST['y']) or $_POST['x']*$_POST['y']==0){
			echo "Neivesti dydziai arba netinkamos dydziu reiksmes";}
		else{
			echo '<img src="paveikslelis.php?x='.$_POST['x'].'&y='.$_POST['y'].'">';}
	}
	else{
		echo '<img src="paveikslelis.php?'.$_POST['R1'].'">';}
	}
?>
</body>

</html>
