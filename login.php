<?


include"config.php";
$id=intval($_GET['id']);
$email=$_POST['email'];
$pass=md5($_POST['password']);

if(isset($_POST['login'])){


	if(empty($email) or empty($pass)){

		echo"<h3 style='color:red;'>error1</h3>";

	} else {
		$DBsql=mysql_query("SELECT * FROM verify WHERE email='".$email."' AND password='".$pass."' ");
		if(mysql_num_rows($DBsql) > 0){
        $FetchU =mysql_fetch_assoc($DBsql);

        $uid=$FetchU['id'];
        $uemail=$FetchU['email'];
        $upass=$FetchU['password'];

        if($uemail != $email AND $upass!= $pass){
        	echo"<h3 style='color:red;'>error3</h3>";

        }else{
        	session_start();
                $_SESSION['id']=$id;
                header("location:user.php");


        }

		}else{
			echo"<h3 style='color:red;'>error2</h3>";
		}

	}
}



echo"

<form action ='login.php' method='POST'>

email<input name='email' id='email' type='text'><br/></br>
password<input name='password' id='password' type='password'><br/></br>
<form/>
<input name='login' type='submit' value='log in'>


 


";



?>
<a href="user.php? '>">view</a></br>
