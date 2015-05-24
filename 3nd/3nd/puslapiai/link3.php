<body>
<h1>Valiutos konvertuotojas</h1>
<div class="info">
<form method="post" action="">
  <table>
    <tr>
      <td valign="top"><p>Ltl = <input type="text" name="a">
        <br>
      <p><input type="submit" name="eurai" value="Konvertuoti i Eurus"></p>
	  <p><input type="submit" name="doleriai" value="Konvertuoti i Dolerius"></p>
	  </td>
    </tr>
  </table>
</form>

<?php
if (isset($_POST['a'])){
    $A=$_POST['a'];
    if(empty($A )){echo '<p class="klaida">Neuzpildyta forma</p>';}
	  elseif($A*1==0){echo '<p class="klaida">Ivedete skaicius</p>';}
	    else{
			  if(isset($_POST['eurai'])) { echo " $A  Ltl =  ", $A*0.35908, " Eur"; }
			    elseif(isset($_POST['doleriai'])){ echo " $A  Ltl = ", $A*0.28980501,"  Usd"; }
		    }

  }
?></div>
</body>