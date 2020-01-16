

<?php

	$tbname = $_POST['tbname'] ;
	$hosp_id = $_POST['hname'];
	$ratings = $_POST['rating1'];

	$servername = "localhost";
	$username = "id11175476_rob";
	$password = "carecancerbyrob";
	$dbname = "id11175476_carecancer";

// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}


	$sql = "UPDATE $tbname SET ratings=ratings +$ratings WHERE id=$hosp_id";
	
	if ($conn->query($sql) === TRUE) {
	  echo 'Successful';
	} 
	else {
	    echo "Error updating record: " . $conn->error;
	}
	
	$conn->close();
	



	         // header("Location: http://localhost/project_php/lung_cancer.php");
?>

