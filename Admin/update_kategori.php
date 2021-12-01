<?php
// including the database connection file
include("header.php");
include_once("config.php");

if (isset($_POST['update_kategori'])) {
    $kid = $_POST['kid'];
    $emri = $_POST['emri'];
    $imgData =addslashes (file_get_contents($_FILES['userfile']['tmp_name']));
	$name = $_FILES['userfile']['name'];
	$maxsize = 10000000; //set to approx 10 MB

{
        //updating the table
        $result = mysqli_query($conn, "UPDATE kategorite SET emri='$emri',image='$imgData', name='$name' WHERE kid=$kid");

        //redirectig to the display message. In our case, it is home.php
        ?>
        <script>
            alert('KAtegoria juaj u modifikua me sukses!');
            window.location.href = 'home.php';
        </script>
        <?php
    }
}$kid = $_GET['kid'];
?>
<?php
//getting id_footer from url


//selecting data associated with this particular id_footer
$result = mysqli_query($conn, "SELECT * FROM kategorite WHERE kid=$kid");

while ($res = mysqli_fetch_array($result)) {
    $emri = $res['emri'];
}
?>


<br><br>
<div class="table-wrapper">
    <form method="post" enctype="multipart/form-data" action="update_kategori.php" class="form control offset-md-4">
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Titulli</label>
            <input name="emri" type="text" class="form-control" id="inputEmail4" value="<?php echo $emri; ?>">
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Foto</label>
            <input type="hidden" name="MAX_FILE_SIZE" value="10000000"/>
            <input name="userfile" type="file"  class="form-control" />
        </div>
        <div class="col-12">
            <input type="hidden" name="kid" value='<?php echo $_GET['kid']; ?>' />
            <button name="update_kategori" type="submit" class="btn btn-primary" style="width: 8rem;">Modifiko</button>
        </div>
    </form>
</div>
<br><br>

<?php
include("footer.php");
?>







