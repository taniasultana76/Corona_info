<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	
	<?php include 'link/links.php'; ?>
	<?php include 'css/style.php'; ?>
</head>
<body>
		<?php require_once 'process.php';?>

			<?php 
				if (isset($_SESSION['message'])): ?>
				<div class="alert alert-<?=$_SESSION['msg-type']?>">
		<?php 
			echo $_SESSION['message'];
			unset($_SESSION['message']);
			?>

		</div>
		<?php
			endif ?>


				 <nav class="navbar navbar-expand-lg nav-style p-3">
				  <a class="navbar-brand pl-5" href="#">Admin Panel</a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
				  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				 <span class="navbar-toggler-icon"></span>
				  </button>

				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				 <ul class="navbar-nav ml-auto pr-5 text-capitalize">
				 <li class="nav-item active">
				 <a class="nav-link" href="#">Check Report<span class="sr-only">(current)</span></a>
			    </li>
				<li class="nav-item">
				<a class="nav-link" href="msg.php">Message</a>
				 </li>
				<li class="nav-item">
				<a class="nav-link" href="patient.php">Appointment-list</a>
				 </li>
				
			   </div>
				</nav>
			
	
			
			
		
	<div class="container">
	<div class="row justify-content-center">
	<form action="process.php" method="POST">

		<input type="hidden" name="id" value="<?php echo $id; ?>">

		<div class="form-group">
			<h1>Report of Corona-Case</h1>
			<label>Name</label>
			<input type="text" name="name" class="form-control" value ="<?php echo $name;?>" placeholder= "Enter name">
		</div>

		<div class="form-group">
			<label>Address</label>
			<input type="text" name="address" class="form-control" value="<?php echo $address;?>" placeholder= "Enter address">
		</div>

		<div class="form-group">
			<label>Phone-no</label>
			<input type="text" name="phone" class="form-control" value="<?php echo $phone;?>" placeholder= "Enter phone">
		</div>

		<div class="form-group">
			<label>Corona-case</label>
			<input type="text" name="corcase" class="form-control" value="<?php echo $coronacase;?>" placeholder= "Enter case">
		</div>
		<div class="form-group">

		<?php 
		if ($update == true):
		?>
		 	<button type="submit" class="btn btn-info" name="update">Change report</button>
		 <?php 
		 	else:?>
			<button type="submit" class="btn btn-primary" name="save">Save</button>
		<?php endif; ?>
		</div>

	</form>


	
</div>






 <?php

	$mysqli = new mysqli ('localhost', 'root' ,'' ,'cor_info') or die (mysqli_error($mysqli));
	$result = $mysqli->query("SELECT * from  information")
		
		or die($mysqli->error);

?>


<div class="row justify-content-center">
	<table class="table">
		<thead>
			<tr>
				<th>Name</th>
				<th>Address</th>
				<th>Phone-no</th>
				<th>Corona-Case</th>
				<th colspan="2">Reguler-Update</th>
			</tr>
		</thead>

	<?php 

		while($row = $result->fetch_assoc()):?>
		<tr>
			<td><?php echo $row['name'];?></td>
			<td><?php echo $row['address'];?></td>
			<td><?php echo $row['phone'];?></td>
			<td><?php echo $row['corcase'];?></td>
			<td>
				<a href="ahome.php?edit=<?php echo $row['id'];?>"
					class="btn btn-info">Change report</a>
				<a href="process.php?delete=<?php echo $row['id'];?>"
					class="btn btn-danger">Death</a>
			</td>
		</tr>
	<?php endwhile; ?>


</table> 
</div>



<?php 
	function pre_r($array){
		echo '<pre>';
		print_r($array);
		echo '</pre>';

	}
	?>







</div>			



<footer class="mt-5">
	<div class="footer_style text-white text-center ">
		<p>copyright by tania sultana</p>
	</div>
</footer>



	
</div>	
			
</body>
</html>			
			
			
			
			
			