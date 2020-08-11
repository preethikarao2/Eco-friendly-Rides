
<style>
body{
background-image:url('4.jpg');
background-repeat:no-repeat;
background-size:100% 100%;
}
.button {
  background-color: #000; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}

.dropbtn {
  background-color: #000;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color:  #657383;}
ul {
  list-style-type: none;
  margin: 0;
  padding:0;
  overflow: hidden;
  background-color: #000;
}

li {
  float: left;
}
j{
float:right;
}

li a {
 
  color: Red;
  padding: 50px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #657383;
}
</style>
<ul>
  <li><button class="dropbtn"><a href="basic.php">Home</a></button></li>
 
  <li><button class="dropbtn"><a href="registerride.php">Register A Ride</a></button></li>
 <div class="dropdown">
  <li>
   <button class="dropbtn"><font color="red">My Rides</font></button>
  <div class="dropdown-content">
    <a href="Asarider.php">As a Rider</a>
    <a href="Asapassenger.php">As a Passenger</a>
  </div>
  </div></li>
  <li><button class="dropbtn"><a href="bookride.php">Book A Ride</a></button></li>
  <j><button class="dropbtn"><a href="index.html"><font color="red">Logout</font></a></button></j>
</ul>
<br><br>

<center>
<?php


	$conn=mysqli_connect("localhost","root","") or die(mysqli_connect_error());
	$db=mysqli_select_db($conn,"saisri")or die(mysqli_connect_error());
	$q="select * from user where username='".$_REQUEST['uname']."'";
	$res=mysqli_query($conn,$q);
	echo "Profile information of the user<br>";
	while($row=mysqli_fetch_assoc($res)){
		echo "username:".$row["username"]."<br>mailid:".$row["mailid"]."<br>phoneno:".$row["phnno"]."<br>";
	}
	
?>
<img src="3.jpg"><br><br>


<br>
<br>
<a href="bookride.php"><input type="button"  class="button" name="BookaRide" value="Book a Ride"></a><br><br>
<a href="registerride.php"><input type="button" class="button"  name="Register" value="Register a Ride"></a><br>
</center>
<html>
