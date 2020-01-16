<?php

	$msg = "";
	//if submit button is pressed
	if (isset($_POST['upload'])) {
		// this path store the uploaded image
		$target = "images/".basename($_FILES['image']['name']);

		//connect to the db
		$db = mysqli_connect("localhost","root","","einsatz");

		//get submitted data from the form
		$image = $_FILES['image']['name'];
		$name = $_POST['name'];
		$location = $_POST['location'];
		$ratings = $_POST['ratings'];

		//
		$sql = "INSERT INTO lung_cancer (name, location, image, ratings) VALUES ('$image', '$location', '$image', '$ratings')";
		mysqli_query($db, $sql); //store the data into the database

		//upload image into the folder images
		if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
			$msg = "image upload successfully";
		}else{
			$msg = "There was a problem uploading a image";
		}



	}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Image Upload</title>
	<style type="text/css">
   #content{
   	width: 50%;
   	margin: 20px auto;
   	border: 1px solid #cbcbcb;
   }
   form{
   	width: 50%;
   	margin: 20px auto;
   }
   form div{
   	margin-top: 5px;
   }
   #img_div{
   	width: 80%;
   	padding: 5px;
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   img{
   	float: left;
   	margin: 5px;
   	width: 300px;
   	height: 140px;
   }
</style>
</head>
<body>
	<div id="content">
	<?php
				//connect to the db
		$db = mysqli_connect("localhost","root","","einsatz");
		$sql = "SELECT * from lung_cancer";
		$result = mysqli_query($db, $sql);
		while ($row = mysqli_fetch_array($result)) {
			echo "<div id='img_div'>";
			echo "<img src='images/".$row['image']."' >";
			echo "<p>".$row['name']."</p>";
			echo "<p>".$row['location']."</p>";
			echo "<p>".$row['ratings']."</p>";

		}
	?>
		<form action="img_upload.php" method="POST" enctype="multipart/form-data">
			<input type="hideen" name="size" value="1000000">
			<div>
				<input type="file" name="image">
			</div>
			<div>
				Name : <input type="text" name="name">
			</div>
			<div>
				Location : <input type="text" name="location">
			</div>
			<div>
				Ratings : <input type="number" name="ratings">
			</div>
			<div>
				<input type="submit" name="upload" value="Upload Image">
			</div>
		</form>
	</div>

</body>
</html>