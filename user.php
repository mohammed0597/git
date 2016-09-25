
<?
include "config.php";






$id=intval($_GET['id']);


include "delete.php";
include "update.php";
include "open.php";



echo"
<table width='90%' border='2'>

<tr>
<td>id</td>
<td>title</td>
<td>body</td>
<td>created_at</td>
<td>update</td>
<td>show blog </td>


</tr>
";
$selectD= mysql_query("SELECT id,title,body,created_at FROM blog2");
while($UF=mysql_fetch_array($selectD)){


echo"

<tr>
<td>".$UF['id']."</td>
<td>".$UF['title']."</td>
<td>".$UF['body']."</td>
<td>".$UF['created_at']."</td>
<td> <a href='update.php?blog2=edit&id=".$UF['id']." '> edit </a>  <a href='user.php?blog2=delete&id=".$UF['id']." '>_ delete</a> </td>
<td> <a href='open.php?blog2=open&id=".$UF['id']." '> open </a>  


</tr>";


}


mysql_close($connectdb);
?>