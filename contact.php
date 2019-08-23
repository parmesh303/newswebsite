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


			</head>
			<body >
			<div class="container-fluid" style="background:white">
				<nav class="navbar navbar-default">
			      <div class="container-fluid">
			      <div class="navbar-header">
			      <a class="navbar-brand" href="#">IndiaNews</a>
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
							<span>Contact-us</span>
						</div>	
					</div>
					<br><br>
						<form action="contact.php" method=POST>
							<label for="name">Write your Name</label>
							<input id="name" type="text" name="name" required class="form-control"><br>
							<label for="name">Write your E-mail</label>
							<input id="email" type="text" name="email" required class="form-control"><br>
							<label for="name">Write your Message</label>
							<textarea name="msg" class="form-control" id="msg"></textarea><br>
							<button  name=submit  class="btn btn-purple" style="float: right;">Send</button>
						</form>
						<?php
						if (isset($_POST['submit'])) 
						{
							$name=$_POST['email'];
							$email =$_POST['name'];
							$msg=$_POST['msg'];

							$insert="insert into Contact (Name,Email,msg) values ('$name','$email','$msg')";
							$run_in=mysqli_query($con,$insert);
							if ($run_in)
							 {
								echo "<script> 
								alert('Your Message has been  sent succesfully')
								</script>";
							}
							else
							{
								echo "<script> alert('Your Message has been not sent succesfully') </script>";
							}
						}



						  ?>
					
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