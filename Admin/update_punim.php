<?php
// including the database connection file
include("header.php");
include_once("config.php");

if (isset($_POST['update_punim'])) {
    $pid = $_POST['pid'];
    $emri = $_POST['emri'];
    $pershkrimi = $_POST['pershkrimi'];
    $cmimi = $_POST['cmimi'];
    $imgData = addslashes(file_get_contents($_FILES['userfile']['tmp_name']));
    $name = $_FILES['userfile']['name'];
    $maxsize = 10000000; //set to approx 10 MB

    {
        //updating the table
        $result = mysqli_query($conn, "UPDATE punimet SET emri='$emri',pershkrimi='$pershkrimi',image='$imgData', name='$name', cmimi='$cmimi' WHERE pid=$pid");

        //redirectig to the display message. In our case, it is home.php
?>
        <script>
            alert('Punimi juaj u modifikua me sukses!');
            window.location.href = 'home.php';
        </script>
<?php

    }
}
$pid = $_GET['pid'];
?>
<?php
//getting id_footer from url


//selecting data associated with this particular id_footer
$result = mysqli_query($conn, "SELECT * FROM punimet WHERE pid=$pid");

while ($res = mysqli_fetch_array($result)) {
    $emri = $res['emri'];
    $pershkrimi = $res['pershkrimi'];
    $cmimi = $res['cmimi'];
}
?>


<br><br>
<div class="table-wrapper">
    <form method="post" enctype="multipart/form-data" action="update_punim.php" class="form control offset-md-4">
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Emri</label>
            <input name="emri" type="text" class="form-control" id="inputEmail4" value="<?php echo $emri; ?>">
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Përshkrimi</label>
            <input name="pershkrimi" type="text" class="form-control" id="inputEmail4" value="<?php echo $pershkrimi; ?>">
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Foto</label>
            <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
            <input name="userfile" type="file" class="form-control" />
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Cmimi</label>
            <input name="cmimi" type="text" class="form-control" id="inputEmail4" value="<?php echo $cmimi; ?>">
        </div>
        <div class="col-12">
            <input type="hidden" name="pid" value='<?php echo $_GET['pid']; ?>' />
            <button name="update_punim" type="submit" class="btn btn-primary" style="width: 8rem;">Modifiko</button>
        </div>
    </form>
</div>
<br><br>

<?php
include("footer.php");
?>