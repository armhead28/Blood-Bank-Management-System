<?php
if(isset($_POST['submit'])){
	$uname=$_POST['username'];
	$email=$_POST['email'];
	$pass=$_POST['pwd'];
	$name=$_POST['name'];
	$contact=$_POST['contact'];
	$address=$_POST['address'];
	$blood=$_POST['blood'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$country=$_POST['country'];
	$donation_date=$_POST['donation_date'];
	
	include_once('connection.php');
	
	
	
	$q="select * from donerlist where username='$uname'";
	$w=mysqli_query($con,$q);
	$nn=mysqli_num_rows($w);
	if($nn>0){
		echo "<script type='text/javascript'>alert('User Already Exist');</script>";
	}else{
		$query="insert into donerlist(username,email,password,name,contact,address,
				bloodgroup,donation_date,city,state,country) values('$uname','$email','$pass','$name'
				,'$contact','$address','$blood','$donation_date','$city','$state','$country')";
		$run=mysqli_query($con,$query) or die(mysqli_error($run));
		if($run){
			echo "<script type='text/javascript'>alert('Registered successfully');</script>";
		}else{
			echo "Some error";
		}
	}
	
	
}
?>
<html>
	<head>
		<link rel='stylesheet' href='bootstrap/css/bootstrap.min.css'>	
		<script src='bootstrap/jquery/jquery.js'></script>
		<script src='bootstrap/js/bootstrap.min.js'></script>
		<style>
			body{
				background-color:red;
			}
			#footer {
			  height: 60px;
			  width:100%;
			  background-color: #f5f5f5;
			  margin-top:50px;
			  padding-top:20px;
			  padding-bottom:20px;
			}
		</style>
	</head>
	
	<body>
	<div class="container" style="background:white;">
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
		<div class="navbar-header">
			<img src="logo.jpg" height="50" width="150"/>
			<!-- <a class="navbar-brand" href="#">Blood Bank</a> -->
		</div>
		<ul class="nav navbar-nav navbar-right">
		  <li ><a href="index.php">Home</a></li>
		  <li ><a href="about-us.php">About Us</a></li>
		  <li><a href="doner-list.php">Doner List</a></li>
		  <li><a href="contact-us.php">Contact Us</a></li>
		  <li class="active"><a href="register.php">Register</a></li>
		  <li><a href="login.php">Login</a></li>
		</ul>
	  </div>
	</nav>
	
	<div class="row">
		<div class="col-md-9 col-sm-12 col-xs-12">
			<h2>Create User Account</h2>
				<form action="register.php" method="POST">
					<div class="form-group">
					  <label for="username">User Name:</label>
					  <input type="text" class="form-control" name="username" placeholder="Enter email">
					</div>
					<div class="form-group">
				  <label for="email">Email:</label>
				  <input type="email" class="form-control" name="email" placeholder="Enter email">
				</div>
				
				<div class="form-group">
				  <label for="pwd">Password:</label>
				  <input type="password" class="form-control" name="pwd" placeholder="Enter password">
				</div>
				
				<div class="form-group">
				  <label for="name">Name:</label>
				  <input type="text" class="form-control" name="name" placeholder="Enter name">
				</div>
				
				<div class="form-group">
				  <label for="contact">Contact Number:</label>
				  <input type="text" class="form-control" name="contact" placeholder="Enter contact number">
				</div>

				<div class="form-group">
				  <label for="contact">Last Date of Donation:</label>
				  <input type="date" class="form-control" name="donation_date" placeholder="Enter Donation Date">
				</div>
				
				<div class="form-group">
				  <label for="address">Address:</label>
				  <input type="text" class="form-control" name="address" placeholder="Enter address">
				</div>
				
				
				<div class="form-group">
				  <label for="state">Blood group:</label>
				  <select class="form-control" name="blood">
					<option value="">Select blood group</option>
					<option value="A+">A+</option>
					<option value="A-">A-</option>
					<option value="B+">B+</option>
					<option value="B-">B-</option>
					<option value="O+">O+</option>
					<option value="O-">O-</option>
					<option value="AB+">AB+</option>
					<option value="AB-">AB-</option>
				 </select>
		
				</div>
				
				
				
				
				<div class="form-group">
				  <label for="city">Select city:</label>
				  <select class="form-control" name="city">
					<option value="">Select city</option>
					<option value="delhi">Delhi</option>
					<option value="ghaziabad">Ghaziabad</option>
					<option value="noida">Noida</option>
					<option value="faridabad">Faridabad</option>
					<option value="gwalior">Gwalior</option>
					<option value="allahabad">Allahabad</option>
					<option value="indore">Indore</option>
					<option value="ahemdabad">Ahemdabad</option>
				 </select>
				</div>
				
				<div class="form-group">
				  <label for="state">Select state:</label>
				  <select class="form-control" name="state">
					<option value="">Select state</option>
					<option value="delhi">Delhi</option>
					<option value="utter pradesh">UP</option>
					<option value="bihar">Bihar</option>
					<option value="punjab">Punjab</option>
				 </select>
				</div>
				
				<div class="form-group">
				  <label for="country">Select country:</label>
				  <select class="form-control" name="country">
					<option value="">Select country</option>
					<option value="india">India</option>
					</select>
				</div>
				
				<div class="checkbox">
				  <label><input type="checkbox"> Remember me</label>
				</div>
				<input  type="submit" class="btn btn-default" value="register" name="submit">
			  
					
				</form>
		
		</div>
		
		<div class="col-md-3 col-sm-12 col-xs-12">
			
				<img src="side3.jpg" height="200px" width="200px">
			
			
				<img src="side2.jpg" height="200px" width="200px">
			
			
				<img src="side1.jpg" height="200px" width="200px">
			
		</div>
	
	</div>
	
	</div>
</body>
</html>
	