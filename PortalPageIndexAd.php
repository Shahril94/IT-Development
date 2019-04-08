<?php 
// Start the session
    session_start();
	$servername  = "localhost";
	$username    = "root";
	$password    = "";
	$database    = "my_db";
			
	$conn1     = mysqli_connect($servername,$username,$password);			              	 		  
				 mysqli_select_db($conn1,$database);
?>
<head>
<title>Portal Page Index</title>
</head>
<frameset rows="12%,*" cols="*">
<frame Src="PortalTopBarHeadAd.php" name='topright' noresize="noresize" />
	<frameset cols="15%,85%">
  		<frame src="PortalSidemenuAd.php" name='sidemenu' noresize="noresize" />
  			<frameset rows="50%">
  				<frame src="PortalContentAd.php" name='content' noresize="noresize" />
                        </frameset>
	</frameset>
</frameset><noframes></noframes>
</html>
