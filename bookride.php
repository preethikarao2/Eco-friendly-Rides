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
<center>
<h2>
Book A Ride
</h2>
<h4>
Details need to be provided
</h4>
<form action="">
<table align="center">

<tr><th>Source:</th>
<td>
<?php


	$conn=mysqli_connect("localhost","root","") or die(mysqli_connect_error());
	$db=mysqli_select_db($conn,"saisri")or die(mysqli_connect_error());
	$q="select distinct cityname from city";
	$res=mysqli_query($conn,$q);
	
	
?>
<select name="sourceb">
<?php
while($row=mysqli_fetch_assoc($res)){
	$city=$row['cityname'];
	echo "<option value='$city'>$city</option>";
}
?>
</select>
<br><br></td></tr>
<tr>
<th>
Destination:</th>
<td>
<?php


	$conn=mysqli_connect("localhost","root","") or die(mysqli_connect_error());
	$db=mysqli_select_db($conn,"saisri")or die(mysqli_connect_error());
	$q1="select distinct cityname from city";
	$res1=mysqli_query($conn,$q1);
	
	
?>
<select name="destib">
<?php
while($row=mysqli_fetch_assoc($res1)){
	$city1=$row['cityname'];
	echo "<option value='$city1'>$city1</option>";
}
?>
<br><br></td></tr>
<tr><th>

Date:</th><td><input type="text" name="date" value=""><br><br></td></tr>
<tr><th>
PickUp Point:</th><td><input type="text" name="pick" value=""><br><br></td></tr>
<tr><th>
DropOff Point:</th><td><input type="text" name="drop" value=""><br><br></td></tr>

<tr><th>
IS there any Courier:</th><br>
<td>
<input type="checkbox" name="YES" value="YES">YES</td>
<td>
<input type="checkbox" name="NO" value="NO">NO<br></td>
</tr>
<tr>
<th>
If yes Enter Weight:</th><td><input type="text" name="name" value=""><br><br></td></tr>
</table>

<input type="submit" name="submit" class="button" value="submit"><br><br>
</center>

</form>



<?php

if(isset($_REQUEST['submit'])){
	$conn=mysqli_connect("localhost","root","") or die(mysqli_connect_error());
	$db=mysqli_select_db($conn,"saisri")or die(mysqli_connect_error());
	$d=0;
	$q2="select * from rides where source='".$_REQUEST['sourceb']."' and destination='".$_REQUEST['destib']."' and date='".$_REQUEST['date']."' and not vacancies=".$d ;
	$res2=mysqli_query($conn,$q2);
	
		if(mysqli_num_rows($res2)==0){
	echo "Noo rides available<br>";
}else{
	echo "rideid: vehicle_no: date: vacancies: phone_no: weight: announcements:<br>";
	while($row1=mysqli_fetch_assoc($res2)){
		echo $row1['ride_id']." ".$row1['vech_no']." ".$row1['date']." ".$row1['vacancies']." ".$row1['phn_no']." ".$row1['cour_wei']." ".$row1['announ']." <br><br>";
		
		
		
	}
}
	
	
}
?>

<?php

    if(isset($_REQUEST['submit'])){
	$conn=mysqli_connect("localhost","root","") or die(mysqli_connect_error());
	$db=mysqli_select_db($conn,"saisri")or die(mysqli_connect_error());
	$q3="select * from rides where source='".$_REQUEST['sourceb']."' and destination='".$_REQUEST['destib']."' and date='".$_REQUEST['date']."' and not vacancies=".$d ;
	$res3=mysqli_query($conn,$q3);
	}
	
?>
<form action="">
<select name="ridid">
<?php


while($row2=mysqli_fetch_assoc($res3)){
	$g=$row2['ride_id'];
	echo "<option value='$g'>$g</option><br><br>";
}


?>
</select>
<tr><th>
Phone number:</th><td><input type="phno" name="phno" value=""><br><br></th></tr>
<tr>
<th>
Passenger name:</th><td><input type="text" name="name" value=""><br><br></td></tr>
<input type="submit" name="book" value="BOOK"/><br>
</form>
<?php
if(isset($_REQUEST['book'])){
session_start();
	$conn=mysqli_connect("localhost","root","") or die(mysqli_connect_error());
	$db=mysqli_select_db($conn,"saisri")or die(mysqli_connect_error());
	$s=$_SESSION['uid'];
	if(isset($_REQUEST['YES'])){$g=1;}else{
		$g=0;}
	
	$q4="insert into customer values('".$s."','".$_REQUEST['name']."','".$_REQUEST['phno']."','".$g."','".$_REQUEST['ridid']."')";
	if(mysqli_query($conn,$q4)){
		echo "stored in customer";
	}
	echo header("Location:a.html");
}
	
?>






</html>