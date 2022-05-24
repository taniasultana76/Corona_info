<?php

session_start() ;
if(isset($_SESSION['email'])){
	unset($_SESSION['email']) ;
	header ("location:log.php") ;
}else{

	header("location:log.php") ;
}

?>