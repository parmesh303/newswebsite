	<!DOCTYPE html>
	<html>
	<head>
		<title>Admin Panel</title>
		<link rel="stylesheet" type="text/css" href="assets/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="assets/font/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="assets/style.css">
	
	</head>
	<body>
		<div class="row">
			<div class="col-md-3">
				<div class="heading">
				  <h3 style="text-align: center; font-weight: bold;color: white; line-height:60px">Admin panel</h3>
			   </div>
			   <div class="pro"><br>
			   	<center><img src="image/admin.png" style="height: 150px;
					width: 150px;"></center>
			   </div>
			   <div class="menu">
			   	<ul>
			   		<li class="active"><a href="index1.php"><i class="fa fa-dashboard" style="font-size: 25px; margin-left: 10px">&nbsp;</i> Dashboard</a></li>
			   		<li><a href="view.php"><i class="fa fa-edit" style="font-size: 25px; margin-left: 10px">&nbsp;</i>Insert/Edit News</a></li>
			   		<li><a href="viewcat.php"><i class="fa fa-bar-chart-o" style="font-size: 25px; margin-left: 10px">&nbsp;</i>View/Insert Categories</a></li>
			   		<li><a href="profile.php"><i class="fa fa-desktop" style="font-size: 25px; margin-left: 10px">&nbsp;</i>Change Password</a></li>
			   	</ul>
			   </div>
			</div>
			<div class="col-md-9" style="background: rgba(51,51,51,0.03);">
				<div class="container-fluid">
					<form>
						<button class="btn btn-purple" style="float: right; margin:20px;">Log out</button>
					</form>
				</div>
				<div class="container" style="background: white; border: 0px solid; width: 800px;">
					<h3>Admin Dashboard</h3>
					<h6 style="font-weight: bold;">Welcome: Parmesh Pawar</h6>
					<hr>

					<div class="row">
						<div class="col-md-4">
							  <div class="cc">
								   <center>
									<div class="icon" style="background: rgb(197,61,17);">
									 <i class="fa fa-bars" style="font-size:60px; color: white"></i>
							        </div>
							        <h3>Total Post</h3>
							        <span class="badge">3</span>
							       </center>
							</div>
						</div>
						<div class="col-md-4">
							<div class="cc">
								   <center>
									<div class="icon" style="background:green;">
									 <i class="fa fa-phone" style="font-size:60px; color: white"></i>
							        </div>
							        <h3>Contact us</h3>
							        <span class="badge">3</span>
							       </center>
							</div></div>
						<div class="col-md-4">
							<div class="cc">
								   <center>
									<div class="icon" style="background: blue;">
									 <i class="fa fa-pencil" style="font-size:60px; color:white"></i>
							        </div>
							        <h3>Categories</h3>
							        <span class="badge">4</span>
							       </center>
							</div></div>
					</div><br><br><br>
					<h3>Contact us</h3>
					<hr>
					<table class="table table-hover table-striped table-bordered">
						<tr>
							<th>Sr.No</th>
							<th>Name</th>
							<th>Email</th>
							<th>Message</th>
						
						</tr>
						<tr>
							<th>1</th>
							<th>Parmesh Pawar</th>
							<th>parmeshpawar303@gmail.com</th>
							<th>Good</th>
						</tr>
						<tr>
							<th>2</th>
							<th>Ayush Mishra</th>
							<th>ayushmishra03@gmail.com</th>
							<th>funny</th>
						</tr>
						<tr>
							<th>3</th>
							<th>Prakhar Ranjan</th>
							<th>prakhar221010@gmail.com</th>
							<th>Awesome</th>
						</tr>
					</table>
				</div>
			</div>
		  
		
		</div>
	</body>
	</html>