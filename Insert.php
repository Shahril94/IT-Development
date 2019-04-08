<?php
$servername = "localhost";
$username = "root";
$password ="";
$database = "mvie";

$conn = mysqli_connect($servername,$username,$password);
$db   = mysqli_select_db($conn,$database);

if(!$conn)
{
    die('Could not connect:'.mysqli_error());
}
else if(!$db)
{
    die('Could not connect:'.mysqli_error());
}

    if(isset($_POST["Submit"])) 
    {
        $email    = $_POST['email'];
        $name     = $_POST['name'];
        $user     = $_POST['uname'];
        $pass     = $_POST['psw'];
        $phone    = $_POST['phone'];
        $contact  = $_POST['contact'];
        $news     = $_POST['news'];
        
        $sql = "INSERT INTO profile(Email,Name,Username,Password,M_phone,C_numb,Newsletter) VALUES ('$email','$name','$user','$pass','$phone','$contact','$news')";

        $result = mysqli_query($conn,$sql);

        if($result) {
            echo '<script type="text/javascript">
                  window.onload = function () { alert("Data Inserted"); }
                  </script>';
        }
        else {
              echo '<script type="text/javascript">
                  window.onload = function () { alert("Fail"); }
                  </script>';
        }
    }   header("refresh:1; url=Main Page Movie ABC.php");
    
?>


