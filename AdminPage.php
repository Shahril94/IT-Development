<html>
<head>
<title>Admin Page</title>
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
  background-color: springgreen;
}

.column {
    float: left;
    width: 10%;
    padding: 10px;
    height: 90%;

    
}

.column2 {
    float: right;
    width: 90%;
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

div.container 
{
    width: 100%;
    border: 1px solid gray;
}

header, footer 
{
    padding: 1em;
    color: white;
    background-color: black;
    clear: left;
    text-align: center;
}
nav {
    float: left;
    max-width: 160px;
    margin: 0;
    padding: 1em;
}

nav ol {
    list-style-type: none;
    padding: 0;
}
   
nav ol a {
    text-decoration: none;
}

article {
    margin-left: 170px;
    border-left: 10px solid gray;
    padding: 1em;
    overflow: hidden;
}

</style>
 </head>    
    <body>
        <div class="toppane">
            <center><h2><b>Welcome To the Admin Page</b></h2></center> 
        </div>
        <div class="column" style="background-color:lightblue">
                <b><font size= "4">Navigation Menu</font></b>
                <button style='width: 120px; padding: 20px; cursor: pointer;   
                box-shadow: 6px 6px 5px; -webkit-box-shadow: 6px 6px 5px #999; -moz-box-shadow: 6px 6px 5px #999; font-weight: bold; 
                background: #ffff00; color: #000; border-radius: 10px; border: 1px solid #999; font-size: 100%' onclick="openMenu('Home',this,'#ffff00')" id="defaultOpen" >Home</button>
                <button style='width: 120px; padding: 20px; cursor: pointer;   
                box-shadow: 6px 6px 5px; -webkit-box-shadow: 6px 6px 5px #999; -moz-box-shadow: 6px 6px 5px #999; font-weight: bold; 
                background: #ffff00; color: #000; border-radius: 10px; border: 1px solid #999; font-size: 100%' onclick="openMenu('AddMovie',this,'#ffff00')">Add Movie</button>
                <button style='width: 120px; padding: 20px; cursor: pointer;   
                box-shadow: 6px 6px 5px; -webkit-box-shadow: 6px 6px 5px #999; -moz-box-shadow: 6px 6px 5px #999; font-weight: bold; 
                background: #ffff00; color: #000; border-radius: 10px; border: 1px solid #999; font-size: 100%' onclick="openMenu('MovieList',this,'#ffff00')">Movie List</button>
                <button style='width: 120px; padding: 20px; cursor: pointer;   
                box-shadow: 6px 6px 5px; -webkit-box-shadow: 6px 6px 5px #999; -moz-box-shadow: 6px 6px 5px #999; font-weight: bold; 
                background: #ffff00; color: #000; border-radius: 10px; border: 1px solid #999; font-size: 100%' onclick="openMenu('User-profile',this,'#ffff00')">User</button>                
                <button style='width: 120px; padding: 20px; cursor: pointer;   
                box-shadow: 6px 6px 5px;  -webkit-box-shadow: 6px 6px 5px #999; -moz-box-shadow: 6px 6px 5px #999; font-weight: bold; 
                background: #ffff00; color: #000; border-radius: 10px; border: 1px solid #999; font-size: 100%'onclick="openMenu('Non-Member',this,'#ffff00')">Non-Member</button>
                <button style='width: 120px; padding: 20px; cursor: pointer;   
                box-shadow: 6px 6px 5px;  -webkit-box-shadow: 6px 6px 5px #999; -moz-box-shadow: 6px 6px 5px #999; font-weight: bold; 
                background: #ffff00; color: #000; border-radius: 10px; border: 1px solid #999; font-size: 100%'onclick="openMenu('Member',this,'#ffff00')">Member</button>                
                <button style='width: 120px; padding: 20px; cursor: pointer;   
                box-shadow: 6px 6px 5px;  -webkit-box-shadow: 6px 6px 5px #999; -moz-box-shadow: 6px 6px 5px #999; font-weight: bold; 
                background: #ffff00; color: #000; border-radius: 10px; border: 1px solid #999; font-size: 100%'><a href="Logout.php" style="color:black">Sign Out</a></button>
        </div>     
        <div class="column2" style="background-color:lime">
                  <div class="main">
                    <div id="Home" class="tabcontent">
                        <h1>Welcome to the Admin Page</h1>
                        <p>Navigation of the link is on the left side</p>
                    </div>
                    <div id="AddMovie" class="tabcontent">
                        <h2>Add Movie</h2>
                        <form method="POST" action="Addmovie.php">
                            <table>
                                <tr>
                                    <td><label>ID Movie</label></td>
                                    <td><input type="text" name="ID" /></td>
                                </tr>                                
                                <tr>
                                    <td><label>Movie</label></td>
                                    <td><input type="text" name="movie" /></td>
                                </tr>
                                <tr>
                                    <td><label>Genre</label></td>
                                    <td><input type="text" name="Genre" /></td>
                                </tr>
                                <td><input type="submit" name="Add" value="Add" style="width: 120px; padding: 20px; cursor: pointer;   
                                box-shadow: 6px 6px 5px;  -webkit-box-shadow: 6px 6px 5px #999; -moz-box-shadow: 6px 6px 5px #999; font-weight: bold; 
                                background: #ffff00; color: #000; border-radius: 10px; border: 1px solid #999; font-size: 150%"/></td>
                            </table>
                        </form>       
                    </div>                     
                    <div id="MovieList" class="tabcontent">
                    <center><h2>Movie List</h2></center>    
                    <?php
                        $servername  = "localhost";
                        $username    = "root";
                        $password    = "";
                        $database    = "mvie";
			
                        $connection     = mysqli_connect($servername,$username,$password);			              	 		  
                        mysqli_select_db($connection,$database);
             
                        $display = "Select * From moviedatabase ORDER By ID";
                        $table   = mysqli_query($connection,$display);
                        
                        echo "<center>";
                        echo "<table>";
                        echo "<tr>";
                        echo "<th bgcolor='#CC66CC'>";
                        echo "ID";
                        echo "</th>";
                        echo "<th bgcolor='#CC66CC'>";
                        echo "Movie Name";
                        echo "</th>";
                        echo "<th bgcolor='#CC66CC'>";
                        echo "Genre";
                        echo "</th>";
                        echo "<th bgcolor='#CC66CC'>";
                        echo "Stats";
                        echo "</th>";                        
                        echo "</tr>";

                        echo "<tr> ";
                        while($row1 = mysqli_fetch_array($table))
                        {
                            echo "<tr>";
                            echo "<td bgcolor='#a9c6c9'>".$row1["ID"]."</td>";
                            echo "<td bgcolor='#a9c6c9'>".$row1["Movie_Name"]."</td>";
                            echo "<td bgcolor='#a9c6c9'>".$row1["Genre"]."</td>";
                            echo "<td bgcolor='#a9c6c9'>".$row1["Stats"]."</td>";
                        }
                        echo "</tr>";
                        echo "</table>";                        

                        ?>                             
                    </div>
                   <div id="User-profile" class="tabcontent">
                        <center><h1>User-profile</h1></center>
               <?php
                            $servername  = "localhost";
                            $username    = "root";
                            $password    = "";
                            $database    = "mvie";
			
                            $connection     = mysqli_connect($servername,$username,$password);			              	 		  
                            mysqli_select_db($connection,$database);
             
                            $display = "Select * From profile ORDER By Username";
                            $table   = mysqli_query($connection,$display);

                            echo "<center><b><h2>Table Profile</h2></b></center>";
                            echo "<center>";
                            echo "<table class='altrowstable' id='alternatecolor'>";
                            echo "<tr>";
                            echo "<th bgcolor='#CC66CC'>";
                            echo "Email";
                            echo "</th>";
                            echo "<th bgcolor='#CC66CC'>";
                            echo "Name";
                            echo "</th>";
                            echo "<th bgcolor='#CC66CC'>";
                            echo "Username";
                            echo "</th>";
                            echo "<th bgcolor='#CC66CC'>";
                            echo "Password";
                            echo "</th>";
                            echo "<th bgcolor='#CC66CC'>";
                            echo "Phone Number";
                            echo "</th>";
                            echo "<th bgcolor='#CC66CC'>";
                            echo "Contact Number";
                            echo "</th>";
                            echo "<th bgcolor='#CC66CC'>";
                            echo "Newsletter";
                            echo "</th>";
                            echo "<th bgcolor='#CC66CC'>";
                            echo "Action";
                            echo "</th>";
                            echo "</tr>";
                            echo "<tr>";
                            while($row1 = mysqli_fetch_array($table))
                            {
                                echo "<tr>";
                                echo "<td>".$row1["Email"]."</td>";
                                echo "<td>".$row1["Name"]."</td>";
                                echo "<td>".$row1["Username"]."</td>";
                                echo "<td>".$row1["Password"]."</td>";
                                echo "<td>".$row1["M_phone"]."</td>";
                                echo "<td>".$row1["C_numb"]."</td>";
                                echo "<td>".$row1["Newsletter"]."</td>";
                                echo "<td><button style ='width:120px; padding:20px; cursor:pointer; box-shadow:6px 6px 5px; -webkit-box-shadow:6px 6px 5px #999; -moz-box-shadow:6px 6px 5px #999;font-weight:bold;background:#FFFF00;color:#000; font-size:10px'>Delete</button></td>";
                            }
                            echo "</tr>";
                            echo "</table>";                        
                        ?>
                    </div>                       
                    <div id="Non-Member" class="tabcontent">        
                        <center><h1>Non-Member Tickets</h1></center>
                        <center><p>Where Non-Members Purchase Ticket</p></center>
                        <?php
                        $servername  = "localhost";
                        $username    = "root";
                        $password    = "";
                        $database    = "mvie";
			
                        $connection     = mysqli_connect($servername,$username,$password);			              	 		  
                        mysqli_select_db($connection,$database);
             
                        $display = "Select * From purticket ORDER By Name";
                        $table   = mysqli_query($connection,$display);
                        
                        echo "<center>";
                        echo "<table class='altrowstable' id='alternatecolor'>";
                        echo "<tr>";
                        echo "<th bgcolor='red'>";
                        echo "Name";
                        echo "</th>";
                        echo "<th bgcolor='red'>";
                        echo "Date";
                        echo "</th>";
                        echo "<th bgcolor='red'>";
                        echo "Time";
                        echo "</th>";
                        echo "<th bgcolor='red'>";
                        echo "Quantity";
                        echo "</th>";
                        echo "<th bgcolor='red'>";
                        echo "Price";
                        echo "</th>";
                        echo "<th bgcolor='red'>";
                        echo "Stats";
                        echo "</th>";
                        echo "<th bgcolor='red'>";
                        echo "Action";
                        echo "</th>";                         
                        echo "</tr>";

                        echo "<tr>";
                        while($row1 = mysqli_fetch_array($table))
                        {
                            echo "<tr>";
                            echo "<td bgcolor=#a9c6c9>".$row1["Name"]."</td>";
                            echo "<td bgcolor=#a9c6c9>".$row1["Date"]."</td>";
                            echo "<td bgcolor=#a9c6c9>".$row1["Time"]."</td>";
                            echo "<td bgcolor=#a9c6c9>".$row1["Quantity"]."</td>";
                            echo "<td bgcolor=#a9c6c9>".$row1["Price"]."</td>";
                            echo "<td bgcolor=#a9c6c9>".$row1["Status"]."</td>";
                            echo "<td bgcolor=#a9c6c9><button style ='width:120px; padding:20px; cursor:pointer; box-shadow:6px 6px 5px; -webkit-box-shadow:6px 6px 5px #999; -moz-box-shadow:6px 6px 5px #999;font-weight:bold;background:#FFFF00;color:#000; font-size:10px'>Edit</button>"
                                 . "<button style ='width:120px; padding:20px; cursor:pointer; box-shadow:6px 6px 5px; -webkit-box-shadow:6px 6px 5px #999; -moz-box-shadow:6px 6px 5px #999;font-weight:bold;background:#FFFF00;color:#000; font-size:10px'>Delete</button></td>";
                        }
                        echo "</tr>";
                        echo "</table>";                        

                        ?>
                    </div>
                    <div id="Member" class="tabcontent">
                    <center><h1>Members Ticket</h1></center>    
                    <?php
                        $servername  = "localhost";
                        $username    = "root";
                        $password    = "";
                        $database    = "mvie";
			
                        $connection     = mysqli_connect($servername,$username,$password);			              	 		  
                        mysqli_select_db($connection,$database);
             
                        $display = "Select * From purticketmember ORDER BY User_ID";
                        $table   = mysqli_query($connection,$display);                    
 
                        echo "<center>";
                        echo "<table class='altrowstable' id='alternatecolor'>";
                        echo "<tr>";
                        echo "<th bgcolor='#7AD7FO'>";
                        echo "User_ID";
                        echo "</th>";
                        echo "<th bgcolor='#7AD7FO'>";
                        echo "MovieTitle";
                        echo "</th>";
                        echo "<th bgcolor='#7AD7FO'>";
                        echo "Date";
                        echo "</th>";
                        echo "<th bgcolor='#7AD7FO'>";
                        echo "Time";
                        echo "</th>";
                        echo "<th bgcolor='#7AD7FO'>";
                        echo "Quantity";
                        echo "</th>";
                        echo "<th bgcolor='#7AD7FO'>";
                        echo "Total";
                        echo "</th>";
                        echo "<th bgcolor='#7AD7FO'>";
                        echo "Status";
                        echo "</th>";
                        echo "<th bgcolor='#7AD7FO'>";
                        echo "Action";
                        echo "</th>";                        
                        echo "</tr>";

                        echo "<tr>";
                        while($row1 = mysqli_fetch_array($table))
                        {
                            echo "<tr>";
                            echo "<td bgcolor=#a9c6c9>".$row1["User_ID"]."</td>";
                            echo "<td bgcolor=#a9c6c9>".$row1["MovieTitle"]."</td>";
                            echo "<td bgcolor=#a9c6c9>".$row1["Date"]."</td>";
                            echo "<td bgcolor=#a9c6c9>".$row1["Time"]."</td>";
                            echo "<td bgcolor=#a9c6c9>".$row1["Quantity"]."</td>";
                            echo "<td bgcolor=#a9c6c9>".$row1["Total"]."</td>";
                            echo "<td bgcolor=#a9c6c9>".$row1["Status"]."</td>";
                            echo "<td bgcolor=#a9c6c9><button style ='width:120px; padding:20px; cursor:pointer; box-shadow:6px 6px 5px; -webkit-box-shadow:6px 6px 5px #999; -moz-box-shadow:6px 6px 5px #999;font-weight:bold;background:#FFFF00;color:#000; font-size:10px'>Edit</button>"
                                 . "<button style ='width:120px; padding:20px; cursor:pointer; box-shadow:6px 6px 5px; -webkit-box-shadow:6px 6px 5px #999; -moz-box-shadow:6px 6px 5px #999;font-weight:bold;background:#FFFF00;color:#000; font-size:10px'>Delete</button></td>";                            
                        }
                        echo "</tr>";
                        echo "</table>";                        

                        ?>
          
                    </div>  
                </div>

               </div>
 
</body> 
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
</html>
