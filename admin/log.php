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

   
  <div id="header" style="background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(../images/co.jpeg);
  		height:100vh;
	background-size:cover;
	background-position:center;
	">
		<h1 style="padding:60px;font-size:60px;text-align:center;color:white"><font face="Cooper"><b>Corona Update</b></font></h1>


<div id="container1">

		<h2 style="padding:10px;text-align:center;font-size:40px;color:white"><b>Log-In</b></h2>
		<br><br><center>
			<form action="" method="post">
			<table>
				<tr>
				<td width="200" height="50"><b><font style="font-size:20px;color:white">E-mail:</font></b></td>
				<td width="200" height="50"><input style="width:200px;height:30px;border-radius:20px;" type="text" name="email"
				placeholder="E-mail">
				</td>
			</tr>
			
			<tr>
				<td width="200" height="50"><b><font style="font-size:20px;color:white">Password</font></b></td>
				<td width="200" height="50"><input style="width:200px;height:30px;border-radius:20px;" type="Password"
				name="ps" placeholder="Password"></td>
			</tr>
			
			<tr>
				<td><input style="width: 100px;height: 30px;border-radius: 20px;"  type="submit" name="sub" value="login"></td>
				</tr>
		
			</table>
			</form>
			
		
		<a href="sing.php" style="color:yellow;font-family:copper;font-size:25px;">Sing-up</a>
			


			
		<?php
			if(isset($_POST['sub']))
			{
			$un=$_POST['email'];
			$ps=$_POST['ps'];
			$q="select * from singup where email='$un' && ps='$ps'";
			$run=mysqli_query($con,$q);
			$res=mysqli_num_rows($run);
			if($res>0)
			{
				header('Location:sing.php');
			}
			else
			{
				header('Location:log.php?wrong user');
			}
				
				
			}
		?>
		
			</center>
	</div>
	
</div>
</body>
</html>

















