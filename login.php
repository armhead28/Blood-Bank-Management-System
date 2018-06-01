<?php

if(isset($_POST['submit'])){
	$e=$_POST['email'];
	$p=$_POST['pwd'];
	include('connection.php');
	$q="select * from donerlist where username='$e' and password='$p'";
	$run=mysqli_query($con,$q) or die(mysqli_error($run));
	
	if($run){
		$num=mysqli_num_rows($run);
		if($num>0){
			$arr=mysqli_fetch_assoc($run);
			//var_dump($arr);
			session_start();
			$_SESSION['id']=$arr['id'];
			$_SESSION['email']=$arr['email'];
				if($e=="admin"){
					header('location:admin/adminprofile.php');
				}else{
					header('location:profile.php');
				}
		}else{
			echo"<script type='text/javascript'>alert('Username or password wrong')</script>";
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
		  <li><a href="register.php">Register</a></li>
		  <li class="active"><a href="login.php">Login</a></li>
		</ul>
	  </div>
	</nav>
	
	<div class="row">
		<div class="col-md-9 col-sm-12 col-xs-12">
		
		<div class="col-md-12 col-sm-12 col-xs-12">
			<h2>Login</h2>
				<form action="login.php" method="POST">
					
				<div class="form-group">
				  <label for="email">User Name:</label>
				  <input type="text" class="form-control" name="email" placeholder="Enter email">
				</div>
				
				<div class="form-group">
				  <label for="pwd">Password:</label>
				  <input type="password" class="form-control" name="pwd" placeholder="Enter password">
				</div>
				<input  type="submit" class="btn btn-default" value="Login" name="submit">
			  </form>
		
		</div>
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
	