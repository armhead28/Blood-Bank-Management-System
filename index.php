<html>
	<head>
		<link rel='stylesheet' href='bootstrap/css/bootstrap.min.css'>	
		<script src='bootstrap/jquery/jquery.js'></script>
		<script src='bootstrap/js/bootstrap.min.js'></script>
		<style>
			body{
				background-color:red;
			}
			.carousel{
				background: #2f4357;
				margin-top: 20px;
			}
			.carousel .item img{
				margin: 0 auto; /* Align slide image horizontally center */
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
		  <li class="active"><a href="index.php">Home</a></li>
		  <li><a href="about-us.php">About Us</a></li>
		  <li><a href="doner-list.php">Doner List</a></li>
		  <li><a href="contact-us.php">Contact Us</a></li>
		  <li><a href="register.php">Register</a></li>
		  <li><a href="login.php">Login</a></li>
		</ul>
	  </div>
	</nav>
	
	 <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>   
        <!-- Wrapper for carousel items -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="slide1.jpg" alt="First Slide" height="300" width="100%">
            </div>
            <div class="item">
                <img  src="slide2.jpg" alt="Second Slide"height="300" width="100%">
            </div>
            <div class="item">
                <img src="slide3.jpg" alt="Third Slide"height="300" width="100%">
            </div>
        </div>
        <!-- Carousel controls -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
	
	<div class="row">
		<div class="col col-md-4 col-sm-12 col-xs-12">
		<br>
				<a target="_blank" href="img1.jpeg">
				  <img align="center"src="img1.jpeg" alt="Forest" width="250" height="250">
				</a>
				<div>Save Life Give Blood</div>
		</div>
		<div class="col col-md-4 col-sm-12 col-xs-12">
		<br>
			<a target="_blank" href="img2.jpg">
				  <img align="center"src="img2.jpg" alt="Forest" width="250" height="250">
				</a>
				<div>Giving a blood after every 3 months is good for body as well as for the other person.</div>
	
		</div>
		<div class="col col-md-4 col-sm-12 col-xs-12">
		<br>
			<a target="_blank" href="img3.jpg">
				  <img align="center"src="img3.jpg" alt="Forest" width="250" height="250">
				</a>
				<div>five minutes of your time + 350ml. of your blood =  One life saved.</div>
	
		</div>
	</div>
	
	<div class="row">
		<div class="container">
		<br><br>
			<center>
				<h2> Welcome to blood bank management system</h2>
				<p>A blood bank is a center where blood gathered as a result of blood donation, stored and preserved for later use in blood transfusion.<br>
				The term "blood bank" typically refers to a division of a hospital where the storage of blood product occurs and<br>
				where proper testing is performed (to reduce the risk of transfusion related adverse events).<br>
				However, it sometimes refers to a collection center, and indeed some hospitals also perform collection.			</p>
			</center>
		</div>
	</div>
	
	
	<div class="row">
		<div class="col-md-3 col-sm-3 col-xs-11" style="background:lightgray; margin:0px 40px"> ADITYA</div>
		<div class=""></div>
		
		<div class="col-md-3 col-sm-3 col-xs-11" style="background:lightgray; margin:0px 40px"> ANUJ</div>
		<div class="col-md-3 col-sm-3 col-xs-11" style="background:lightgray; margin:0px 40px">JATEEN</div>
	</div>
	
	
	
	
	</div>
	</body>
</html>