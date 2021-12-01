<?php
//including the database connection file
include("config.php");

//getting uid of the data from url
$idm_Meny = $_GET['idm'];

//deleting the row from table
$result = mysqli_query($conn,"CALL deleteMeny('$idm_Meny')");

// $result = mysqli_query($conn,"DELETE FROM menyte WHERE idm =$idm");

?>
<script>
    alert('Menyja është fshirë me sukses!');
    window.location.href = 'home.php';
</script>
<?php

?>