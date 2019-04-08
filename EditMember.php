<?php

/*

EDIT.PHP

Allows user to edit specific entry in database

*/



// creates the edit record form

// since this form is used multiple times in this file, I have made it a function that is easily reusable

function renderForm($id, $User_ID, $MovieTitle , $Date , $Time , $Quantity , $Total ,$Status ,$error)

{

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>

<head>

<title>Edit Record</title>

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

<input type="hidden" name="id" value="<?php echo $id; ?>"/>

<div>

<p><strong>ID:</strong> <?php echo $id; ?></p>

<p><strong>User_ID:</strong> <?php echo $User_ID; ?></p>

<p><strong>Movie Title:</strong> <?php echo $MovieTitle; ?></p>

<p><strong>Date:</strong> <?php echo $Date; ?></p>

<p><strong>Time:</strong> <?php echo $Time; ?></p>

<p><strong>Quantity:</strong> <?php echo $Quantity; ?></p>

<p><strong>Total:</strong> <?php echo $Total; ?></p>

<strong>Status</strong> <input type="radio" name="Status" value="Approved"/>Approved<input type="radio" name="Status" value="Not Approved"/>Not Approved<br/>

<p>* Required</p>

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

$User_ID = $_POST['User_ID'];

$MovieTitle = $_POST['MovieTitle'];

$Date = $_POST['Date'];

$Time = $_POST['Time'];

$Quantity = $_POST['Quantity'];

$Total = $_POST['Total'];

/*$firstname = mysql_real_escape_string(htmlspecialchars($_POST['firstname']));

$lastname = mysql_real_escape_string(htmlspecialchars($_POST['lastname']));*/

$Status = mysql_real_escape_string(htmlspecialchars($_POST['Status']));


// check that Status fields are both filled in

if ($Status =='')

{

// generate error message

$error = 'ERROR: Please fill in all required fields!';


//error, display form

renderForm($id, $User_ID, $MovieTitle , $Date , $Time , $Quantity , $Total ,$Status ,$error);

}

else

{

// save the data to the database

mysql_query("UPDATE purticketmember SET Status = '$Status' WHERE id='$id'")

or die(mysql_error());

// once saved, redirect back to the view page

header("Location: side_mem.php");

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

$result = mysql_query("SELECT * FROM purticketmember WHERE id=$id")

or die(mysql_error());

$row = mysql_fetch_array($result);

// check that the 'id' matches up with a row in the databse

if($row)

{

// get data from db
    
$User_ID=$row['User_ID'];    
    
$MovieTitle = $row['MovieTitle'];

$Date = $row['Date'];

$Time = $row['Time'];

$Quantity = $row['Quantity'];

$Total = $row['Total'];

$Status = $row['Status'];

/*$firstname = $row['firstname'];

$lastname = $row['lastname'];

$email = $row['email'];*/


// show form

renderForm($id, $User_ID, $MovieTitle, $Date ,$Time,$Quantity,$Total,$Status,'');

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