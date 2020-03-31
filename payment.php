<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Payment</title>

<style>
body{
background-image:linear-gradient(rgba(0,0,0,0.5), rgba(0,255,0,0.5)),url(image4.jpg);
	height: 150vh;
	background-size:cover;
	background-position:center;
	background-size: 1800px;
}
.login-box{
    width: 600px;
    height: 850px;
    background: rgba(0, 0, 0, 0.5);
    color: #fff;
    top: 70%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
}
.avatar{
    width: 100px;
    height: 100px;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
}
h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
}
.login-box p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}
.login-box input{
    width: 100%;
    margin-bottom: 20px;
}
.login-box input[type="text"], input[type="password"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}
.login-box input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: #1c8adb;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}
.login-box input[type="submit"]:hover
{
    cursor: pointer;
    background: #39dc79;
    color: #000;
}

.login-box a{
    text-decoration: none;
    font-size: 14px;
    color: #fff;
}
.login-box a:hover
{
    color: #39dc79;
}
</style>
</head>
    <body>
    <div class="login-box">
    <img src="image3.png" class="avatar">
        <h1><u>PAYMENT</u><br></br>
		Please Checkout the Rate card</h1>
		<table align = "center" border = white>
  <tr>
    <th>CLASS</th>
    <th>AMOUNT</th> 
  </tr>
  <tr>
    <td>1st AC</td>
    <td>3000</td> 
  </tr>
   <tr>
    <td>2nd AC</td>
    <td>2000</td> 
  </tr>
   <tr>
    <td>3rd AC</td>
    <td>1500</td> 
  </tr>
   <tr>
    <td>sleeper</td>
    <td>500</td> 
  </tr>
</table>
			<form method="post" action="">
			<p>
			SELECT CLASS
			</p>
			<select name="Amount">
			<option value="">Select Any One</option>
			<option value=" 3000">Fist AC</option>
			<option value=" 2000">Second AC</option>
			<option value=" 1500">Sleeper Class</option>
			<option value=" 500">Third AC</option>
			</select>
			<br><br>

          
			<p>Choose Payment Option</p>
			<select name = "PAYMENT">
			<option value="">Select Any One</option>
			<option value="Credit Card">Credit Card</option>
			<option value="Debit Card">Debit Card</option>
			</select>
			<br><br>
			
			
			<img src = "visa.jpg" height="50" width="80">
			<img src = "ms.jpg" height="70" width="80">
			<p>Enter Name:(Name on Card)</p>
            <input type="text" name="Card_name" placeholder="Enter Name">
            <p>Enter Card Number</p>
            <input type="text" name="Card_no" placeholder="Enter Card Number">
			<p>Enter CVV</p>
            <input type="password" name="cvv" placeholder="Enter CVV">
			<p>Expiry Date</p>
			<input name="E_date" type="month" min="2018-01" max="2025-12"/>
			<br><br>
            <input type="submit" name="submit1" value="Pay Now">
			</form>
        
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

// Create connection
$db = new mysqli($servername, $username, $password, $dbname);
// Check connection
		if(isset($_REQUEST['submit1']))
		{
			$Amount = $_POST['Amount'];
			$PAYMENT = $_POST['PAYMENT'];
			$Card_name=$_POST['Card_name'];
			$Card_no=$_POST['Card_no'];
			$cvv=$_POST['cvv'];
			$rawdate = htmlentities($_POST['E_date']);
			$E_date = date('Y-m-d', strtotime($rawdate));
			
		
				$q1="insert into payments (`Amount`, `PAYMENT`, `Card_name`, `Card_no`, `CVV`, `E_date`) values('$Amount','$PAYMENT','$Card_name','$Card_no','$cvv','$E_date')"	;
			    $result=mysqli_query($db,$q1);
				header("location: confirm.php");
				
		}
		
?>
</div>
</body>
</html>