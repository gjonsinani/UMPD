<?php
include("header.php");
?>

<br>
<br>
<div class="container" >
    <h2 style="text-align:center; padding:15px ">MENAGJIMI I PËRDORUESVE</h2>
    
<div class="container d-flex align-content-around flex-wrap">

    <div class="card border-primary m-3 p-3" style="max-width: 20.5rem;">
        <div class="card-header bg-transparent border-primary">Shto Përdorues</div>
        <div class="card-body text-primary">
            <p class="card-text">Kjo është forma për të shtuar Përdorues.</p>
        </div>
        <div class="card-footer bg-transparent border-primary"> <a href="shto_user.php"><span class="icon solid major fa-pencil-alt"></span>
                <button class="btn btn-primary ml-5" style="width: 8rem;">Shto</button>
            </a>
        </div>
    </div>
    <div class="card border-success m-3 p-3" style="max-width: 20.5rem;">
        <div class="card-header bg-transparent border-success">Modifiko Përdorues</div>
        <div class="card-body text-success">
            <p class="card-text">Kjo është forma për të modifikuar Përdorues.</p>
        </div>
        <div class="card-footer bg-transparent border-success"> <a href="modifiko_user.php">
        <button class="btn btn-success  ml-5" style="width: 8rem;">Modifiko</button>
            </a>
        </div>
    </div>
    <div class="card border-danger m-3 p-3" style="max-width: 20.5rem;">
        <div class="card-header bg-transparent border-danger">Fshijë Përdorues</div>
        <div class="card-body text-danger">
            <p class="card-text">Kjo është forma për të fshirë Përdorues.</p>
        </div>
        <div class="card-footer bg-transparent border-danger"> <a href="fshije_user.php"><span class="icon solid major fa-pencil-alt"></span>
        <button class="btn btn-danger ml-5" style="width: 8rem;">Fshijë</button>
            </a>
        </div>
    </div>
</div>
</div>
<br>
<br>
<!-- footer -->

<?php
include("footer.php");
?>