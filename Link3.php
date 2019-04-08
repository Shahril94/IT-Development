<html>
<head>
    <title>Link3</title>
<style>
ul#horizontal-list {
	min-width: 696px;
	list-style: none;
	padding-top: 20px;
	}

ul#horizontal-list ul {
        display: inline;
	}
    
/* - tab - function 
--------------------------------- */

.tablink {
    background-color: #5EFF33;
    color: white;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    font-size: 17px;
    width: 50%;
}

.tablink:hover {
    background-color: #777;
}

/* Style the tab content */
.tabcontent {
    color: white;
    display: none;
    /*padding: 5px;
    text-align: center;*/
}

input[type=submit]{
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    border: none;
    cursor: pointer;
      
}
</style>
</head>
<body bgcolor="#FF00CD">
        <center><h2><b>Movie Information</b></h2></center>
        <center><img src="Now Showing/The_House_With_A_Clock_In_Its_Wall_KeyartV2_500.jpg" alt="Avatar" class="image" width=257 height=350></center>        

        <button class="tablink" onclick="openMenu('Synopsis',this,'darkblue')" id="defaultOpen" >Movie Synopsis & Cast</button>
        <button class="tablink" onclick="openMenu('Tickets',this,'green')">Buy Ticket</button>
        
        <div id="Synopsis" class="tabcontent">
            <h2>Synopsis</h2>
            <h3>The House With A Clock in its Walls</h3>
            The magical adventure tells the spine-tingling tale of 10-year-old Lewis (Owen Vaccaro) who goes to live with his uncle in a creaky old house with a mysterious 
            tick-tocking heart. But his new town's sleepy facade jolts to life with a secret world of warlocks and witches when Lewis accidentally awakens the dead.
            <h3>Cast</h3>
            <ul>
                <li>Jack Black</li>
                <li>Cate Blanchett</li>    
                <li>Owen Vaccaro</li>    
                <li>Renée Elise Goldsberry</li>    
                <li>Sunny Suljic</li>    
                <li>Kyle MacLachlan</li>     
            </ul>    
        </div>
        <div id="Tickets" class="tabcontent">
            <h2>Select Time & date</h2>
            <form method="POST" action="ReviewTicket.php">
                <input type="text" value="The House With A Clock in its Walls" size="35" readonly/><br><br>
                <table border="1">
                    <td><label>Name:</label></td>
                    <td><input type="text" size="10" name="name"/></td>
                    <td><label>Date:</label></td>
                    <td><input type="Date" name="date"/></td>
                </table><br>
                <label>Time:</label>
                <table>
                        <td><input type="radio" name="time" value="12:30 AM"/>11:30 AM</td>
                        <td><input type="radio" name="time" value="3:45 PM"/>2:45 PM</td>
                        <td><input type="radio" name="time" value="8:00 PM"/>5:00 PM</td>
                        <td><input type="radio" name="time" value="10:45 PM"/>8:45 PM</td>
                        <td><input type="radio" name="time" value="10:45 PM"/>11:45 PM</td>
                </table><br>
                <label>Price Ticket:$8.50</label><br><br>
                Number of Tickets:<input type="number" name="quantity" min="1" max="5" size="1"/><br>
                * Max Buying Ticket(5)<br><br>
                <input type="submit" value="Confirm"/>
            </form>
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
