<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
include("header.php");

?>

<br><br>
<div class="table-wrapper">
    <form method="post" action="add_punim.php" enctype='multipart/form-data' class="form control offset-md-4">
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Emri</label>
            <input name="emri" type="text" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Përshkrimi</label>
            <input name="pershkrimi" type="text" class="form-control" id="inputEmail4">
        </div>

        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Foto</label>
            <input type="hidden" name="MAX_FILE_SIZE" value="10000000" class="form-control" />
            <input name="userfile" type="file" class="form-control" />
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Cmimi</label>
            <input name="cmimi" type="text" class="form-control" id="inputEmail4">
        </div>
        <div class="col-12">
            <button name="add_punim" type="submit" class="btn btn-primary" style="width: 8rem;">Shto</button>
        </div>
    </form>
</div>
<br><br>

<?php
include("footer.php");
?>