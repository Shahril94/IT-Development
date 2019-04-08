<?php 
session_start();
if(isset($_SESSION['username']))
{
    /*$nam = $_SESSION['username'];
    $sql = "SELECT Name From profile Where Username = '".$_SESSION['username']."'";
    $result = mysql_query($sql);
    $row = mysql_fetch_array($result);
    echo '';*/
?> 
<head>
<title>Sidemenu</title>
</head>

<body bgcolor="#CCFF33">
      <div id="profile">
      <b id="welcome">WELCOME:<i><?php echo $_SESSION['username'];//$log_in; ?></i></b>
      </div>
	  <button style='width: 181px; padding: 20px; cursor: pointer;   
	  box-shadow: 6px 6px 5px; #999: -webkit-box-shadow: 6px 6px 5px #999; -moz-box-shadow: 6px 6px 5px #999; font-weight: bold; 
          background: #ffff00; color: #000; border-radius: 10px; border: 1px solid #999; font-size: 150%'><a href="Side_User.php" target="content"><i>User</i></a></button>
          <button style='width: 181px; padding: 20px; cursor: pointer;   
	  box-shadow: 6px 6px 5px; #999: -webkit-box-shadow: 6px 6px 5px #999; -moz-box-shadow: 6px 6px 5px #999; font-weight: bold; 
          background: #ffff00; color: #000; border-radius: 10px; border: 1px solid #999; font-size: 150%'><a href="Side_Addmvie.php" target="content"><i>Add Movie</i></a></button>
          <button style='width: 181px; padding: 20px; cursor: pointer;   
	  box-shadow: 6px 6px 5px; #999: -webkit-box-shadow: 6px 6px 5px #999; -moz-box-shadow: 6px 6px 5px #999; font-weight: bold; 
          background: #ffff00; color: #000; border-radius: 10px; border: 1px solid #999; font-size: 150%'><a href="Side_mvielist.php" target="content"><i>Movie List</i></a></button>
          <button style='width: 181px; padding: 20px; cursor: pointer;   
	  box-shadow: 6px 6px 5px; #999: -webkit-box-shadow: 6px 6px 5px #999; -moz-box-shadow: 6px 6px 5px #999; font-weight: bold; 
	  background: #ffff00; color: #000; border-radius: 10px; border: 1px solid #999; font-size: 150%'><a href="Side_mem.php" target="content"><i>Members</i></a></button>
          <button style='width: 181px; padding: 20px; cursor: pointer;   
	  box-shadow: 6px 6px 5px; #999: -webkit-box-shadow: 6px 6px 5px #999; -moz-box-shadow: 6px 6px 5px #999; font-weight: bold; 
          background: #ffff00; color: #000; border-radius: 10px; border: 1px solid #999; font-size: 150%'><a href="Side_non.php" target="content"><i>Non-Members</i></a></button>          
          <button style='width: 181px; padding: 20px; cursor: pointer;   
	  box-shadow: 6px 6px 5px; #999: -webkit-box-shadow: 6px 6px 5px #999; -moz-box-shadow: 6px 6px 5px #999; font-weight: bold; 
	  background: #ffff00; color: #000; border-radius: 10px; border: 1px solid #999; font-size: 150%'><a href='Logout.php' target="_parent"><i>Sign Out</i></a></button>
</body>
</html>

<?php
}
else
{
    echo 'Password or Username Wrong';
}
?>