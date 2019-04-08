<html>
<head>
    <title>Avengers</title>
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
input[type=button]{
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    border: none;
    cursor: pointer;
}   
</style>
</head>
    <body bgcolor="#FF2D00">
    <center><h2><b>Movie Information</b></h2></center>
    <center><img src="Now Showing/MovieAvengers.jpg" alt="Avatar" class="image" width=257 height=350></center>
    
        <button class="tablink" onclick="openMenu('Synopsis',this,'darkblue')" id="defaultOpen" >Movie Synopsis & Cast</button>
        <button class="tablink" onclick="openMenu('Tickets',this,'green')">Buy Ticket</button>
        
        <div id="Synopsis" class="tabcontent"> 
            <h2>Synopsis</h2>
            <h3>Marvel Avengers:Infinity Wars</h3>
            An unprecedented cinematic journey ten years in the making and spanning the entire Marvel Cinematic Universe, Marvel Studios'
           “Avengers: Infinity War” brings to the screen the ultimate, deadliest showdown of all time. 
            The Avengers and their Super Hero allies must be willing to sacrifice all in an attempt to defeat the powerful 
            Thanos before his blitz of devastation and ruin puts an end to the universe.<br> 
            
            <h3>Cast</h3>
            <ul>
                <li>Robert Downey Jr</li>
                <li>Chris Pratt</li>
                <li>Benedict Cumberbatch</li>
                <li>Scarlett Johansson</li>
                <li>Chris Hemsworth</li>
                <li>Tom Holland</li>
                <li>Chris Evans</li>
                <li>Elizabeth Olsen</li>
                <li>Sebastian Stan</li>
                <li>Tom Hiddleton</li>
                <li>Dave Bautista</li>                
            </ul>
        </div>
        <div id="Tickets" class="tabcontent">
            <h2>Select Time & date</h2>
            <form method="POST" action="ReviewTicketEmp.php">
                    <label>Name:</label>
                    <input type="text" size="10" name="name"/>
                <label>Price Ticket:</label><input name="price" readonly  value="6.50" size="3"/><br><br>
                Number of Tickets:<input type="number" name="quantity" min="1" max="5" size="1"/><br>
                * Max Buying Ticket(5)<br><br>
                <input type="submit" value="Confirm" />
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

