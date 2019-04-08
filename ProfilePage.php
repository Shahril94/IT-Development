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
<html> 
<head>    
<title>Profile Page</title>
<script type="text/javascript">
function altRows(id){
	if(document.getElementsByTagName){  
		
		var table = document.getElementById(id);  
		var rows = table.getElementsByTagName("tr"); 
		 
		for(i = 0; i < rows.length; i++){          
			if(i % 2 == 0){
				rows[i].className = "evenrowcolor";
			}else{
				rows[i].className = "oddrowcolor";
			}      
		}
	}
}
window.onload=function(){
	altRows('alternatecolor');
}
</script>
<style>
* {
    box-sizing: border-box;
}

body, html {
  width: 100%;
  height: 100%;
  margin: 0;
}

.container {
  width: 100%;
  height: 100%;
}

.toppane {
  width: 100%;
  height: 10%;
  border-collapse: collapse;
  background-color: #87CEEB;
}

.column {
    float: left;
    width: 14%;
    padding: 10px;
    height: 90%;

    
}

.column2 {
    float: right;
    width: 86%;
    padding: 10px;
    height:90%;
   
}
a{
    /*element of !important used for remove underline achor*/
    text-decoration: none !important ;
}
.altrowstable {
	font-family: verdana,arial,sans-serif;
	font-size:11px;
	color:#333333;
	border-width: 1px;
	border-color: #a9c6c9;
	border-collapse: collapse;
}
.altrowstable th {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #a9c6c9;
}
.altrowstable td {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #a9c6c9;
}
.oddrowcolor{
	background-color:#d4e3e5;
}
.evenrowcolor{
	background-color:#c3dde0;
}
</style>    
</head>     
<body>
        <div class="toppane">
            <center><h2><b>Welcome To the ABC Profile Page</b></h2></center> 
        </div>
            <div class="column" style="background-color:royalblue">
                <b id="welcome">Profile:<i><?php echo $_SESSION['username']; ?></i></b>
                <b><font size= "4">Navigation Menu</font></b>
                <button style='width: 180px; padding: 20px; cursor: pointer;   
                box-shadow: 6px 6px 5px; -webkit-box-shadow: 6px 6px 5px #999; -moz-box-shadow: 6px 6px 5px #999; font-weight: bold; 
                background: #ffff00; color: #000; border-radius: 10px; border: 1px solid #999; font-size: 150%' onclick="openMenu('Home',this,'#ffff00')" id="defaultOpen" >Home</button>
                <button style='width: 180px; padding: 20px; cursor: pointer;   
                box-shadow: 6px 6px 5px; -webkit-box-shadow: 6px 6px 5px #999; -moz-box-shadow: 6px 6px 5px #999; font-weight: bold; 
                background: #ffff00; color: #000; border-radius: 10px; border: 1px solid #999; font-size: 150%' onclick="openMenu('Profile',this,'#ffff00')" >Profile</button>
                <button style='width: 180px; padding: 20px; cursor: pointer;   
                box-shadow: 6px 6px 5px;  -webkit-box-shadow: 6px 6px 5px #999; -moz-box-shadow: 6px 6px 5px #999; font-weight: bold; 
                background: #ffff00; color: #000; border-radius: 10px; border: 1px solid #999; font-size: 150%' onclick="openMenu('Ticket',this,'#ffff00')" >Ticket</button>
                <button style='width: 180px; padding: 20px; cursor: pointer;   
                box-shadow: 6px 6px 5px;  -webkit-box-shadow: 6px 6px 5px #999; -moz-box-shadow: 6px 6px 5px #999; font-weight: bold; 
                background: #ffff00; color: #000; border-radius: 10px; border: 1px solid #999; font-size: 150%' onclick="openMenu('Status',this,'#ffff00')" >Status</button>
                <button style='width: 180px; padding: 20px; cursor: pointer;   
                box-shadow: 6px 6px 5px;  -webkit-box-shadow: 6px 6px 5px #999; -moz-box-shadow: 6px 6px 5px #999; font-weight: bold; 
                background: #ffff00; color: #000; border-radius: 10px; border: 1px solid #999; font-size: 150%'><a href="Main Page Movie ABC.php" style="color:black">Sign Out</a></button>
            </div>
            <div class="column2" style="background-color:lightsalmon">
                <div class="main">
                    <div id="Home" class="tabcontent">
                        <h1>Welcome to the Profile Page</h1>
                        <p>Navigation of the link is on the left side</p>
                    </div>
                    <div id="Profile" class="tabcontent">
                        <h1>Profile Page</h1>        
                        <form method="post" action="profileupdate.php">
                        <h3>Update Profile</h3>
                        <table>
                        <tr>
                        <td><label>Username</label></td>
                        <td><input type="text" name="UserName" /></td>
                        </tr>
                        <tr>
                        <td><label>Password</label></td>
                        <td><input type="text" name="password" /></td>
                        </tr>
                        <tr>
                        <td><label>Mobile Number</label></td>
                        <td><input type="text" name="PhNumber" /><br></td>
                        </tr>
                        <tr>
                        <td><label>Contact Number</label></td>
                        <td><input type="text" name="CNumber" /><br></td>
                        </tr>
                        <tr>
                            <td><label>Newsletter</label></td>
                            <td><input type="radio" name="news" value="Yes"/>Yes<input type="radio" name="news" value="No"/>No</td>   
                        </tr>
                        <td><input type="submit" name="Update" value="Update" style="width: 120px; padding: 20px; cursor: pointer;   
                        box-shadow: 6px 6px 5px;  -webkit-box-shadow: 6px 6px 5px #999; -moz-box-shadow: 6px 6px 5px #999; font-weight: bold; 
                        background: #ffff00; color: #000; border-radius: 10px; border: 1px solid #999; font-size: 150%"/></td>
                        </table>      
                            
                        </form>
                    </div>
                    <div id="Ticket" class="tabcontent">        
                        <h1>Ticket Purchase</h1>
                        <p>Purchase content of tickets.</p>
                        <form method="post" action="ReviewTicketMember.php">
                        <table>
                        <tr>
                            <td><label>User ID</label></td>
                            <td><input type="text" name="User_ID" value="<?php echo $_SESSION['username']; ?>" readonly/></td>
                        </tr>    
                        <tr>
                        <td><label>List of Available Movie</label></td>
                        <td><select name="movie">
                        <?php
                        $servername  = "localhost";
                        $username    = "root";
                        $password    = "";
                        $database    = "mvie";
			
                        $connection     = mysqli_connect($servername,$username,$password);			              	 		  
                        mysqli_select_db($connection,$database);
             
                        $search = "Select * From moviedatabase Where Stats='Available' ORDER BY Movie_Name";
                                
                        $result= mysqli_query($connection, $search);
                                
                        while($row1= mysqli_fetch_array($result)):;?>
                        <option><?php echo $row1[1]; ?></option>
                        <?php endwhile?>

                        </select></td>                    
                        <td><label>Date:</label></td>
                        <td><input type="Date" name="date"/></td>
                        </table>
                        <label>Quantity</label>
                        <input type="number" name="quantity" size="6"/><br>
                        <label>Time:</label>
                        <table>
                        <td><input type="radio" name="time" value="12:30 AM"/>11:30 AM</td>
                        <td><input type="radio" name="time" value="3:45 PM"/>2:45 PM</td>
                        <td><input type="radio" name="time" value="8:00 PM"/>5:00 PM</td>
                        <td><input type="radio" name="time" value="10:45 PM"/>8:45 PM</td>
                        <td><input type="radio" name="time" value="10:45 PM"/>11:45 PM</td>
                        </table><br>
                        <label>Price Ticket:$<input name="price" readonly  value="5.50" size="3"/>* Registered Member will get discount price only</label><br><br>
                        <input type="submit" name="Buy" value="Buy" style="width: 120px; padding: 20px; cursor: pointer;   
                        box-shadow: 6px 6px 5px;  -webkit-box-shadow: 6px 6px 5px #999; -moz-box-shadow: 6px 6px 5px #999; font-weight: bold; 
                        background: #ffff00; color: #000; border-radius: 10px; border: 1px solid #999; font-size: 150%"/>
                           
                            
                        </form>

                    </div>
                    <div id="Status" class="tabcontent">        
                        <center><h1>Status Purchase</h1></center>
                        <center><p>Status content of tickets purchased.</p></center>
                        <?php
                        $servername  = "localhost";
                        $username    = "root";
                        $password    = "";
                        $database    = "mvie";

                        $connection     = mysqli_connect($servername,$username,$password);			              	 		  
                                          mysqli_select_db($connection,$database);

                        $display = "Select * From purticketmember WHERE User_ID = '".$_SESSION['username']."'";
                        $table   = mysqli_query($connection,$display);

                        echo "<center><b><h2>Tickets</h2></b></center>";
                        echo "<center>";
                        echo "<table class='altrowstable' id='alternatecolor'>";
                        echo "<tr>";
                        echo "<th bgcolor='#CC66CC'>";
                        echo "User_ID";
                        echo "</th>";
                        echo "<th bgcolor='#CC66CC'>";
                        echo "MovieTitle";
                        echo "</th>";
                        echo "<th bgcolor='#CC66CC'>";
                        echo "Date";
                        echo "</th>";
                        echo "<th bgcolor='#CC66CC'>";
                        echo "Time";
                        echo "</th>";
                        echo "<th bgcolor='#CC66CC'>";
                        echo "Quantity";
                        echo "</th>";
                        echo "<th bgcolor='#CC66CC'>";
                        echo "Total";
                        echo "</th>";
                        echo "<th bgcolor='#CC66CC'>";
                        echo "Status";
                        echo "</th>";
                        echo "<tr>";
                        while($row1 = mysqli_fetch_array($table))
                        {
                            echo "<tr>";
                            echo "<td>".$row1["User_ID"]."</td>";
                            echo "<td>".$row1["MovieTitle"]."</td>";
                            echo "<td>".$row1["Date"]."</td>";
                            echo "<td>".$row1["Time"]."</td>";
                            echo "<td>".$row1["Quantity"]."</td>";
                            echo "<td>".$row1["Total"]."</td>";
                            echo "<td>".$row1["Status"]."</td>";
                        }
                        echo "</tr>";
                        echo "</table>";                        

                        ?>
                    </div>                   
                </div>
            </div>
    
<script>
function openMenu(Menu,elmnt,color) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }
    document.getElementById(Menu).style.display = "block";
    elmnt.style.backgroundColor = color;

}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
</body>
</html>
<?php
} else {
    echo 'Wrong Username or Password';    
}
?>
