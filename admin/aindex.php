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

   
  <div id="header" style="background-color:DarkRed;
  		height:100vh;
	background-size:cover;
	background-position:center;
	">
		<h1 style="padding:60px;font-size:60px;text-align:center;color:white"><font face="Cooper"><b>Corona Update</b></font></h1>


<div id="container1">

		<h2 style="padding:10px;text-align:center;font-size:40px;color:white"><b>Admin Log-In</b></h2>
		<br><br><center>
			<form action="" method="post">
			<table>
				<tr>
				<td width="200" height="50"><b><font style="font-size:20px;color:white">Username:</font></b></td>
				<td width="200" height="50"><input style="width:200px;height:30px;border-radius:20px;" type="text" name="un"
				placeholder="name">
				</td>
			</tr>
			
			<tr>
				<td width="200" height="50"><b><font style="font-size:20px;color:white">Password:</font></b></td>
				<td width="200" height="50"><input style="width:200px;height:30px;border-radius:20px;" type="password"
				name="ps" placeholder="password"></td>
			</tr>
			
			<tr>
				<td><input style="width: 100px;height: 30px;border-radius: 20px;"  type="submit" name="sub" value="login"></td>
				</tr>
		
			</table>
			</form>
			
		
		
			


			
		<?php
			if(isset($_POST['sub']))
			{
			$un=$_POST['un'];
			$ps=$_POST['ps'];
			$q="select * from admin";
			$run=mysqli_query($con,$q);
			$row=mysqli_fetch_array($run);
			echo $u=$row['un1'];
			echo $p=$row['ps1'];
				if($un==$u && $ps==$p)
			{
				header("Location:ahome.php");
			}
			else
			{
				header("Location:aindex.php?wrong user");
			}
				
				
			}
		?>
		
			</center>
	</div>
	
</div>
</body>
</html>

















