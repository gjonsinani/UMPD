<?php
//including the database connection file
include("config.php");

//getting uid of the data from url
$uid_Users = $_GET['uid'];

//deleting the row from table
$result = mysqli_query($conn,"CALL deleteUsers('$uid_Users')");
// $result = mysqli_query($conn,"DELETE FROM users WHERE uid=$uid");

?>
<script>
    alert('Përdoruesi është fshirë me sukses!');
    window.location.href = 'home.php';
</script>
<?php

?>