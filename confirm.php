<?php

if(isset($_POST['search']))
{
    // using concat mysql function
    $query = "SELECT * FROM `passengers` WHERE CONCAT (`id`, `Adhr_no`, `P_FName`, `P_LName`, `P_Age`, `P_Gender`, `P_Address`, `P_Contact`, `Tno`)  LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
	
	
    
}
 else {
    $query = "SELECT * from passengers where id = (select MAX(id) FROM passengers)";
    $search_result = filterTable($query);
	

}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "registration");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <style>

            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
			
    </head>
    <body>
	<img src="abc.png">
	<div class = "bg">
		<h1 align="center">
		Ticket Booked!</h1>
        <h1 align="center">
		Your Ticket Details:</h1>
        <form action="php_html_table_data_filter.php" method="post">
		

		
            <table style = "background-color:gold" align="center">
                <tr>
                    <th>First Name</th>
					<th>Last Name</th>
                    <th>Age</th>
                    <th>Gender</th>
					<th>Address</th>
					<th>Contact</th>
                    
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr align="center">
                    <td><?php echo $row['P_FName'];?></td>
					<td><?php echo $row['P_LName'];?></td>
                    <td><?php echo $row['P_Age'];?></td>
                    <td><?php echo $row['P_Gender'];?></td>
					<td><?php echo $row['P_Address'];?></td>
					<td><?php echo $row['P_Contact'];?></td>

					
					

                </tr>
                <?php endwhile;?>
            </table>
			
        </form>
		</div>
        
    </body>
</html>
<?php

if(isset($_POST['search']))
{
    // using concat mysql function
    $query1 = "SELECT * FROM `reservation` WHERE CONCAT (`Tid`, `Tno`, `Tname`, `Tsource`, `TDestination`, `Tdate`, `Tclass`, `Tquota`) LIKE '%".$valueToSearch."%'";
    $search_result1 = filterTable1($query1);
	
	
    
}
 else {
    $query1 = "SELECT * from reservation where Tid = (select MAX(Tid) FROM reservation)";
    $search_result1 = filterTable1($query1);
	

}

// function to connect and execute the query
function filterTable1($query1)
{
    $connect = mysqli_connect("localhost", "root", "", "registration");
    $filter_Result1 = mysqli_query($connect, $query1);
    return $filter_Result1;
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <style>
		<style>

        </style>
    </head>
    <body>
	<div class = "bg">
        
        <form action="php_html_table_data_filter.php" method="post">
		<BR></BR>
		<BR></BR>


			<table style = "background-color:gold" align="center">
                <tr>
                    <th>Train number</th>
					<th>Train Name</th>
                    <th>source</th>
                    <th>Destination</th>
					<th>Date</th>
					<th>Class</th>
					<th>Quota</th>
                    
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row1 = mysqli_fetch_array($search_result1)):?>
                <tr align="center">
                    <td><?php echo $row1['Tno'];?></td>
					<td><?php echo $row1['Tname'];?></td>
                    <td><?php echo $row1['Tsource'];?></td>
                    <td><?php echo $row1['TDestination'];?></td>
					<td><?php echo $row1['Tdate'];?></td>
					<td><?php echo $row1['Tclass'];?></td>
					<td><?php echo $row1['Tquota'];?></td>
					
				
					

					
					

                </tr>
                <?php endwhile;?>
            </table>

        </form>
		</div>
		<p>Dear Passenger,
		<br>
		Thank you for booking Ticket with us! we wish you have a happy and safe journey!
		<br><br>
		Thanks & Regards,
		<br>
		FOXTRIP.COM
		</p>
		<a href="afterbook.html"> NEXT!
				</a>
	</body>