<?

include "config.php";
if ($_REQUEST['blog2'] =='delete'){
	$Udelete = mysql_query(" DELETE FROM blog2 WHERE id='".$id."' ") or die (mysql_error());
	if (isset($Udelete)) {
		echo"<h3 style='color:green;'>delete</h3>";
	

	}
}
?>