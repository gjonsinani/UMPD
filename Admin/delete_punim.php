<?php
//including the database connection file
include("config.php");

//getting uid of the data from url
$pid_Punim = $_GET['pid'];

//deleting the row from table
$result = mysqli_query($conn,"CALL deletePunim('$pid_Punim')");

// $result = mysqli_query($conn, "DELETE FROM punimet WHERE pid=$pid");

//redirecting to the display page (index.php in our case)		
?>
<script>
    alert('Punimi është fshirë me sukses!');
    window.location.href = 'home.php';
</script>
<?php

?>