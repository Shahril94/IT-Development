<html>
<head>
    <title>Link2</title>
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
<body bgcolor="#0055FF">
        <center><h2><b>Movie Information</b></h2></center>
        <center><img src="Now Showing/Ralph.jpg" alt="Avatar" class="image" width=257 height=350></center> 

        <button class="tablink" onclick="openMenu('Synopsis',this,'darkblue')" id="defaultOpen" >Movie Synopsis & Cast</button>
        <button class="tablink" onclick="openMenu('Tickets',this,'green')">Buy Ticket</button>        

        <div id="Synopsis" class="tabcontent"> 
            <h2>Synopsis</h2>
            <h3>Ralph</h3>
            Ralph Breaks the Internet: Wreck-It Ralph 2" leaves Litwak's video arcade behind, venturing into the uncharted, expansive and thrilling world of the internet-which 
            may or may not survive Ralph's wrecking. Video game bad guy Ralph (voice of John C. Reilly) and fellow misfit Vanellope von Schweetz (voice of Sarah Silverman) must 
            risk it all by traveling to the world wide web in search of a replacement part to save Vanellope's video game, Sugar Rush. In way over their heads, Ralph and 
            Vanellope rely on the citizens of the internet - the netizens - to help navigate their way, including a website entrepreneur named Yesss(voice of Taraji P. Henson), 
            who is the head algorithm and the heart and soul of trend-making site" BuzzzTube..
            
            <h3>Cast</h3>
            <ul>
                <li>John C. Reilly</li>
                <li>Sarah Silverman</li>    
                <li>Taraji P.Henson</li>    
                <li>Jack McBrayer</li>       
                <li>Jane Lynch</li>     
            </ul>
        </div>
        <div id="Tickets" class="tabcontent">
            <h2>Select Time & date</h2>
            <form method="POST" action="ReviewTicket.php">
                <input type="text" value="Ralph Breaks the Internet" size="30" readonly/><br><br>
                <table border="1">
                    <td><label>Name:</label></td>
                    <td><input type="text" size="10" name="name"/></td>
                    <td><label>Date:</label></td>
                    <td><input type="Date" name="date"/></td>
                </table><br>
                <label>Time:</label><br>
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
