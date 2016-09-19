<?
include "config.php";

echo"
<form action='insert.php' method='POST'>
ID :<input name='ID' id='ID' type='text'/><br/></br>
title:<input name='title' id='title' type='text'/><br/><br/>

<form/>
<br>
body:<textarea rows='4' cols='50' name='body' >

</textarea>
<br>
<input name='registerdo' type='submit'>

";
$i=$_POST['id'];
$t=$_POST['title'];
$b=$_POST['body'];



if(isset($_POST['registerdo'])){
$addD=mysql_query("INSERT INTO blog2 (id,title,body) VALUES('$i','$t','$b') ")
 or die(mysql_error());

}
?>