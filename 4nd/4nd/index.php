<html>
	<head><title>Albumas</title></head>
	<body>
	<table width="100%" border="1" cellspacing="2" cellpadding="3">
		<tr>
			<td align="left" valign="top" width="20%">
				<table width="100%" border="1" cellspacing="0" cellpadding="3"> 
					<tr>
						<td>Albumas - Lietuva</td>
					</tr>
					<tr align="left" valign="top">
						<td><p>
							<?php
								$failas = "info.txt";
								$f=fopen($failas, "r");
								$turinys = fread($f, filesize ($failas));
								fclose($f);
								$eilutes = explode("\r\n", $turinys);
								$kiek = count($eilutes) -1;
								if (!isset($_GET['foto'])){$foto=0;}
									else {$foto=$_GET['foto'];}
								for ($i=0; $i <= $kiek; $i++){
									$eil=explode("*", $eilutes[$i]);
									$nr = $i+1;
										if($foto==$i){echo "<b>$nr</b>";}
								else{
									echo "<a href='index.php?foto=".$i."' title='".$eil[1]."'>$nr</a>";}
								}	
							?>
						</p></td>
					</tr>
				</table>
			</td>
			<td width="60%" align="center"><p> 
											<?php
												$nuotrauka = explode("*",$eilutes[$foto]);
												echo "<img src='".$nuotrauka[0]."'alt='".$nuotrauka[1]."'><br>";
												echo "<br><b>".$nuotrauka[1]."</b><br><p>";
												if($foto != 0){
													$previ = $foto-1;
													echo "<a href='index.php?foto=".$previ."'>Atgal</a>";
												}
												if($foto < $kiek){
													$nexti = $foto+1;
													echo "<a href='index.php?foto=".$nexti."'>Pirmyn</a>";
												}
											?>
											</p>
			</td>
		</tr>
	</table>
	</body>
</html>
		