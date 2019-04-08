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
                            $User_ID = $_POST['User_ID']; 
                            $movie = $_POST['movie'];
                            $date = $_POST['date'];
                            $time = $_POST['time'];
                            $num = $_POST['quantity'];
                            $total = $_POST['price']; 
        
                            $sql = "INSERT INTO purticketmember(User_ID,MovieTitle,Date,Time,Quantity,Total,Status) VALUES ('$User_ID','$movie','$date','$time','$num','$total','Not-Complete')";
        
                            $result = mysqli_query($connection, $sql); 
        
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
                        }header("refresh:1; url=ProfilePage.php")
             
                        
                        
?>


