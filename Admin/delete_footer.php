<?php
//including the database connection file
include("config.php");

//getting uid of the data from url
$fid_Footer = $_GET['fid'];

//deleting the row from table
$result = mysqli_query($conn, "CALL deleteFooter('$fid_Footer')");

//redirecting to the display page (index.php in our case)		
?>
<script>
    alert('Footer-i juaj u shtua me sukses!');
    window.location.href = 'home.php';
</script>
<?php

?>