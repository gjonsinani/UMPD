<?php
include 'header.php';
include_once("config.php");

//including the database connection file

if (isset($_POST['add_punim'])) {
    $emri = $_POST['emri'];
    $pershkrimi = $_POST['pershkrimi'];
    $cmimi = $_POST['cmimi'];
    $imgData = addslashes(file_get_contents($_FILES['userfile']['tmp_name']));
    $name = $_FILES['userfile']['name'];
    $maxsize = 10000000; //set to approx 10 MB
    // checking empty fields
    if (empty($emri) || empty($pershkrimi) || empty($cmimi)) {
        if (empty($emri)) {
            echo "<font color='red'>Titulli field is empty.</font><br/>";
        }
        if (empty($pershkrimi)) {
            echo "<font color='red'>Përshkrimi field is empty.</font><br/>";
        }
        if (empty($cmimi)) {
            echo "<font color='red'>Cmimi field is empty.</font><br/>";
        }

        //link to the previous password
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else {
        // if all the fields are filled (not empty) 
        //insert data to database	
        $result = mysqli_query($conn, " CALL insertPunim('$emri','$pershkrimi','$imgData','$name','$cmimi')");
        // $result = mysqli_query($conn, "INSERT INTO punimet (emri,pershkrimi,image,name,cmimi) VALUES('$emri','$pershkrimi','$imgData','$name','$cmimi')");



?>
        <script>
            alert('Punimi juaj i drurit u shtua me sukses!');
            window.location.href = 'home.php';
        </script>

<?php
    }
}
?>

<?php include 'footer.php'; ?>