<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
include("header.php");

?>

<br><br>
<div class="table-wrapper">
    <form method="post" action="add_menu.php" class="form control offset-md-4">
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Emri i Menys</label>
            <input name="emri" type="text" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Linku</label>
            <input name="linku" type="text" class="form-control" id="inputEmail4">
        </div>
        <div class="col-12">
            <button name="add_menu" type="submit" class="btn btn-primary" style="width: 8rem;">Shto</button>
        </div>
    </form>
</div>
<br><br>

<?php
include("footer.php");
?>