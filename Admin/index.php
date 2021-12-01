<?php
/* Index.php faqja qe permban formen e loginit) */
include('login.php'); // perfshine scripten login
if ((isset($_SESSION['username']) != '')) {
    header('Location: home.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>niture</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">

    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <div id="content">
        <!-- header -->
        <header>
            <!-- header inner -->
            <div class="header">

                <div class="container-fluid">

                    <div class="row">
                        <div class="col-lg-3 logo_section">
                            <div class="full">
                                <div class="center-desk">
                                    <div class="logo">
                                        <img src="images/logo.jpg" alt="#">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- <form method="POST" action="" class="text-center ">
                                <table class="table table-responsive">
                                    <tbody>
                                        <tr>
                                            <td>Perdoruesi:</td>
                                            <td><input class="form-control" type="text" name="username" required /></td>
                                        </tr>
                                        <tr>
                                            <td>Fjalekalimi:</td>
                                            <td><input class="form-control" type="password" name="password" required /></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div>
                                    <input class="btn btn-primary" type="submit" name="submit" value="Kyçuni" />
                                </div>

                            </form> -->
            <br><br>
            <div class="container">
                <form method="POST" action="" class="form control offset-md-4">
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Përdoruesi</label>
                        <input name="username" type="text" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Fjalekalimi</label>
                        <input name="password" type="password" class="form-control" id="inputPassword4">
                    </div>

                    <div class="col-md-12">
                        <button name="submit" type="submit" class="btn btn-primary" style="width: 48%;">Kycu</button>
                    </div>
                </form>
            </div>

            <br><br>
            <footer>
                <div class="copyright">
                    <p>Copyright 2019 All Right Reserved By <a href="https://html.design/">Free html Templates</a></p>
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

</body>

</html>