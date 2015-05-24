<body>
<h1>Savaitės dienos nustatymas</h1>
<div class="info">
<form method="post" action="">
  <table>
    <tr>
      <td valign="top"><p>Data(MMMM-mm-dd) = <input type="text" name="a">
        <br>
      <p><input type="submit" value="Rasti savaites diena"></p>
	  </td>
    </tr>
  </table>
</form>

<?php
if (isset($_POST['a'])){
    $A=$_POST['a'];
    if(empty($A)){echo '<p class="klaida">Neuzpildyta forma</p>';}
	  elseif($A*1==0){echo '<p class="klaida">Ivedete ne skaicius</p>';}
	    switch($day=strftime("%A",strtotime($A))){
			  case "Monday" : echo ("$A yra pirmadienis");
			  break;
			  case "Tuesday" : echo ("$A yra antradienis");
			  break;
			  case "Wednesday" : echo ("$A yra treciadienis");
			  break;
			  case "Thursday" : echo ("$A yra ketvirtadienis");
			  break;
			  case "Friday" : echo ("$A yra penktadienis");
			  break;
			  case "Saturday" : echo ("$A yra sestadienis");
			  break;
			  case "Sunday" : echo ("$A yra sekmadienis");
			  break;
			  }

  }
?></div>
</body>