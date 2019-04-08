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
                        
                        if(isset($_POST["Update"]))
                        {
        
                            $name = $_POST['UserName'];
                            $password = $_POST['password'];
                            $phone = $_POST['PhNumber'];
                            $contact = $_POST['CNumber']; 
                            $news   =$_POST['news'];
        
                            $sql = "UPDATE profile SET Username = '$name' , Password = '$password',  M_phone ='$phone', C_numb ='$contact', newsletter = '$news' WHERE Email ='Shahril08imran@gmail.com'"; 
        
                            $result = mysqli_query($connection, $sql); 
        
                            //echo $result;
                            if($result)
                            {
                                echo '<script type="text/javascript">
                                        window.onload = function () { alert("Updated"); }
                                        </script>';
                            }
                            else
                            {
                                echo '<script type="text/javascript">
                                     window.onload = function () { alert("Fail To Update"); }
                                     </script>';
                            }
                        }header("refresh:1; url=ProfilePage.php") 
             
                        
                        
?>