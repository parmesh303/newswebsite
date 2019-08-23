		  	<?php
		  	include("admin/config/db.php");

		  	  ?>




		   <div class="col-md-4">
					<div class="side">
						<div class="side_menu">
							<span>Latest Post</span>
						</div>	
					</div><br>


					
							<?php 
								$select="select * from news order by id DESC limit 0,4";
								$run=mysqli_query($con,$select);
								$count= mysqli_num_rows($run);
								If($count>0)
								 {
									while ($row=mysqli_fetch_array($run)) {
									$id=$row['id'];
									$name=$row['Name'];
									$img=$row['Image'];
									
							
							 ?>
							 <div class="row">
					<div class="col-md-4">
						<img class="img img-rounded" src="admin/image/<?php echo $img ?>"style="height: 100px; width: 100px; " >
					</div>
					<div class="col-md-8">
					<br><span class="side_post"><a href= viewnews.php ?id= <?php echo $id?>> <?php echo $name ?>  </a></span>
					</div>
				   </div>
				   <hr>
				   <?php }}
				   		else
				   		{
				   			echo "<h5><center>Sorry No Post Available</center></h5>";
				   		}


				    ?>
				   <div class="side">
						<div class="side_menu">
							<span>Categories</span>
						</div>	
					</div>
					<div class="cat">
						<?php
						$cat="select * from cat order by id Asc limit 0,3";
						$run_cat=mysqli_query($con,$cat);
						$count_cat=mysqli_num_rows($run_cat);
						if($count_cat>0)
						{
							while ($row_cat=mysqli_fetch_array($run_cat)) {
								$id_cat=$row_cat['id'];
								$name_cat=$row_cat['Name'];
								
							
							







						?>
						<a href="all.php?id=<?php echo $id_cat ?>"><?php echo $name_cat ?> </a>
						<?php }}
						else
						{
							echo "<center><h6>Sorry No Categories Available</h6></center>";
						}




						  ?>
					</div>
				</div>
				 
			 </div>