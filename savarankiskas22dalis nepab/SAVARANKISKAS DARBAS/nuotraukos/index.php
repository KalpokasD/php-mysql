<html>
<head><title>Foto</title></head>
<body>
<h2 align="center">Paveiksleliai:</h2>
<hr>
<?
$foto=array("grybas.jpg","miske.jpg","meska.jpg");
echo '<table align="center"><tr>';
for($i=0;$i<count($foto);$i++){
 echo '<td><a href="index.php?pav='.$i.'"><img src="'.$foto[$i].'" height="100"></a></td>';
}
echo '</tr></table>';
?>
<hr>
<p align="center"><i>Paspaudus ant paveiksliuko bus pateikiamas didelis paveikslelis su logotipu</i></p
 <?
 if (isset($_GET['pav'])){
 $p=$_GET['pav'];
 if($p>=0 and $p<count($foto)){
   echo '<p align="center"><img src="pav.php?pav='.$foto[$p].'"></p>'; 
  }
  else{ echo '<p align="center">Tokio paveikslelio nera</p>';}
 }
 ?>
</body>
</html>