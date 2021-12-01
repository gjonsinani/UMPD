<?php
// including the database connection file

include("header.php");
include_once("config.php");

if (isset($_POST['update_header'])) {
    $hid = $_POST['hid'];
    $titulli = $_POST['titulli'];
    $imgData =addslashes (file_get_contents($_FILES['userfile']['tmp_name']));
	$name = $_FILES['userfile']['name'];
	$maxsize = 10000000; //set to approx 10 MB

{
        //updating the table
        $result = mysqli_query($conn, "CALL updateHeader('$hid','$titulli','$imgData','$name')");
        // $result = mysqli_query($conn, "UPDATE header SET titulli='$titulli',image='$imgData', name='$name' WHERE hid=$hid");

        //redirectig to the display message. In our case, it is home.php
        ?>
        <script>
            alert('Menyja juaj u modifikua me sukses!');
            window.location.href = 'home.php';
        </script>
        <?php
    }
}
?>

<?php
//getting id_footer from url

mysqli_next_result($conn);
$hid = $_GET['hid'];

//selecting data associated with this particular id_footer
$result = mysqli_query($conn, " CALL selectHeader('$hid')");
// $result = mysqli_query($conn, "SELECT * FROM header WHERE hid=$hid");

mysqli_next_result($conn);
while ($res = mysqli_fetch_assoc($result)) {
    $titulli = $res['titulli'];
}
?>


<br><br>
<div class="table-wrapper">
    <form method="post" enctype="multipart/form-data" action="update_header.php" class="form control offset-md-4">
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Titulli</label>
            <input name="titulli" type="text" class="form-control" id="inputEmail4" value="<?php echo $titulli; ?>">
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Foto</label>
            <input type="hidden" name="MAX_FILE_SIZE" value="10000000"/>
            <input name="userfile" type="file"  class="form-control" />
        </div>
        <div class="col-12">
            <input type="hidden" name="hid" value='<?php echo $_GET['hid']; ?>' />
            <button name="update_header" type="submit" class="btn btn-primary" style="width: 8rem;">Modifiko</button>
        </div>
    </form>
</div>
<br><br>

<?php
mysqli_next_result($conn);
include("footer.php");
?>







