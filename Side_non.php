<html>
    <head><title>Non</title>
        
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
    <body bgcolor='#CCFF33'>
                        <center><h1>Non-Member Tickets</h1></center>
                        <center><p>Where Non-Members Purchase Ticket</p></center>
                       <?php
                        $servername  = "localhost";
                        $username    = "root";
                        $password    = "";
                        $database    = "mvie";
			
                        $connection     = mysqli_connect($servername,$username,$password);			              	 		  
                        mysqli_select_db($connection,$database);
             
                        $display = "Select * From purticket WHERE Status='Not-Complete' ORDER By Name";
                        $table   = mysqli_query($connection,$display);
                        
                        echo "<center>";
                        echo "<table class='altrowstable' id='alternatecolor'>";
                        echo "<tr>";
                        echo "<th bgcolor='#FA8072'>";
                        echo "ID";
                        echo "</th>";                        
                        echo "<th bgcolor='#FA8072'>";
                        echo "Name";
                        echo "</th>";
                        echo "<th bgcolor='#FA8072'>";
                        echo "Date";
                        echo "</th>";
                        echo "<th bgcolor='#FA8072'>";
                        echo "Time";
                        echo "</th>";
                        echo "<th bgcolor='#FA8072'>";
                        echo "Quantity";
                        echo "</th>";
                        echo "<th bgcolor='#FA8072'>";
                        echo "Price";
                        echo "</th>";
                        echo "<th bgcolor='#FA8072'>";
                        echo "Stats";
                        echo "</th>";
                        echo "<th bgcolor='#FA8072'>";
                        echo "Action";
                        echo "</th>";                         
                        echo "</tr>";

                        echo "<tr>";
                        while($row1 = mysqli_fetch_array($table))
                        {
                            echo "<tr>";
                            echo "<td>".$row1["id"]."</td>";
                            echo "<td>".$row1["Name"]."</td>";
                            echo "<td>".$row1["Date"]."</td>";
                            echo "<td>".$row1["Time"]."</td>";
                            echo "<td>".$row1["Quantity"]."</td>";
                            echo "<td>".$row1["Total"]."</td>";
                            echo "<td>".$row1["Status"]."</td>";
                            echo '<td><button style ="width: 120px; padding: 20px; cursor: pointer;   
                                box-shadow: 6px 6px 5px;  -webkit-box-shadow: 6px 6px 5px #999; -moz-box-shadow: 6px 6px 5px #999; font-weight: bold; 
                                background: #ffff00; color: #000; border-radius: 10px; border: 1px solid #999; font-size: 150%"><a href="EditNon.php?id='.$row1["id"].'";>Edit</a></button></td>';
                        }
                        echo "</tr>";
                        echo "</table>";                        

                        ?>             
    </body>
</html>