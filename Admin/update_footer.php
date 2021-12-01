<?php
// including the database connection file
include("header.php");
include_once("config.php");

if (isset($_POST['update_footer'])) {
    $fid =mysqli_real_escape_string($conn, $_POST['fid']);
    $pershkrimi = mysqli_real_escape_string($conn,$_POST['pershkrimi']);
    $ikonat = mysqli_real_escape_string($conn,$_POST['ikonat']);
    $linku = mysqli_real_escape_string($conn,$_POST['linku']); {
        //updating the table
        $result = mysqli_query($conn, "CALL updateFooter('$pershkrimi', '$ikonat', '$linku','$fid' )");
        // $result = mysqli_query($conn, "UPDATE footer SET pershkrimi='$pershkrimi', ikonat='$ikonat', linku='$linku'  WHERE fid=$fid");

        //redirectig to the display message. In our case, it is home.php

		if($result)
		{	
			header("Location: home.php");
		}else
		{
			die("Coudn't execute update procedure!");
		}



    }
}
?>
<?php
mysqli_next_result($conn);
//getting id_footer from url
$fid = $_GET['fid'];

//selecting data associated with this particular id_footer
$result = mysqli_query($conn, "CALL selectFooter ('$fid')");

mysqli_next_result($conn);
// $result = mysqli_query($conn, "SELECT * FROM footer WHERE fid=$fid");

while ($res1 = mysqli_fetch_array($result)) {
    $pershkrimi1 = $res1['pershkrimi'];
    $linku1 = $res1['linku'];
    $ikonat1 = $res1['ikonat'];
}
?>


<br><br>
<div class="table-wrapper">
    <form method="post" enctype="multipart/form-data" action="update_footer.php" class="form control offset-md-4">
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Përshkrimi</label>
            <input name="pershkrimi" type="text" class="form-control" id="inputEmail4" value="<?php echo $pershkrimi1; ?>">
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Ikona</label>
            <input name="ikonat" type="text" class="form-control" id="inputEmail4" value="<?php echo $ikonat1; ?>">
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Linku</label>
            <input name="linku" type="text" class="form-control" id="inputEmail4" value="<?php echo $linku1; ?>">
        </div>
        <div class="col-12">
            <input type="hidden" name="fid" value='<?php echo $_GET['fid']; ?>' />
            <button name="update_footer" type="submit" class="btn btn-primary" style="width: 8rem;">Modifiko</button>
        </div>
    </form>
</div>
<br><br>

<?php
include("footer.php");
?>