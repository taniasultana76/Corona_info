<?php
	include("dbcon.php")
?>



<!DOCTYPE html>



<style type="text/css">
	
*{
	margin: :0px;
	padding: :0px;
}

#main{
	border:2px solid SeaGreen;
	border-radius: 10px;
	width: 500px;
	height: 510px;
	margin: 24px auto;
}

#message_area{
	width: 100%;
	border:2px solid SeaGreen; height: 420px;
	border-radius: 10px;
}

</style>
<body>
	


	<?php
	session_start() ;
	if(isset($_SESSION['email'])){


	 echo '<h1 style="color:red">Welcome </h1>'.$_SESSION['email'] ;
	 echo '<a href="logout.php">Log-Out</a>';
	}else{
		header("location:log.php");
	}


	?>


<div id="main">
<div id="message_area">
</div><br>
<?php

	

if(isset($_post['submit'])){


	$message1 = $_POST['message'];
 
	
		

	$q = 'INSERT INTO `comment`(`id`, `message`, `email`) VALUES ("" , "'.$message1.'" , "'.$_SESSION['email'].'")';
	if( mysqli_query($con,$q)){

		echo '<h3 style="color:red"> '.$_SESSION['email'].' </h3>' ;
		echo '<p> '.$message.' </p>' ;
	}else{
		echo "<script>alert ('no message')</script>";
	}
}






?>
<form action="" method="post">
<input style="width: 400px;height: 50px;border-radius: 20px;"  type="text" name="message"  placeholder="Type your masseage"/>
<input style="width: 80px;height: 40px;border-radius: 10px;"  type="submit" name="submit" value="Comment"/>
</form>
</div>






</body>


</html>