<?php
define('DB',"balsavimodb");
define('Vartotojas',"root");
define('Slaptazodis',"vertrigo");

function prisijungti_prie_MySQL (){ 
@mysql_connect('localhost',Vartotojas,Slaptazodis) or die("<p>Nera galimybiu prisijungti prie MySQL<br>Pameginkite veliau</p>"); 
@mysql_select_db(DB) or die("<p>Nera galimybiu prisijungti prie Duomenu bazes<br>Pameginkite veliau</p>"); 
} 





?>