<?php

/*

EDIT.PHP

Allows user to edit specific entry in database

*/



// creates the edit record form

// since this form is used multiple times in this file, I have made it a function that is easily reusable

function renderForm($ID, $Movie_Name, $Genre, $Stats , $error)

{

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>

<head>

<title>Edit Movie</title>

</head>

<body bgcolor='#CCFF33'>

<?php

// if there are any errors, display them

if ($error != '')

{

echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';

}

?>



<form action="" method="post">

<input type="hidden" name="id" value="<?php echo $ID; ?>"/>

<div>

<p><strong>ID:</strong> <?php echo $ID; ?></p>

<strong>Movie Name: </strong> <input type="text" name="MovieName" value="<?php echo $Movie_Name; ?>"/><br/>

<strong>Genre:</strong> <input type="text" name="Genre" value="<?php echo $Genre; ?>"/><br/>

<strong>Stats: </strong> <input type="text" name="Stats" value="<?php echo $Stats; ?>"/><br/>

<input type="submit" name="submit" value="Submit">

</div>

</form>

</body>

</html>

<?php

}

// connect to the database

include('connection.php');



// check if the form has been submitted. If it has, process the form and save it to the database

if (isset($_POST['submit']))

{

// confirm that the 'id' value is a valid integer before getting the form data

if (is_numeric($_POST['id']))

{

// get form data, making sure it is valid

$id = $_POST['id'];

$Movie_Name = mysql_real_escape_string(htmlspecialchars($_POST['MovieName']));

$Genre = mysql_real_escape_string(htmlspecialchars($_POST['Genre']));

$Stats = mysql_real_escape_string(htmlspecialchars($_POST['Stats']));


// check that firstname/lastname fields are both filled in

if ($Movie_Name == '' || $Genre == '' || $Stats=='')

{

// generate error message

$error = 'ERROR: Please fill in all required fields!';


//error, display form

renderForm($ID, $Movie_Name, $Genre, $Stats , $error);

}

else

{

// save the data to the database

mysql_query("UPDATE moviedatabase SET Movie_Name= $Movie_Name', Genre='$Genre', Stats='$Stats' WHERE id='$id'")

or die(mysql_error());

// once saved, redirect back to the view page

header("Location: view.php");

}

}

else

{

// if the 'id' isn't valid, display an error

echo 'Error!';

}

}

else

// if the form hasn't been submitted, get the data from the db and display the form

{



// get the 'id' value from the URL (if it exists), making sure that it is valid (checing that it is numeric/larger than 0)

if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)

{

// query db

$id = $_GET['id'];

$result = mysql_query("SELECT * FROM moviedatabase WHERE id=$id")

or die(mysql_error());

$row = mysql_fetch_array($result);

// check that the 'id' matches up with a row in the databse

if($row)

{

// get data from db

$Movie_Name = $row['Movie_Name'];

$Genre = $row['Genre'];

$Status = $row['Stats'];


// show form

renderForm($id, $Movie_Name, $Genre, $Status ,'');

}

else

// if no match, display result

{

echo "No results!";

}

}

else

// if the 'id' in the URL isn't valid, or if there is no 'id' value, display an error

{

echo 'Error!';

}

}

?>