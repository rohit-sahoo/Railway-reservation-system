<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Create Account</title>

<style>
body{
background-image:linear-gradient(rgba(0,0,0,0.5), rgba(0,255,0,0.5)),url(image4.jpg);
	height: 115vh;
	background-size:cover;
	background-position:center;
	background-size: 1560px;
}
.login-box{
    width: 500px;
    height: 730px;
    background: rgba(0, 0, 0, 0.5);
    color: #fff;
    top: 60%;
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
        <h1>Enter Passengers Detail</h1>
            <form method="post" action="">
            <p>First Name</p>
            <input type="text" name="P_FName" placeholder="Enter First Name" value=" <?php echo isset($P_FName); ?>">
            <p>Last Name</p>
            <input type="text" name="P_LName" placeholder="Enter Last Name" value=" <?php echo isset($P_LName); ?>">
			<p>Email Id</p>
            <input type="text" name="email" placeholder="Enter Aadhar no" value=" <?php echo isset($email); ?>">
			<p>Age</p>
            <input type="text" name="P_Age" placeholder="Enter Age" value=" <?php echo isset($P_Age); ?>">
			<p>
			Gender:
			<select name="P_Gender">
			<option value="">Select Any One</option>
			<option value="MALE">MALE</option>
			<option value="FEMALE">FEMALE</option>
			</select>
			<br><br>
			</p>
			<p>Address<p>
            <input type="text" name="P_Address" placeholder="Enter Address " value=" <?php echo isset($P_Address); ?>">
			<p>Contact</p>
            <input type="text" name="P_Contact" placeholder="Enter contact" value=" <?php echo isset($P_Contact); ?>">
            <input type="submit" name="submit1" value="Book Ticket">
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
			$P_FName=$_POST['P_FName'];
			$P_LName=$_POST['P_LName'];
			$email = $_POST['email'];
			$P_Age	=$_POST['P_Age'];
			$P_Gender	=$_POST['P_Gender'];
			$P_Address=$_POST['P_Address'];
			$P_Contact	=$_POST['P_Contact'];
			
		
				$q1="insert into passengers(P_FName, P_LName, email, P_Age	, P_Gender	, P_Address, P_Contact ) values('$P_FName','$P_LName','$email','$P_Age','$P_Gender','$P_Address','$P_Contact')"	;
			    $result=mysqli_query($db,$q1);
				header("location: payment.php");
		}
		
?>
</div>
</body>
</html>