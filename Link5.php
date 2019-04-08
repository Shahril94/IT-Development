<html>
<head>
    <title>Link5</title>
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
    <body bgcolor="#FF0049">
        <center><h2><b>Movie Information</b></h2></center>
        <center><img src="Now Showing/Nanoha_Detonation_Keyart_500.jpg" alt="Avatar" class="image" width=257 height=350></center>
        
        <button class="tablink" onclick="openMenu('Synopsis',this,'darkblue')" id="defaultOpen" >Movie Synopsis & Cast</button>
        <button class="tablink" onclick="openMenu('Tickets',this,'green')">Buy Ticket</button>
        
        <div id="Synopsis" class="tabcontent"> 
            <h2>Synopsis</h2>
            <h3>Magical Girl Lyrical Nanoha:Detonation</h3>
            The story begins in the planet Eltoria which is quietly dying because of devastation. The Florian family,consisting of a researcher couple and their two daughters, 
            Amitie and Kyrie, are still staying in the planet with the dream of revitalizing it. However, father Grants Florian collapses from his illness, then their dream 
            crumbles.Meanwhile, Kyrie decides to go in search of a way to save her father and to revive the planet in a "different world far away." Her older sister Amitie tries 
            to stop her,but Kyrie rejects her control and goes on a journey to the different world along with her childhood and best friend Iris. Their destination is Japan, 
            a small island country in the planet called "earth." Kirie and Iris, looking for the key to revive their planet, visit three girls who live in Japan. The three 
            girls are: Nanoha Takamachi.Fate Testarossa, and Hayate Yagami.Their encounter will be linked to the battle which would decide the fate of the two worlds and 
            two planets.
            <h3>Cast</h3>
            <ul>
                <li>Yukari Tamura</li>
                <li>Nana Mizuki</li>
                <li>Kana Ueda</li>
                <li>Yuri</li>
            </ul>
        </div>
        <div id="Tickets" class="tabcontent">
            <h2>Select Time & date</h2>
            <form method="POST" action="ReviewTicket.php">
                <input type="text" value="Magical Girl Lyrical Nanoha:Detonation" size="40" readonly/><br><br>
                 <table border="1">
                    <td><label>Name:</label></td>
                    <td><input type="text" name="name" size="10"/></td>
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
                <label>Price Ticket:$6.50</label><br><br>
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

