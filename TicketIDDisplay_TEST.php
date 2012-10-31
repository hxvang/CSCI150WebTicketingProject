<!DOCTYPE html>

<html>
<head>
<!--
  Purpose of this page: To display ticket information for client to see.
-->

<title>TicketIDDisplay.php</title>
<meta name="TicketIDDisplay" content="Show Ticket INFO" />

</head>

<body>


    <?php
      //Establish a connection to the database
      $con = mysql_connect("db431897459.db.1and1.com", "dbo431897459", "csci150");
      
      //check if there is a sussecful connection
      if(!$con)
      {
        die('Could not connect: ' . mysql_error());
      }
      
      //Select the database
      mysql_select_db("db431897459", $con);
      
      // assigining variable with value for the database
      
	$result = mysql_query("SELECT * FROM TICKETS where ID = '1'");
 
	while($row = mysql_fetch_array($result))
   	{
   	//echo $row['ID'];
	//echo "<br />";
	echo"THIS IS YOUR PROBLEM: ";
	echo $row['PROBLEM'];
	echo "<br />";
	echo "THIS IS YOUR PROBLEM SOLUTION: ";
	echo $row['PROBLEM_SOLUTION'];
	echo "<br />";
	echo "DATE SUBMITTED:";
	echo $row['DATE'];
	echo "<br />";
	echo "DATE ISSUED: ".$row['DATE_ISSUED']." DATE RESOVLED: ".$row['DATE_RESOVLED']; 
   	echo "<br />";
   	}

	//Terminate the database connection    
	mysql_close($con);
    ?>

</body>

</html> 