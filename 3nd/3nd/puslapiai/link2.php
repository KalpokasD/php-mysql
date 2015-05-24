<body>
<h1>Skaičiuotuvas</h1>
<div class="info">
<form method="post" action="">
  <table>
    <tr>
      <td valign="top"><p>a = <input type="text" name="a">
        <br>b = <input type="text" name="b"></p>
      <p><input type="submit" name="sudetis" value="Rasti a+b"></p>
	  <p><input type="submit" name="atimtis" value="Rasti a-b"></p>
	  <p><input type="submit" name="daugyba" value="Rasti a*b"></p>
	  <p><input type="submit" name="dalyba" value="Rasti a/b"></p>
	  </td>
    </tr>
  </table>
</form>

<?php
if (isset($_POST['a'])){
    $A=$_POST['a'];
    $B=$_POST['b'];
    if(empty($A) or empty($B)){echo '<p class="klaida">Neuzpildyta forma</p>';}
	  elseif($A*1==0 or $B*1==0){echo '<p class="klaida">Ivedete ne skaicius</p>';}
	    else{
			  if(isset($_POST['sudetis'])) { echo $A+$B; }
			    elseif(isset($_POST['atimtis'])){ echo $A-$B; }
				  elseif(isset($_POST['daugyba'])){ echo $A*$B; }
				    elseif(isset($_POST['dalyba'])){ echo $A/$B; } 
		    }

  }
?></div>
</body>