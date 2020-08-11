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
<h1>
Debit/Credit Card Payment
</h1>
<form action="">
<dt>Card Number</dt>
        <dd>
            <input type="text" id="cc_no" name="cc_no" required value="" />
            <span id="err_cc_no" class="jserror"> </span>
        </dd>            
        <dt>Expiry Date</dt>
        <dd>
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <td><select id="cc_exp_mm" name="cc_exp_mm">
                            <option value="">Month</option>
                            <option value="1" selected="selected">January</option>                                 
                            <option value="2">February</option>                              
                            <option value="3">March</option>                           
                            <option value="4">April</option>                           
                            <option value="5">May</option>                            
                            <option value="6">June</option>                            
                            <option value="7">July</option>                           
                            <option value="8">August</option>                             
                            <option value="9">September</option>                     
                            <option value="10">October</option>                              
                            <option value="11">November</option>                             
                            <option value="12">December</option>                             
                        </select></td>                         
                    <td width="20">&nbsp;</td>                         
                    <td><select id="cc_exp_yyyy" name="cc_exp_yyyy">
<option value="">Year</option>                     
                            
                            <option value="2021">2021</option>                            
                            <option value="2022">2022</option>                           
                            <option value="2023">2023</option>                             
                            <option value="2024">2024</option>                     
                            <option value="2025">2025</option>                              
                            <option value="2026">2026</option>                             
                            <option value="2027">2027</option>
                            <option value="2028">2028</option>                             
                            <option value="2029">2029</option>
                            <option value="2030">2030</option>
                        </select>                         
                    </td>                     
                </tr>                 
            </table>             
        </dd>
        <dt>CVV</dt>
        <dd>
            <input id="cvv" type="text" size="5" name="cvv" required value="" />
        </dd>
        </dl>     
</fieldset> 
<br>
<br>
<table>
<tr>


<input type="submit" name="sup" class="button" id="submitPayment" value="MakePayment"   /> <br><br> </tr>
</form>
<form action="track.html">
<tr>
<input type="submit" name="emer" class="button" id="submitPayment" value="Emergency"   /> <br> </tr>
</center> 
</form> 
<?php
if(isset($_REQUEST['emer'])){
echo "Call to Police";

}
?>   
<?php
if(isset($_REQUEST['sup'])){
echo "Booking is confirmed";

}
?>    
</html>