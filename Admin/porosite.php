<?php
include("header.php");
?>

<br>
<br>
<div class="container" >
    <h2 style="text-align:center; padding:15px; background:rgba(0,121,107 ,1); color:white; ">MENAGJIMI I POROSIVE</h2>
    
<div class="container d-flex align-content-around flex-wrap">

    <div class="card border-primary m-3 p-3" style="max-width: 20.5rem;">
        <div class="card-header bg-transparent border-primary">Shiko Porosi</div>
        <div class="card-body text-primary">
            <p class="card-text">Kjo është forma për të shikuar Porosi.</p>
        </div>
        <div class="card-footer bg-transparent border-primary"> <a href="shiko_porosi.php"><span class="icon solid major fa-pencil-alt"></span>
                <button class="btn btn-primary ml-5" style="width: 8rem;">Shiko</button>
            </a>
        </div>
    </div>
    <div class="card border-success m-3 p-3" style="max-width: 20.5rem;">
        <div class="card-header bg-transparent border-success">Modifiko Porosi</div>
        <div class="card-body text-success">
            <p class="card-text">Kjo është forma për të modifikuar Porosi.</p>
        </div>
        <div class="card-footer bg-transparent border-success"> <a href="modifiko_porosi.php">
        <button class="btn btn-success  ml-5" style="width: 8rem;">Modifiko</button>
            </a>
        </div>
    </div>
    <div class="card border-danger m-3 p-3" style="max-width: 20.5rem;">
        <div class="card-header bg-transparent border-danger">Fshijë Porosi</div>
        <div class="card-body text-danger">
            <p class="card-text">Kjo është forma për të fshirë Porosi.</p>
        </div>
        <div class="card-footer bg-transparent border-danger"> <a href="fshije_porosi.php"><span class="icon solid major fa-pencil-alt"></span>
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