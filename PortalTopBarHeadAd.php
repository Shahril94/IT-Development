<?php
  $servername  = "localhost";
  $username    = "root";
  $password    = "";
  $database    = "my_db";
			
  $link        = mysqli_connect($servername,$username,$password);			              	 		  
				 mysqli_select_db($link,$database);

?>
<head>

<title>Header</title>
</head>

<body bgcolor="#CCFF33">
<header>
   <center><h1>Welcome to Administrator Page</h1></center>
</header>

</body>
</html>