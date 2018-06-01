<?php
session_start();
if(!isset($_SESSION['id'])){
	header('location:index.php');
}else{
$id=$_SESSION['id'];
$email=$_SESSION['email'];
include('connection.php');

$q="select * from donerlist where id='$id'";
		$r=mysqli_query($con,$q);
		if($r){
			$n=mysqli_num_rows($r);
			if($n>0){
				$a=mysqli_fetch_assoc($r);
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
		 <p class="navbar-text"><b>Welcome:- <?php echo $a['email'];?></b></p>
		<ul class="nav navbar-nav navbar-right">
		  <li ><a href="index.php">Home</a></li>
		  <li ><a href="about-us.php">About Us</a></li>
		  <li><a href="doner-list.php">Doner List</a></li>
		  <li><a href="contact-us.php">Contact Us</a></li>
		  <li><a href="logout.php">Logout</a></li>
		</ul>
	  </div>
	</nav>
	
	 <img src="image/<?php echo $a['image'];?>" class="img-circle" alt="Cinque Terre" width="150" height="140"> 
	<div class="row">
		<div class="col-md-9 col-sm-12 col-xs-12">
			<table class="table">
				<thead>
				  <tr>
					<th>User Name</th>
					<th>Name</th>
					<th>Blood Group</th>
					<th>Email</th>
					<th>Contact</th>
					<th>Address</th>
				  </tr>
				</thead>
				<tbody>
				  <tr>
					<td><?php echo $a['username'];?></td>
					<td><?php echo $a['name'];?></td>
					<td><?php echo $a['bloodgroup'];?></td>
					<td><?php echo $a['email'];?></td>
					<td><?php echo $a['contact'];?></td>
					<td><?php echo $a['address'];?></td>
				  </tr>      
				</tbody>
			  </table>			
			
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

<?php
}
?>