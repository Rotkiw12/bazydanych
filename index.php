<?php
$polaczenie=mysql_connect('localhost','root','') or die('brak polaczenia z baza danych');
$tmp=mysql_select_db('uczniowie',$polaczenie) or die('nie moge wybrac okreslonej bazy danych');
print_r($polaczenie);
print_r($tmp);
$add=mysql_query("insert into uczniowie values(null,'Zygmunt','Nowak',21)");
print_r($add);
?>
