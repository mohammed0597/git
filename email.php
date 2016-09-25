<?
$message = "Your Activation Code is ".$code." ";
    $to = "$email";
    $subject="Activation Code ";
    $from = 'mohammed.0599@outlook.sa';
    $body='Your Activation Code is ".$code." Please Click On This link <a href="register.php">Verify.php?id='.$db_id.'&code='.$code.'</a>to activate your account.';
    $headers = "From:.$from.";
    
    mail ($to,$subject,$body,$headers);
	
	echo "An Activation Code Is Sent To You Check You Emails";


if(isset($_GET['id']) && isset($_GET['code']))
{
	$id=$_GET['id'];
	$code=$_GET['id'];
	
	$select=mysql_query("SELECT email,password FROM verify WHERE id='$id' and code='$code'");
	if(mysql_num_rows($select)==1)
	{
		while($row=mysql_fetch_array($select))
		{
			$email=$row['email'];
			$password=$row['password'];
		}
		$insert_user=mysql_query("INSERT into verified_user values('id','$email','$password')");
		$delete=mysql_query("DELETEfrom verify where id='$id' and code='$code'");
	}
}

?>