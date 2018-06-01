<?php include('connection.php'); ?>
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
		<li>
		 
		
		</li>
		  <li ><a href="index.php">Home</a></li>
		  <li ><a href="about-us.php">About Us</a></li>
		  <li class="active"><a href="doner-list.php">Doner List</a></li>
		  <li><a href="contact-us.php">Contact Us</a></li>
		  <li><a href="register.php">Register</a></li>
		  <li><a href="login.php">Login</a></li>
		</ul>
	  </div>
	</nav>
	
	<div class="row" style="margin-left:5px;">	
	<div class="form-group" style="margin:0px 100px">
	
		<div class="row">
		<form action="doner-list.php" method="POST">
			<div class="col-md-4 col-xs-12">
			<?php
			$qqq="select distinct city from donerlist";
			$rr=mysqli_query($con,$qqq);
			?>
			<select class="form-control" id="blood" name="city">
			<option>Select city</option>
				<?php while($aa=mysqli_fetch_assoc($rr)){?> 
						<option value="<?php echo $aa['city'];?>"><?php echo $aa['city'];?></option>
				<?php }?>
					</select>
			</div>
			
			<div class="col-md-4 col-xs-12">
				
					<select class="form-control" id="blood" name="blood">
						<option>Select blood group</option>
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
			
			<div class="col-md-4 col-xs-12">
				 <input id="button1" name="findgroup" type="submit" value="Find Blood" class="btn btn-success btn-block"/>			
			</div>
			 </form>
		</div>
			  <br>	
			 
		 </div>
		
		
		<div class="col-md-9 col-sm-12 col-xs-12" style="background:lightgray;">
		
			
			<?php
			include('connection.php');
				if(isset($_POST['findgroup'])){
					$c=$_POST['city'];
					$b=$_POST['blood'];
							
					if(isset($_POST['blood']) && isset($_POST['city'])){
						$g=$_POST['blood'];
						$c=$_POST['city'];
						$q="select * from donerlist where city='$c' and bloodgroup='$g'";
					}
					/* else if(isset($_POST['city']) ){
						 echo $c=$_POST['city'];
						echo $b=$_POST['blood'];
						$q="select * from donerlist where city='$c' "; 
						echo "hi";
					}
					 */
					
					
					
				}else{
					$q="select * from donerlist";
				}
	
				$r=mysqli_query($con,$q);
				if($r){
					$n=mysqli_num_rows($r);
					if($n>0){
						while($arr=mysqli_fetch_assoc($r))
						{
							if($arr['email']!="admin@gmail.com"){
						?>
						<div class="col-md-6 col-sm-12 col-cs-12">
											
						<table class="table table-hover">
							<thead>
							  <tr>
								<th>Doner Detail</th>
							  </tr>
							</thead>
							<tbody>
							  <tr>
								<td>Name</td>
								<td><?php echo $arr['name'];?></td>
							  </tr>
							  <tr>
								<td>Email-Id</td>
								<td><?php echo $arr['email'];?></td>
							  </tr>
							  <tr>
								<td>Contact Number</td>
								<td><?php echo $arr['contact'];?></td>
							  </tr>
							  <tr>
								<td>Address</td>
								<td>
									<?php 
									echo $arr['address']." ".$arr['city']." ".$arr['state']." ".$arr['country'];
									?>
								</td>
							  </tr>
							  
							 <tr>
								<td>Blood Group</td>
								<td><?php echo $arr['bloodgroup'];?></td>
							  </tr>
							<tr>
								<td>Date of Donation</td>
								<td><?php echo $arr['donation_date'];?></td>
							  </tr>
							</tbody>
						  </table>
						</div><?php
							}
					}
					}
				}
				?>
				
				
				
			
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
	