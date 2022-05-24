<?php
	include("dbcon.php")
?>



<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<?php include 'link/links.php'; ?>
	<?php include 'css/style.php'; ?>
</head>

<body>

   
  <div id="header" style="background-color:black;
  		height:100vh;

	background-size:cover;
	background-position:center;
	">
		<h1 style="padding:60px;font-size:60px;text-align:center;color:white"><font face="Cooper"><b>Corona Update</b></font></h1>


<div id="container1">

		<h2 style="padding:10px;text-align:center;font-size:40px;color:white"><b>Sing-Up</b></h2>
		<br><br><center>
			<form action="" method="post">
			<table>
				<tr>
				<td width="200" height="50"><b><font style="font-size:20px;color:white">Enter Name:</font></b></td>
				<td width="200" height="50"><input style="width:200px;height:30px;border-radius:20px;" type="text" name="name"
				placeholder="name">
				</td>
			</tr>
			
			<tr>
				<td width="200" height="50"><b><font style="font-size:20px;color:white">Enter E-mail:</font></b></td>
				<td width="200" height="50"><input style="width:200px;height:30px;border-radius:20px;" type="email"
				name="email" placeholder="E-mail"></td>
			</tr>
			
			<tr>
				<td width="200" height="50"><b><font style="font-size:20px;color:white">Enter Password:</font></b></td>
				<td width="200" height="50"><input style="width:200px;height:30px;border-radius:20px;" type="Password"
				name="ps" placeholder="password"></td>
			</tr>


			<tr>
				<td width="200" height="50"><b><font style="font-size:20px;color:white">Re-Enter password:</font></b></td>
				<td width="200" height="50"><input style="width:200px;height:30px;border-radius:20px;" type="password"
				name="rps" placeholder="Re-password"></td>
			</tr>





			<tr>
				<td><input style="width: 100px;height: 30px;border-radius: 20px;"  type="submit" name="sub" value="Sing-Up"></td>
				</tr>
		
			</table>
			</form>
			
	<?php

	if(isset($_POST['sub'])){

		$name=$_POST['name'];
		$email=$_POST['email'];
		$ps=$_POST['ps'];
		$rps=$_POST['rps'];
		$l=strlen($ps);

		if (!empty($name) && !empty($email) && !empty($ps))
		{
			if($ps==$rps)
			{
				if($l>5)
				{
					if(mysqli_query($con,"insert into singup(name,email,ps) values('$name','$email','$ps')"))
				{
					header("Location:log.php");
				}
				else
				{
					echo "<script>alert('Registration fill')</script>";
				}
			}
			else
			{
				echo "worng";
		}
	}
	else
	{
		echo "<script>alert('password not match')</script>";
	}
	
}
}

	?>
		
			


			
		
	
		<a href="log.php" style="color:yellow;font-family:copper;font-size:25px;">Login</a>
			</center>

	</div>
	
</div>
</body>
</html>


