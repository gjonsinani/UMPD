<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
include("header.php");

?>
<div class="contactus">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="title">
                    <h2>Porosit</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<br><br>
<div class="table-wrapper">
    <form method="post" action="add_punim.php" enctype='multipart/form-data' class="form control offset-md-4">
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Emri dhe Mbiemri</label>
            <input name="emri" type="text" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Numri i Telefonit</label>
            <input name="pershkrimi" type="text" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Adresa</label>
            <input name="pershkrimi" type="text" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Podukti</label>
            <input name="pershkrimi" type="text" class="form-control" id="inputEmail4">
        </div>
        <select  class="form-control" name="ID_Kategori">	
												<?php
												mysqli_next_result($conn);
												$res=mysqli_query($conn,"CALL selectPerdoruesPunimet()");
									while($row=$res->fetch_assoc())
									{
									?>
									<option value="<?php echo $row['pid']; ?>"><?php echo $row['emri']; ?></option>
									<?php
									}
									?>
									</select>
        <div class="col-12">
            <button name="add_porosi" type="submit" class="btn btn-primary" style="width: 8rem;">Porosit</button>
        </div>
    </form>
</div>
<br><br>

<?php
include("footer.php");
?>