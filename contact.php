<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Create Account</title>

<style>
body{
background-image:linear-gradient(rgba(0,0,0,0.5), rgba(255,0,0,0.5)),url(image4.jpg);;
	height: 100vh;
	background-position:center;
	background-size: 1510px;
}
.login-box{
    width: 500px;
    height: 580px;
    background: rgba(0, 0, 0, 0.5);
    color: #fff;
    top: 50%;
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
        <h1>Contact Us!</h1>
            <form method="post">
            <p>First Name</p>
            <input type="text" name="C_FName" placeholder="Enter First Name" value=" <?php echo isset($C_FName); ?>" required>
            <p>Last Name</p>
            <input type="text" name="C_LName" placeholder="Enter Last Name" value=" <?php echo isset($C_LName); ?>">
			<p>Email<p>
            <input type="text" name="C_Email" placeholder="Enter Email Address" value=" <?php echo isset($C_Email); ?>">
			<p>Contact<p>
            <input type="text" name="C_Contact" placeholder="Enter Contact" value=" <?php echo isset($C_Contact); ?>">
			<p>Details About Your Enquiry</p>
            <input type="text" name="C_Enquiry" placeholder="Go Ahead, We're listening..." value=" <?php echo isset($C_Enquiry); ?>">
            <input type="submit" name="submit1" value="Send!">
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
			$C_FName=$_POST['C_FName'];
			$C_LName=$_POST['C_LName'];
			$C_Email=$_POST['C_Email'];
			$C_Contact=$_POST['C_Contact'];
			$C_Enquiry=$_POST['C_Enquiry'];
			
		
				$q1="insert into Enquiry(C_FName, C_LName, C_Email, C_Contact, C_Enquiry) values('$C_FName','$C_LName','$C_Email','$C_Contact','$C_Enquiry')"	;
			    $result=mysqli_query($db,$q1);
				header("location: contactreply.html");

		}
		
?>
</div>
</body>
</html>