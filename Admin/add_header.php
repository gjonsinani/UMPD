<?php
include 'header.php';
include_once("config.php");

//including the database connection file

if (isset($_POST['add_header'])) {
    $titulli = $_POST['titulli'];
    $imgData = addslashes(file_get_contents($_FILES['userfile']['tmp_name']));
    $name = $_FILES['userfile']['name'];

    $maxsize = 10000000; //set to approx 10 MB
    // checking empty fields
    if (empty($titulli)) {
        if (empty($titulli)) {
            echo "<font color='red'>Titulli field is empty.</font><br/>";
        }
        //link to the previous password
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else {
        // if all the fields are filled (not empty) 
        //insert data to database	
        $result = mysqli_query($conn, " CALL insertHeader('$titulli','$imgData','$name')");

        // $result = mysqli_query($conn, "INSERT INTO header (titulli,image,name) VALUES('$titulli','$imgData','$name')");



?>
        <script>
            alert('Header-i juaj u shtua me sukses!');
            window.location.href = 'home.php';
        </script>

<?php
    }
}
?>

<?php include 'footer.php'; ?>