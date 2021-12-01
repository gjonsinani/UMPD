<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
include("header.php");

?>

<br><br>
<div class="table-wrapper">
    <form method="post" action="add_user.php" class="form control offset-md-4">
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Përdoruesi</label>
            <input name="username" type="text" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input name="email" type="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Fjalekalimi</label>
            <input name="password" type="password" class="form-control" id="inputPassword4">
        </div>
        <div class="col-12">
            <button name="add_user" type="submit" class="btn btn-primary" style="width: 8rem;">Shto</button>
        </div>
    </form>
</div>
<br><br>

<?php
include("footer.php");
?>