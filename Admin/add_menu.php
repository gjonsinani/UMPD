<?php
//including the database connection file
include_once("config.php");

if (isset($_POST['add_menu'])) {
    $emri = $_POST['emri'];
    $linku = $_POST['linku'];

    // checking empty fields
    if (empty($emri) || empty($linku)) {
        if (empty($emri)) {
            echo "<font color='red'>Emri field is empty.</font><br/>";
        }
        if (empty($linku)) {
            echo "<font color='red'>Linku field is empty.</font><br/>";
        }
        //link to the previous password
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else {
        // if all the fields are filled (not empty) 
        //insert data to database	
        $result = mysqli_query($conn, " CALL insertMeny('$emri','$linku')");
        // $result = mysqli_query($conn, "INSERT INTO menyte(emri,linku) VALUES('$emri','$linku')");
        ?>
        <script>
            alert('Menyja juaj u shtua me sukses!');
            window.location.href = 'home.php';
        </script>
        <?php

    }
}
?>