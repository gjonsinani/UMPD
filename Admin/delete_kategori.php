<?php
//including the database connection file
include("config.php");

//getting uid of the data from url
$kid = $_GET['kid'];

//deleting the row from table
$result = mysqli_query($conn, "DELETE FROM kategorite WHERE kid=$kid");

//redirecting to the display page (index.php in our case)		
?>
<script>
    alert('Kategoria është fshirë me sukses!');
    window.location.href = 'home.php';
</script>
<?php

?>