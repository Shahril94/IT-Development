<html>
    <head>
        <meta charset="UTF-8">
        <title>Overview Purchase</title>
        <style>
            
            input[type=submit]{
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            border: none;
            cursor: pointer;
        }  
   
        </style>
    </head>
    <body bgcolor="Lightblue">
        <form method="POST" action="ticketinsert.php">
            <h3>Detail Confirmation Ticket</h3>
            <table>
                <tr>
                <td><label>UserID</label></td>
                <td><input type="text" name="User_ID" value="<?php echo $_POST['User_ID']; ?>" readonly/><br></td>    
                </tr>  
                <tr>
                <td><label>Movie Title</label></td>
                <td><input type="text" name="movie" value="<?php echo $_POST['movie']; ?>" readonly/><br></td>    
                </tr>    
                <tr>
                <td><label>Date:</label></td>
                <td><input type="text" name="date" value="<?php echo $_POST['date']; ?>" readonly /></td>
                </tr>
                <tr>
                <td><label>Time:</label></td>
                <td><input type="text" name="time"  value="<?php echo $_POST['time']; ?>" readonly /></td>
                </tr>
                <tr>
                
                <td><label>Tickets(Quantity)</label></td>
                <td><input type="text" name="quantity" value="<?php echo $_POST['quantity']; ?>" readonly/><br></td>    
                </tr>
                <tr><td><label>Total Price:</label></td>
                    <td><input type="text" name="price" readonly value="<?php 
                        
                            
                            $price = $_POST['price']; 
                            $number = $_POST['quantity'];
                        
                            $overall = $price * $number ;
                            
                            echo "$$overall";

                    ?>"></td></tr>
            </table>
            <table>
                <h3><label>Method Payment</label></h3>
                <tr>
                <td>Maybank</td>
                <td>Master Card</td>
                <td>Visa</td>
                <td>Paypal</td>
                <td>7-11</td>
                <td>COD</td>
                </tr>
                <td><a href="https://www.maybank2u.com.my"><img src="Maybank.png"  width="150" height="100"/></a></td>
                <td><a><img src="MasterCard.png" width="150" height="100"/></a></td>
                <td><a><img src="Visa.png" width="150" height="100" /></a></td>
                <td><a href="https://www.paypal.com/us/home"><img src="Paypal.png" width="150" height="100"/></a></td>
                <td><a><img src="7-Eleven-Logo.png" width="150" height="100"/></a></td>
                <td><a><img src="cash-on-delivery-cod.jpg" width="150" height="100"/></a></td>
                <tr>            
                </tr>
                
            </table>
            <input type="submit" name="update" value="Confirm Purchase"/>
        </form>
    </body>
</html>
