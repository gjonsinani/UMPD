<footer>
    <div class="footer">
    <?php
                            $result = mysqli_query($conn, "SELECT * FROM footer order by fid ASC limit 5 ");
                            while ($row = mysqli_fetch_array($result)) {
                                extract($row);
                                if ($result == null)
                                    mysqli_free_result($result);
                            ?>

        <div class="container-fluid">
            <div class="border1">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                        <img class="logo1" src="images/logo1.jpg" />
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        
                        <ul class="lik">
                            <li> <a href="<?php echo $linku; ?>"><?php echo $emri; ?></a></li>
                        </ul>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                        <ul class="sociel">
                                <li> <a href="<?php echo $linku ?>"><i class="fa fa-<?php echo $ikonat ?>"></i></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <div class="copyright">
            <p><?php echo $pershkrimi ?> <a href="https://html.design/">Free html Templates</a></p>
        </div>
        <?php } ?>

    </div>
</footer>
<!-- end footer -->
</div>
</div>
<div class="overlay"></div>
<!-- Javascript files-->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery-3.0.0.min.js"></script>
<!-- sidebar -->
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/custom.js"></script>
<script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        $("#sidebar").mCustomScrollbar({
            theme: "minimal"
        });

        $('#dismiss, .overlay').on('click', function() {
            $('#sidebar').removeClass('active');
            $('.overlay').removeClass('active');
        });

        $('#sidebarCollapse').on('click', function() {
            $('#sidebar').addClass('active');
            $('.overlay').addClass('active');
            $('.collapse.in').toggleClass('in');
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
        });

    });
</script>
</body>

</html>