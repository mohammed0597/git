<?
include "config.php";

echo"

<form action ='register.php' method='POST'>

email<input name='email' id='email' type='text'><br/></br>
password<input name='password' id='password' type='password'><br/></br>
<form/>
<input name='register' type='submit' value='sign up'>

";


$email=$_POST['email'];
$pass=md5($_POST['password']);
$code=substr(md5(mt_rand()),0,15);


if (isset($_POST['register'])){
$DB=mysql_query("INSERT INTO verify (email,password) values('$email','$pass',)");





}
?>
