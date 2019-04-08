<head>
<!-- Javascript goes in the document HEAD -->
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
<style type="text/css">
table.altrowstable {
	font-family: verdana,arial,sans-serif;
	font-size:11px;
	color:#333333;
	border-width: 1px;
	border-color: #a9c6c9;
	border-collapse: collapse;
}
table.altrowstable th {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #a9c6c9;
}
table.altrowstable td {
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
<title>TestDisplayDatabaseOnHTML</title>
</head>
<body bgcolor="#CCFF33">
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
echo "Username";
echo "</th>";
echo "<th bgcolor='#CC66CC'>";
echo "Password";
echo "</th>";
echo "<th bgcolor='#CC66CC'>";
echo "Email";
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
echo "<tr>";
while($row1 = mysqli_fetch_array($table))
{
    echo "<tr>";
    echo "<td>".$row1["Username"]."</td>";
    echo "<td>".$row1["Password"]."</td>";
    echo "<td>".$row1["Email"]."</td>";
    echo "<td>".$row1["mobile_numb"]."</td>";
    echo "<td>".$row1["contact_numb"]."</td>";
    echo "<td>".$row1["newsletter"]."</td>";
}
echo "</tr>";
echo "</table>";

?>
</body>

