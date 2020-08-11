<html>
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
<body>
<center>
<h2>
No.of rides as a ride provider
</h2>
</center>
<?php
session_start();
    $re=$_SESSION['uid'];
	$conn=mysqli_connect("localhost","root","") or die(mysqli_connect_error());
	$db=mysqli_select_db($conn,"saisri")or die(mysqli_connect_error());
	$q3="select * from rides where userid=".$re;
	$res3=mysqli_query($conn,$q3);
	
	
?>
<center>
<form action="">
The ride id's:
<select name="ridid">
<?php

while($row2=mysqli_fetch_assoc($res3)){
	$g=$row2['ride_id'];
	echo "<option value='$g'>$g</option>";
}

?>
</select>
<br>
<input type="submit" class="button" name="sub" value="SUBMIT"/>
</center>
<?php
if(isset($_REQUEST['sub'])){
$conn=mysqli_connect("localhost","root","") or die(mysqli_connect_error());
	$db=mysqli_select_db($conn,"saisri")or die(mysqli_connect_error());
	$q4="select * from customer where ride_id=".$_REQUEST['ridid'];
	$res4=mysqli_query($conn,$q4);
	echo "<center><table><tr>passenger Id:    passenger name:   passenger phnno:   </tr></table></center>";

	while($row4=mysqli_fetch_assoc($res4)){
	echo "<center>".$row4['passen_id']."&nbsp ".$row4['passen_name']."&nbsp ".$row4['passen_pno']."</center>";
}
}
?>
</form>
</body>
</html>