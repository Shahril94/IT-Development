<?php
  $servername  = "localhost";
  $username    = "root";
  $password    = "";
  $database    = "mvie";
			
  $conn        = mysqli_connect($servername,$username,$password);			              	 		  
  	   		     mysqli_select_db($conn,$database);
  
  session_start();
  
  /*$myusername= $_POST['username'];
  
  $_SESSION['user'] = $myusername;*/
  echo $_SESSION['user'];
  /*$check = $_SESSION['user'];
  
  $sql = "SELECT Username From profile Where Username ='$check' ";
  $www=mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($www);
  $log_in = $row['Username'];*/
  
  if(!isset($log_in))
  {
	  mysqli_close($conn);
	  //header("location:Main Menu.php");
  }
  
				 
				 
?>