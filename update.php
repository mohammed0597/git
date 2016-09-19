<?
if ($_REQUEST['blog2'] =='edit'){
$setU = mysql_query("SELECT * FROM blog2 WHERE id = '".$id."' ");	
$UQuery= mysql_fetch_object($setU);

$i=$_POST['id'];
$t=$_POST['title'];
$b=$_POST['body'];
$c=$_POST['created_at'];
 
if (isset($_POST['editblog2'])){
	$UpdateDb = mysql_query("UPDATE blog2 SET
	id ='$i',
	title='$t',
	body='$b',
	created_at='$c'
	WHERE id='".$i."' 
	");

	if(isset($UpdateDb)){
		echo"<h3 style='color:green;'>update Db is Done</h3>";
	}
}
}
echo"
<form action='user.php?blog2=edit&id='".$id."'' method='POST'>
id :<input name='id' id='id' type='text' value='".$UQuery->id."'/><br/></br>
title:<input name='title' id='title' type='text' value='".$UQuery->title."'/><br/><br/>


<br>
body:<textarea rows='4' cols='50' name='body' >
".$UQuery->body."

</textarea>
</br>
created_at:<input name='created_at' id='created_at' type='text' value='".$UQuery->created_at."'/><br/><br/>
<input name='editblog2' type='submit' value='update'>


</form>

";
?>
