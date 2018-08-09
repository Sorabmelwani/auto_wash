<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<!-- logo bar -->
	<div class="container-fluid">
		<div class="row padding">
			<div class="col-6">
				<img src="logo.png">
			</div>


			<div class="col part">
				<img align="center" src="call.svg">
	           	<span>Mobile No</span>
	           	<br>
	           	<span> <b> 0300-1234567 </b></label>
			</div>

			<div class="col part">
				<img align="center" src="oldphone.png">
	           	<span>Landline No</span>
	           	<br>
	           	<span> <b>021-123456</b></span>

			</div>		
				
			
			<div class="col part">
				<img align="center" src="clock.svg">
	           	<span>Opening Time</span>
	           	<br>
	           	<span> <b>  9:00am - 6:00pm </b></span>
			</div>		
		</div>	
	</div>

		<!-- nav bar -->
		
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  		
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="	Toggle navigation">
   			 <span class="navbar-toggler-icon"></span>
 	 	</button>
  		<div class="collapse navbar-collapse" id="navbarNav">
    		<ul class="navbar-nav">
      			<li class="nav-item padding1">
       				 <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
      			</li>
			    <li class="nav-item padding1">
			        <a class="nav-link" href="#">About Us</a>
			    </li>
			    <li class="nav-item padding1">
			        <a class="nav-link" href="form.html">Register</a>
			    </li>
			    <li class="nav-item active padding1">
			        <a class="nav-link" href="index2.php">Admin</a>
			    </li>
			    
   			 </ul>
  		</div>
	</nav>

</body>
</html>






<?php
include_once("conn.php");
$sql = "SELECT name,email,phone,car_type,service,extra,id FROM request";
$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
while($row = $resultset->fetch_assoc()) {
?>
	<center>
	<div class="card" style="width: 32rem;">
	  <div class="card-body">
	    <h5 class="card-title">Id: <?php echo $row['id']; ?></h5>
	    <h6 class="card-title">Name: <?php echo $row['name']; ?></h6>
	    <h6 class="card-text">Email: <?php echo $row['email']; ?></h6>
	    <h6 class="card-text">Phone: <?php echo $row['phone']; ?></h6>
	    <h6 class="card-text">Car Type: <?php echo $row['car_type']; ?></h6>
	    <h6 class="card-text">Service: <?php echo $row['service']; ?></h6>
	    <p class="card-text">Extra: <?php echo $row['extra']; ?></p>
	    Reply:
	    <form action="mail.php" method="POST" >
	    <textarea style="margin-bottom: 8px;" class="form-control" id="extra" rows="3" name="extra" > </textarea>
	    <input class="btn btn-primary" type="submit" name="Send">
	    </form>
	  </div>
	</div>
	</center>
	


<?php } ?>