			<?php 
			include("admin/config/db.php");
			 ?>



			<!DOCTYPE html>
			<html>
			<head>
				<title>Welcome to India-News</title>
				<link rel="stylesheet" type="text/css" href="assets/bootstrap.min.css">	
				<link rel="stylesheet" type="text/css" href="assets/font/css/font-awesome.min.css">
				<link rel="stylesheet" type="text/css" href="assets/style.css">	
				 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
				   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 				 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


			</head>
			<body >
			<div class="container-fluid" style="background:white">
				<nav class="navbar navbar-default">
			      	<div class="container-fluid">
			        	<div class="navbar-header">

			         		<a class="navbar-brand" href="index.php">IndiaNews</a>
			       	 	</div>
			     		<ul class="nav navbar-nav">
			      		<li class="active"><a href="index.php">Home</a></li>
			      		<li><a href="about.php">About-Us</a></li>
			      		<li><a href="contact.php">Contact-Us</a></li>
			    		 </ul>
			      	</div>
			   </nav>
				<div class="row">
							<div class="col-md-4">
				 				<div class="animated zoomInLeft"><img src="admin/image/logo.png"></div>
							</div>
					<div class="col-md-6">
						<img src="admin/image/a.jpg" style="width: 600px; margin-left: 150px;"><br>
					</div>
						<div class="col-md-2">
							<center>
							<a href="https://www.instagram.com/"><medium style="color:red" class="fa fa-lg fa-instagram pull-right">  </medium></a>
            				<a href="#"><medium style="color:darkred" class="fa fa-lg fa-google-plus pull-right">  </medium></a>
		            		<a href="#"><medium style="color:powderblue" class="fa fa-lg fa-linkedin pull-right">  </medium></a>
		            		<a href="#"><medium style="color:blue" class="fa fa-lg fa-twitter pull-right">  </medium></a>
		            		<a href="https://www.facebook.com/"><medium style="color:darkblue" class="fa fa-lg fa-facebook pull-right">  </medium></a>
		           			</center>
						</div>
					</div>
				<br>
				<div class="container-fluid">
					<nav class="navbar navbar-default">
			  			<div class="container-fluid">
			    			<div class="navbar-header">
			      				<a class="navbar-brand" href="#"><i class="fa fa-home"></i></a>
			        
			    			</div>
			    			<ul class="nav navbar-nav menu">
			      			<li class="active"><a href="index.php">Latest News</a></li>
			      			<li><a href="all.php">All News</a></li>
			      			<li><a href="search.php">Search a News</a></li>
			    			</ul>
			  			</div>
					</nav>
				<div class="row">
				<div class="col-md-8">
					<img src="admin/image/story.jpeg"     class="img img-thumbnail" style="height: 350px; width: 100%; padding: 10px">
						<div class="side">
						 <div class="post_menu">
							<span>Latest News</span>
						 </div>	
					    </div>
					  <div class="Post">
					 	<?php

					 	$select="select * from news  Order by id Desc limit 0,3";
					 	$select_run=mysqli_query($con,$select);
					 	$count=mysqli_num_rows($select_run);
					 	if ($count>0)
					 	 {
					 	while ($row=mysqli_fetch_array($select_run)) {

					 		$id=$row['id'];
					 		$name=$row['Name'];
					 		$text=$row['Text'];
					 		$img=$row['Image'];
					 		$cat=$row['Cat'];
					 		$date=$row['Date'];



					 	
					 
					 	  ?>
						<div class="row">
							<div class="col-md-4">
								<img src="admin/image/<?php echo $img ?> " class="img img-thumbnail" width="250px" height="200px">
							</div>
							<div class="col-md-8">
								<h4 style="font-weight: bold; color:black;"><?php echo $name ?></h4>
								<h6 style="float: right;"><?php echo $date?></h6><br><br><br>
								<p style="font-size:15px; color: black;  text-align: justify;"><?php echo $text ?></p>
							</div>
							<a href="viewnews.php ?id=<?php echo $id ?>"><button class="btn btn-purple" style="float: right;">Read More </button></a>
						</div>
						<?php    }}
						else
						{
						echo "<h3><center>Sorry No Post Available</center></h3>"; 
						
						}
						?>
						  
					</div>
				</div>
				<?php
					include("include/side.php");
		  			?>

					<div class="footer">
				
				 			<div >
	           			<center> <medium style="color:white" class="copyright">Copyright &copy 2018 IndiaNews Private Limited.All Rights Reserved.</medium> </center>
	            		
	           		</div>
			</div>
		</div>
	</body>
			</html>