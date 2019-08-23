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
			   		<li><a href="index1.php"><i class="fa fa-dashboard" style="font-size: 25px; margin-left: 10px">&nbsp;</i> Dashboard</a></li>
			   		<li class="active"><a href="view.php"><i class="fa fa-edit" style="font-size: 25px; margin-left: 10px">&nbsp;</i>Insert/Edit News</a></li>
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
					<h3>Insert News</h3>
					<hr>
					<form action="insertnews.php" method="post">
					<label for="name">Write a news Name</label>
					<input required  type="text" name="name" id="name" class="form-control">	
					<br>
					<label for="img">New Image</label>
					<input required type="file" name="name" id="img" class="form-control">	
					<br>
					<label for="cat">Select Categories</label>
					<select required id="cat" class="form-control">
						<option>International</option>
						<option>National</option>
						<option>State level</option>
						<option>Region </option>
					</select>	
					<br>
					<label for="img">News Text</label>
					<textarea required class="form-control" id="text" name="text"  style="height: 150px;" ></textarea>	
					<br>
					<button class="btn btn-success" style="float: right;">Submit</button>








					</form>
						
					
				</div>
			</div>
		  
		
		</div>
	</body>
	</html>