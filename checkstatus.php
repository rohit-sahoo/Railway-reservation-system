<?php

if(isset($_POST['search']))
{
    // using concat mysql function
    $query = "SELECT * FROM `trains` WHERE CONCAT (`Tno`, `Tname`, `Tsource`, `TDestination`, `Tdate`, `Tseats`, `Tstatus`, `Tdays`)"  ;
    $search_result = filterTable($query);
	
	
    
}
 else {
    $query = "SELECT * from trains";
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
		TRAIN DETAILS</h1>
        <form action="php_html_table_data_filter.php" method="post">
		

		
            <table style = "background-color:gold" align="center">
                <tr>
                    <th>Train number</th>
					<th>Train Name</th>
                    <th>source</th>
                    <th>Destination</th>
					<th>Dates</th>
					<th>Seats</th>
					<th>Status</th>
					<th>days</th>
                    
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr align="center">
                    <td><?php echo $row['Tno'];?></td>
					<td><?php echo $row['Tname'];?></td>
                    <td><?php echo $row['Tsource'];?></td>
                    <td><?php echo $row['TDestination'];?></td>
					<td><?php echo $row['Tdate'];?></td>
					<td><?php echo $row['Tseats'];?></td>
					<td><?php echo $row['Tstatus'];?></td>
					<td><?php echo $row['Tdays'];?></td>
					

					
					

                </tr>
                <?php endwhile;?>
            </table>
			
        </form>
		</div>
		<a href="welcome.html"> HOME
				</a>
        
    </body>
</html>
