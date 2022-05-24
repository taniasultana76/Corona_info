<?php
	session_start();

		

	$mysqli = new mysqli ('localhost', 'root' ,'' ,'cor_info') or die (mysqli_error($mysqli));

		$id = 0;
		$update = false;
		$name='';
		$address='';
		$phone='';
		$coronacase='';


	if (isset($_POST['save'])){

		$name=$_POST['name'];
		$address=$_POST['address'];
		$phone=$_POST['phone'];
		$coronacase=$_POST['corcase'];



		$mysqli->query ("INSERT INTO information (name,address,phone,corcase) values ('$name','$address','$phone','$coronacase')")
		or die($mysqli->error);

		$_sessasion['message']="Record has been saved!";
		$_sessasion['msg_type']="success";

		header("location:ahome.php");

	}

	if (isset($_GET['delete'])){
		$id = $_GET['delete'];

		$mysqli->query ("DELETE  FROM  information WHERE id=$id")
		
		or die($mysqli->error);

		$_sessasion['message']="Record has been deleted!";
		$_sessasion['msg_type']="danger";
		header("location:ahome.php");

	}


	if (isset($_GET['edit'])){
		$id = $_GET['edit'];
		$update = true; 
		$result = $mysqli->query("SELECT * FROM information WHERE id=$id") or die ($mysqli->error());
				{
			$row = $result->fetch_array();
			$name = $row['name'];
			$address=$row['address'];
			$phone=$row['phone'];
			$coronacase=$row['corcase'];
		
		}

	}



	if (isset($_POST['update'])){
		$id = $_POST['id'];
		$name = $_POST['name'];
		$address = $_POST['address'];
		$phone = $_POST['phone'];
		$coronacase = $_POST['corcase'];

		$mysqli->query("UPDATE information SET name='$name', address='$address', phone='$phone', corcase='$coronacase' WHERE id=$id") or die($mysqli->error);

		

		header('location: ahome.php');














	}





	?>

