<?
$connectdb = mysql_connect ('localhost','root','12345678')
or die (mysql_error());
$selectdb=mysql_select_db("moh") or die (mysql_error());
?>