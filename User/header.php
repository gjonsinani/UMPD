<?php
include("config.php");


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
    <title>UMPD</title>
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
    <script src="https://kit.fontawesome.com/e8276ded7c.js" crossorigin="anonymous"></script>
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

    <div class="wrapper">


        <div class="sidebar">
            <!-- Sidebar  -->
            <nav id="sidebar">

                <div id="dismiss">
                    <i class="fa fa-arrow-left"></i>
                </div>

                <ul class="list-unstyled components">
                    <?php
                    $result = mysqli_query($conn, "SELECT * FROM menyte order by idm ASC limit 2 ");
                    while ($row = mysqli_fetch_array($result)) {
                        extract($row);
                        if ($result == null)
                            mysqli_free_result($result);
                    ?>

                        <li> <a href="<?php echo $linku ?>"><?php echo $emri ?></a></li>
                    <?php } ?>
                </ul>

            </nav>
        </div>

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
                                            <a href="index.php"><img src="images/logo.jpg" alt="#"></a>
                                            <br><br>
                                            <?php
                                            $visits = 1;
                                            if (isset($_COOKIE["visits"])) {
                                                $visits = (int)$_COOKIE["visits"];
                                            }
                                            $Month = 2592000 + time();
                                            //this adds 30 days to the current time
                                            setcookie("visits", date("F jS - g:i a"), $Month);
                                            if (isset($_COOKIE['visits'])) {
                                                $last = $_COOKIE['visits'];
                                                echo "<p style='text-align:right;'>Vizita juaj e fundit ishte me: " . $last . "</p>";
                                            } else {
                                                echo "<p style='text-align:right;'>Vizita juaj e pare ne webaplikacion tone! Mirë se vini!</p>";
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="right_header_info">
                                    <ul>
                                        <li>
                                            <button type="button" id="sidebarCollapse">
                                                <img src="images/menu_icon.png" alt="#" />
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- end header inner -->
            </header>