<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	
	<?php include 'link/links.php'; ?>
	<?php include 'css/style.php'; ?>
</head>
<body>
		<?php
				include 'dbcon.php';
			
			?>

			

				 <nav class="navbar navbar-expand-lg nav-style p-3">
				  <a class="navbar-brand pl-5" href="#">Admin Panel</a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
				  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				 <span class="navbar-toggler-icon"></span>
				  </button>

				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				 <ul class="navbar-nav ml-auto pr-5 text-capitalize">
				 <li class="nav-item active">
				 <a class="nav-link" href="ahome.php">Check Report<span class="sr-only">(current)</span></a>
			    </li>
				<li class="nav-item">
				<a class="nav-link" href="msg.php">Message</a>
				 </li>

				 <li class="nav-item">
				<a class="nav-link" href="patient.php">Appointment-list</a>
				 </li>
				
				
			   </div>
				</nav>
			
	<div class="main_header">
		<div class="row w-100 h-100">
			<div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
			<div class="leftside w-100 h-100 d-flex justify-content-center
			align-items-center">
				<img src="images/e.jpeg" width="300" height="300">
			</div>
			</div>
			<div class="col-lg-7 col-md-7 col-12 order-lg-1 order-1">
			<div class="rightside  w-100 h-100 d-flex justify-content-center
			align-items-center">
				<h1>Let's Stay Safe & Fight Together Against Cor <span class="corona_rot"><img src="images/c.jpeg" width="90" height="80">
				</span>na Virus</h1>
			</div>
			
			</div>
			</div>
			
			
			
		
<div id="container">
	
		<h1 style="text-align: center; color:Red">Message of Corona-Symptoms People</h1><br><br>
		
		<center>
			<table border="2" align="center">
			<tr>
				<th width="200" height="50" style="text-align:center">Name</th>
				<th width="200" height="50" style="text-align:center">Gender</th>
				<th width="200" height="50" style="text-align:center">Address</th>
				<th width="200" height="50" style="text-align:center">Mobile-No</th>
				<th width="200" height="50" style="text-align:center">Symptom</th>
				<th width="200" height="50" style="text-align:center">Message</th>
			</tr>
			<?php


				$q = "select * from coronacase";
				$run=mysqli_query($con,$q);
				while($row=mysqli_fetch_array($run))
				{
				 $username=$row['username'];
				 $msg=$row['message'];
				 $symp=$row['symp'];
				 $gender=$row['gender'];
				 $address=$row['address'];
				 $mobile=$row['mobile'];
				?>

				<tr>

					<td width="200" height="50"><center><?php echo $username?></center></td>
					<td width="200" height="50"><center><?php echo $gender?></center></td>
					<td width="200" height="50"><center><?php echo $address?></center></td>
					<td width="200" height="50"><center><?php echo $mobile?></center></td>
					<td width="200" height="50"><center><?php echo $symp?></center></td>
					<td width="200" height="50"><center><?php echo $msg?></center></td>
					


					<?php

			}


	?>
					
	</table>
	</center>	
		
</div>

<footer class="mt-5">
	<div class="footer_style text-white text-center ">
		<p>copyright by tania sultana</p>
	</div>
</footer>

</div>


			
</body>
</html>			
			
			
			
			
			