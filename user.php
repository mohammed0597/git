
<?
include "config.php";






$id=intval($_GET['id']);


include "delete.php";
include "update.php";

echo"
<table width='90%' border='2'>

<tr>
<td>id</td>
<td>title</td>
<td>body</td>
<td>created_at</td>
<td>update</td>


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
<td> <a href='user.php?blog2=edit&id=".$UF['id']." '> edit </a>  <a href='user.php?blog2=delete&id=".$UF['id']." '>_ delete</a> </td>



</tr>";


}
echo"
</table>
";


mysql_close($connectdb);
?>