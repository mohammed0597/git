<?



 include "config.php";
				
$id=intval($_GET['id']);

if ($_REQUEST['blog2'] =='open'){

$setU = mysql_query("SELECT * FROM blog2 WHERE id = '".$id."' ");	
$UQuery= mysql_fetch_object($setU);




echo"
<form action='open.php?blog2=open&id='".$id."'' method='POST'>
ID:  ".$UQuery->id."<br/>
title: ".$UQuery->title."<br/>



body: ".$UQuery->body."


</br>
created_at:".$UQuery->created_at." <br/>
image:<img src=".$UQuery->image."> <br/>


</form>

";
}
?>