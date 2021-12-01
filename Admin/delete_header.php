<?php
//including the database connection file
include("config.php");

//getting uid of the data from url
$hid_Header = $_GET['hid'];
//deleting the row from table
$result = mysqli_query($conn,"CALL deleteHeader('$hid_Header')");

// $result = mysqli_query($conn,"DELETE FROM header WHERE hid=$hid");

//redirecting to the display page (index.php in our case)
header("Location:home.php");
?>