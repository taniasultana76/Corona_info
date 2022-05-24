<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	
	<?php include 'link/links.php'; ?>
	<?php include 'css/style.php'; ?>
</head>
<body>

			  <nav class="navbar navbar-expand-lg nav-style p-3">
			  <a class="navbar-brand pl-5" href="#">COVID-19</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
			  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			 <span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			 <ul class="navbar-nav ml-auto pr-5 text-capitalize">
			 <li class="nav-item active">
			 <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
		    </li>
			<li class="nav-item">
			<a class="nav-link" href="doc.php">Doctor-list</a>
			 </li>
			
		   </div>
			</nav>
			
	
			
		<div class="container-fluid sub_section   pt-2 pb-2" id="preventid">
	<div class="section_header text-center mb-5 mt-4">
		<h1>For Appointment</h1>
	</div>	
			
		<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 col-12">
				<form action="" method="POST">
				
			<div class="form-group">
				<label>Patient-name</label>
				<input type="text" class="form-control" name="username" placeholder="Name" autocomplete="off" required>
				</div>
				
				<div class="form-group">
				<label>Address</label>
				<input type="text" class="form-control" name="add" placeholder="Address" autocomplete="off" required>
				</div>
				
				<div class="form-group">
				<label>Mobile</label>
				<input type="number" class="form-control" name="mobile" placeholder="Mobile-no" autocomplete="off" requried>
				</div>
					
			
			<div class="form-group">
				<label>Doctor-name</label>
				<input type="text" class="form-control" name="dname" placeholder="Doctorname" autocomplete="off" required>
				</div>
			
		<button type="submit" class="btn btn-primary" name="submit" id="a">Submit</button>






	
				
				</form>
			</div>
		</div>	
	</div>
	
</div>	
			
			
			
			
			
			
			
			
			
	<footer class="mt-5">
	<div class="footer_style text-white text-center ">
		<p>copyright by tania sultana</p>
	</div>
</footer>

<?php

include 'dbcon.php';
	
	if(isset($_POST['submit'])){
	
	$username=$_POST['username'];
	$address=$_POST['add'];
	$mobile=$_POST['mobile'];
	$dname=$_POST['dname'];

$insertquery = " insert into apoint (username,address,mobile,dname) value('$username','$address','$mobile','$dname')";
		
$query = mysqli_query($con,$insertquery);
		
		if($query){
		?>
		<script>
			alert("Submit");
				</script>
				<?php
				}else{
				?>
				<script>
				 alert(" not Submit");
				</script>
				<?php
				}
				}
				?>









		