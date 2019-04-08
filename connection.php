<?php

$server = 'localhost';

$user = 'root';

$pass = '';

$db = 'mvie';


// Connect to Database

$connection = mysql_connect($server, $user, $pass)

or die ("Could not connect to server ... \n" . mysql_error ());

mysql_select_db($db)

or die ("Could not connect to database ... \n" . mysql_error ());


/*
$servername = "localhost";
$username = "root";
$password ="";
$database = "mvie";

$conn = mysqli_connect($servername,$username,$password);
$db   = mysqli_select_db($conn,$database);

if(!$conn)
{
    die('Could not connect:'.mysqli_error());
}
else if(!$db)
{
    die('Could not connect:'.mysqli_error());
}*/
		
			
			/*$servername = "localhost";
			$username = "username";
			$password = "";

			// Create connection
			$conn = new mysqli($servername, $username, $password);

			// Check connection
			if ($conn->connect_error) 
			{
    			die("Connection failed: " . $conn->connect_error);
			} 
			echo "Connected successfully";*/
?>