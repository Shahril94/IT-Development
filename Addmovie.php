<?php
include 'connection.php';
if(!$conn)
{
    die('Could not connect:'.mysqli_error());
}

    if(isset($_POST["Add"]))
    {
        
        $id = $_POST['ID'];
        $movie = $_POST['movie'];
        $genre = $_POST['Genre']; 
        
        $sql = "INSERT INTO moviedatabase(ID,Movie_Name,Genre) VALUES ('$id','$movie','$genre')";
        
        $result = mysqli_query($conn, $sql); 
        
        //echo $result;
        if($result)
        {
            echo 'Movie Added';
        }
        else
        {
            echo 'Fail to add movie';
        }
    } 
    //header("refresh:1; url=Avengers.php");

?>

