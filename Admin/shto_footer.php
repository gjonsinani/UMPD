<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
include("header.php");

?>

<br><br>
<div class="table-wrapper">
    <form method="post" action="add_footer.php" enctype='multipart/form-data' class="form control offset-md-4">
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Përshkrimi</label>
            <input name="pershkrimi" type="text" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Ikona</label>
            <input name="ikonat" type="text" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Linku i ikonës</label>
            <input name="linku" type="text" class="form-control" id="inputEmail4">
        </div>

        <div class="col-12">
            <button name="add_footer" type="submit" class="btn btn-primary" style="width: 8rem;">Shto</button>
        </div>
    </form>
</div>
<br><br>

<?php
include("footer.php");
?>