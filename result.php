			<?php 
			include("admin/config/db.php");
			$get=$_GET['text'];
			 ?>

			<!DOCTYPE html>
			<html>
			<head>
				<title>Welcome to India-News</title>
				<link rel="stylesheet" type="text/css" href="assets/bootstrap.min.css">	
				<link rel="stylesheet" type="text/css" href="assets/font/css/font-awesome.min.css">
				<link rel="stylesheet" type="text/css" href="assets/style.css">	


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
					<a  href="index.php" style="text-decoration: none;"><h1 class="heading">India <span class="active">News</span>
				</div>
				<div class="col-md-8">
					<img src="admin/image/a.jpg" style="width: 600px; margin-left: 150px;">
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
					
						<div class="side">
						<div class="post_menu">
							<span>Result</span>
						</div>	
					</div>
					<div class="msg" style="margin:10px;">
						<h5 style="float: right; ">
							<?php 
							$select="select * from news where Name like '%$get%'";
							$run=mysqli_query($con,$select);
							$count=mysqli_num_rows($run);
							if ($count>0) {
							
							

							 ?>




							Your Search Result<span class="badge"><?php echo $count ?></span> found</h5><br><br><br>
					</div><br>
					<div class="Post">
						<?php 
						while ($row=mysqli_fetch_array($run)) {
							$id=$row['id'];
							$name=$row['Name'];
							$img=$row['Image'];
							$text=$row['Text'];
							$date=$row['Date'];
						

						 ?>
						<div class="row">
							<div class="col-md-4">
								<img src="admin/image/<?php  echo $img?>" class="img img-thumbnail" width="250px" height="200px">
							</div>
							<div class="col-md-8"><h4 style="font-weight: bold; color:black;"> <?php  echo $name?></h4>
								<h6 style="float: right;">Date:<?php  echo $date ?></h6><br><br><br>
								<p style="font-size: 15px; color: black; text-align: justify;"><?php  echo $text ?></p>
							</div>
					    </div>
						 		<?php
							    } }
							 else
							  {
								echo "<script>window.open('search.php ?msg=Result Not Found','_self')</script>";
							   }
						       ?>
					
					</div>
				</div>
					<?php
			include("include/side.php");
		  ?>

			<div class="footer">
				<center> <medium style="color:white" class="copyright">Copyright &copy 2018 IndiaNews Private Limited.All Rights Reserved.</medium> </center>
			</div>
			</div>
			</body>
			</html>