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
List of rides taken by passenger
</h2>
</center>
<?php
 session_start();
 $p=$_SESSION['uid'];
$conn=mysqli_connect("localhost","root","") or die(mysqli_connect_error());
	$db=mysqli_select_db($conn,"saisri")or die(mysqli_connect_error());
	$q4="select ride_id from customer where passen_id=".$p;
	$res4=mysqli_query($conn,$q4);
	

	$row4=mysqli_fetch_assoc($res4);
	$r=$row4['ride_id'];
	


?>
<?php
$conn=mysqli_connect("localhost","root","") or die(mysqli_connect_error());
	$db=mysqli_select_db($conn,"saisri")or die(mysqli_connect_error());
	$q5="select * from rides where ride_id=".$r;
	$res5=mysqli_query($conn,$q5);
	echo "<center><table border='1'>";
	echo "<center><tr><th>rider id:</th>   <th>date:</th><th>   vehicle no.: </th><th>  ridername:</th><th>   source: </th><th>  destination:</th></tr>  </center> ";
while($row5=mysqli_fetch_assoc($res5)){
	echo "<center><tr><td>",$row5['ride_id'],"</td><td> ",$row5['date']," </td><td>",$row5['vech_no'],"</td><td> ",$row5['rider_name'],"</td><td>",$row5['source']," </td><td>",$row5['destination'],"</td></tr></center>";
}
echo "</table></center>";
	
?>
</form>
</body>
</html>