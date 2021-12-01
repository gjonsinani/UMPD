<?php
// including the database connection file
include("header.php");
include_once("config.php");

if (isset($_POST['update_menu'])) {
    $idm = $_POST['idm'];
    $emri = $_POST['emri'];
    $linku = $_POST['linku'];

{
        //updating the table
        $result = mysqli_query($conn, "CALL updateMeny('$idm','$emri','$linku')");
        // "UPDATE menyte SET emri='$emri', linku='$linku' WHERE idm=$idm"
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
mysqli_next_result($conn);
//getting id_footer from url
$idm = $_GET['idm'];

//selecting data associated with this particular id_footer
$result = mysqli_query($conn, "CALL selectMeny('$idm')");
// if (!$res) {
//     printf("Error: %s\n", mysqli_error($conn));
//     exit();
// }
mysqli_next_result($conn);
while ($res1 = mysqli_fetch_assoc($result)) {
    $emri1 = $res1['emri'];
    $linku1 = $res1['linku'];
}
?>

<br><br>
<div class="table-wrapper">
    <form method="post"  action="" class="form control offset-md-4">
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Emri</label>
            <input name="emri" type="text" class="form-control" id="inputEmail4" value="<?php echo $emri1; ?>">
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Linku</label>
            <input name="linku" type="text" class="form-control" id="inputEmail4" value="<?php echo $linku1; ?>">

        </div>
        <div class="col-12">
            <input type="hidden" name="idm" value="<?php echo $_GET['idm']; ?>">
            <button name="update_menu" type="submit" class="btn btn-primary" style="width: 8rem;">Modifiko</button>
        </div>
    </form>
</div>
<br><br>

<?php
include("footer.php");
?>


?> 