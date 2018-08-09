<?php 
	$name = $_POST['user_name'];
	$email = $_POST['email1'];
	$phone = $_POST['phone'];
	$car_type = $_POST['car_type'];
	$service = $_POST['service'];
	$address = $_POST['address'];
	$extra = $_POST['extra'];


	$link = mysqli_connect("127.0.0.1", "root", "", "auto_wash");
	if($link === false)
	{
    	die("ERROR: Could not connect. " . mysqli_connect_error());
	}

	 $sql = "INSERT INTO `request` (`name`, `email`, `phone`, `car_type`, `service`, `address` , `extra`, `id`) VALUES ('$name', '$email', '$phone', '$car_type', '$service', '$address' , '$extra', NULL); " ;

	if(mysqli_query($link, $sql)){
    	echo "Records inserted successfully.";
	} else{
    	echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}

	mysqli_close($link);

 ?>