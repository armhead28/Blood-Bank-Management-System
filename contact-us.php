<?php
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$msg=$_POST['message'];
	
	include_once('connection.php');
	
		$query="insert into contact(name,email,contact,message) values('$name','$email','$contact','$msg')";
		$run=mysqli_query($con,$query) or die(mysqli_error($run));
		if($run){
			echo "<script type='text/javascript'>alert('your message sent');</script>";
		}else{
			echo "Some error";
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
		  <li class="active"><a href="contact-us.php">Contact Us</a></li>
		  <li><a href="register.php">Register</a></li>
		  <li><a href="login.php">Login</a></li>
		</ul>
	  </div>
	</nav>
	
	<div class="row">
		<div class="col-md-9 col-sm-12 col-xs-12">
		<form action="contact-us.php" method="POST">
			<h1> Contact Us : </h1>
<br>			<div style="margin:0px 100px;">
				<div class="form-group">
					<label>Name : </label>
					<input type="text" name="name" class="form-control">
				</div>
				<div class="form-group">
					<label>Email : </label>
					<input type="text" name="email" class="form-control">
				</div>
				<div class="form-group">
					<label>Contact Number : </label>
					<input type="text" name="contact" class="form-control">
				</div>
				
				<div class="form-group">
					<label>Message : </label>
					<textarea rows="4"name="message" class="form-control"></textarea>
				</div>
				<input type="submit" name="submit" value="Send Message" class="btn btn-success btn-block">
			</div>
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
	