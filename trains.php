<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Reservation</title>

<style>
body{
background-image:linear-gradient(rgba(0,0,0,0.5), rgba(0,255,0,0.5)),url(image4.jpg);
	height: 110vh;
	background-size:cover;
	background-position:center;
	background-size: 1560px;
}
.login-box{
    width: 500px;
    height: 690px;
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
        <h1>Enter Train Details</h1>
            <form method="post" action="">
            <p>Train Number</p>
            <input type="text" name="Tno" placeholder="Enter Train Number">
            <p>Train Name</p>
            <input type="text" name="Tname" placeholder="Enter Train Name">
			<p>Source</p>
            <input type="text" name="Tsource" placeholder="Enter Source">
			<p>Destination</p>
            <input type="text" name="TDestination" placeholder="Enter Destination">
			<p>Date<p>
			<input name="Tdate" type="date" min="2013-01" max="2013-09"/>
			<p>
			Class
			</p>
			<select name="Tclass">
			<option value="">Select Any One</option>
			<option value="Fist AC">Fist AC</option>
			<option value="Second AC">Second AC</option>
			<option value="Sleeper Class">Sleeper Class</option>
			<option value="Third AC">Third AC</option>
			</select>
			<br><br>
			<p>Quota</p>
           <select name="Tquota">
			<option value="">Select Any One</option>
			<option value="General Quota">General Quota</option>
			<option value="Tatkal Quota">Tatkal Quota</option>
			<option value="Ladies Quota">Ladies Quota</option>
			<option value="Defence Quota">Defence Quota</option>
			<option value="Handicapped Quota">Handicapped Quota</option>
			<option value="Youth Quota">Youth Quota</option>
			</select>
			<br><br>
            <input type="submit" name="submit1" value="Next">
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
			$Tno=$_POST['Tno'];
			$Tname=$_POST['Tname'];
			$Tsource=$_POST['Tsource'];
			$TDestination=$_POST['TDestination'];
			$rawdate = htmlentities($_POST['Tdate']);
			$Tdate = date('Y-m-d', strtotime($rawdate));
			$Tclass=$_POST['Tclass'];
			$Tquota=$_POST['Tquota'];
			
		
				$q1="insert into reservation(Tno, Tname, Tsource, TDestination, Tdate, Tclass, Tquota ) values('$Tno','$Tname','$Tsource','$TDestination','$Tdate','$Tclass','$Tquota')"	;
			    $result=mysqli_query($db,$q1);
				header("location: passenger.php");
		}
		
?>
</div>
</body>
</html>
