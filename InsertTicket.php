<?php
                      $servername  = "localhost";
                        $username    = "root";
                        $password    = "";
                        $database    = "mvie";
			
                        $connection     = mysqli_connect($servername,$username,$password);			              	 		  
                        mysqli_select_db($connection,$database);
if(!$connection)
{
    die('Could not connect:'.mysqli_error());
}

    if(isset($_POST["update"]))
    {
        
        $name = $_POST['name'];
        $movie = $_POST['movie'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $num = $_POST['quantity'];
        $price = $_POST['price']; 
        
        $inserted = "INSERT INTO purticket(Name,MovieTitle,Date,Time,Quantity,Price,Status) VALUES ('$name','$movie','$date','$time','$num','$price','Not-Complete')";
        
        $result = mysqli_query($connection, $inserted); 
        
        //echo $result;
        if($result)
        {
            echo '<script type="text/javascript">
                  window.onload = function () { alert("Purchase Complete"); }
                  </script>';
        }
        else
        {
            echo '<script type="text/javascript">
                  window.onload = function () { alert("Purchase Fail"); }
                  </script>';
        }
    } 
    header("refresh:1; url=Main Page Movie ABC.php");

?>

