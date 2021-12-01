<?php include 'header.php'; ?>




<section class="slider_section">
    <div class="banner_main">
        <?php
        $result = mysqli_query($conn, "SELECT * FROM header order by hid DESC limit 1 ");
        while ($row = mysqli_fetch_array($result)) {
            extract($row);
            if ($result == null)
                mysqli_free_result($result);
        ?>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mapimg">
                        <div class="text-bg">
                            <h1><?php echo $titulli ?><br></h1>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="text-img">
                            <figure> <?php echo '<img alt="" width="100%" height="100%" src="data:images/jpeg;base64,' . base64_encode($row['image']) . '"/>'; ?></span>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</section>
<div class="contactus">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="title">
                    <h2>Produktet</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="ourproduct">
    <div class="container">
        <div class="row product_style_3">
      <!-- product -->
      <?php
        $result = mysqli_query($conn, "SELECT * FROM punimet order by pid DESC ");
        while ($row = mysqli_fetch_array($result)) {
            extract($row);
            if ($result == null)
                mysqli_free_result($result);
        ?>
      <div class=" col-xl-4 col-lg-4 col-md-6 col-sm-12">
            <div class="full product">
                <div class="product_img">
                    <div class="center"><?php echo '<img alt="" width="100%" height="100%" src="data:images/jpeg;base64,' . base64_encode($row['image']) . '"/>'; ?>
                        <div class="overlay_hover"> <a class="add-bt" href="porosite.php">+ Porosit</a> </div>
                    </div>
                </div>
                <div class="product_detail text_align_center">
                    <p class="product_price"><?php echo $cmimi ?>€</p>
                    <p class="product_descr"><?php echo $emri ?></p>
                </div>
            </div>
        </div>
        <!-- end product -->
    <?php } ?>
    </div>
</div>
</div>
<?php include 'footer.php'; ?>