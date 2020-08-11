<html>
<head>
<style>
body{
background-image:url('4.jpg');
background-repeat:no-repeat;
background-size:100% 100%;
}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}

.login form{
 width:220px;
 height:210px;
 background-color: black;
 padding: 10px 0px 0px 4px;
 -moz-border-radius: 15px;
 -webkit-border-radius: 15px;
 color: white;
 text-transform: uppercase;
 font-size: 11px;
 font-weight: bold;
 font-family: "Century Gothic";
}
.login input, .login select{
 width: 195px;
 height: 30px;
 margin: 3px 0px 0px 10px;
 border: 0px;
 font-weight: bold;
}

.login input:focus{
 background-color: lightblue;
}
.login form label{
 margin: 5px 0px 0px 15px;
}

a{
 outline:none;
}

</style>
</head>
<center>
<br><br><br><br><br>
<h1>LOGIN</h1>
<div class="login">

<form action="">
<b>Username:</b><input type="text" name="uname" value=""/><br><br>
<b>Password:</b><input type="password" name="pwd" value=""/><br><br>
<input type="submit" name="login" class="button" value="LOGIN"/><br><br>
<input type="reset" name="reset"  class="button" value="RESET"/><br><br>


</form>
</div>
</center>

<?php
if(isset($_REQUEST['login'])){
	$conn=mysqli_connect("localhost","root","") or die(mysqli_connect_error());
	$db=mysqli_select_db($conn,"saisri")or die(mysqli_connect_error());
	$q="select * from user where username='".$_REQUEST['uname']."' and password='".$_REQUEST['pwd']."'";
	
	$res=mysqli_query($conn,$q);
	if(mysqli_num_rows($res)==1)
		echo header("Location:basic.php?uname=".$_REQUEST['uname']);
	else
		echo "invalid user<br>";
}
?>

<?php
session_start();

if(isset($_REQUEST['login'])){
	$conn=mysqli_connect("localhost","root","") or die(mysqli_connect_error());
	$db=mysqli_select_db($conn,"saisri")or die(mysqli_connect_error());
	$q1="select userid from user where username='".$_REQUEST['uname']."' and password='".$_REQUEST['pwd']."'";
	
$res1=mysqli_query($conn,$q1);
while($row=mysqli_fetch_assoc($res1)){
		$_SESSION['uid']=$row['userid'];
	}
	
}
?>

</html>