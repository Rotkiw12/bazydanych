<?php
$dbhost='localhost';
$dbuser='root';
$dbpass='';
$dbname='articles';
$polaczenie=mysql_connect($dbhost,$dbuser,$dbpass) or die('brak polaczenia z baza danych');
mysql_select_db($dbname,$polaczenie) or die('nie moge wybrac okreslonej bazy danych');
mysql_query("insert into uczniowie values(null,'Zygmunt','Nowak',21)");

?>
<form action="GET">
    <input type="text" name="author">
    <input type="text" name="content">
    <input type="submit" value="dodaj do bazy danych">
</form>
