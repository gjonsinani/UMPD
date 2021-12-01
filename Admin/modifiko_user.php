<?php
//including the database connection file
include_once("config.php");
include("header.php");


//fetching data in descending order (lastest entry first)
$result = mysqli_query($conn,"CALL selectUsers()");
?>
<div class="container">
    <div class="d-form">
        <h3>Forma per menaxhimin e Përdoruesve</h3>
        <br><br>

        <form action="" method="post" class=" footer-bottom ">
            <div style="width: 70%; text-align: center; margin:0 15% 2% 15%;">
                <div class="input-group">
                    <input type="text" name="term" class="form-control" placeholder="Emri ose email">
                    <button class="btn btn-outline-success" type="submit">Kërko</button>
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
    </div>

    <div class="table-responsive-sm">
        <br>
        <table class="table table-success table-striped">
            <th>Perdoruesi</th>
            <th>Email</th>
            <th>Fjalekalimi</th>
            <th></th>
            <?php
            if (!empty($_REQUEST['term'])) {
                $term = mysqli_real_escape_string($conn, $_REQUEST['term']);
                $sql = mysqli_query($conn, "SELECT * FROM users WHERE username LIKE '%" . $term . "%' OR email LIKE '%" . $term . "%' ");
                if (!$sql) {
                    printf("Error: %s\n", mysqli_error($conn));
                    exit();
                }

                while ($row = mysqli_fetch_array($sql)) {

                    echo "<tr>";
                    echo "<td>" . $row['username'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['password'] . "</td>";
                    echo "<td>
                    <a href=\"update_user.php?uid=$row[uid]\" class='btn btn-primary' type='submit'>
                                        Modifiko</a>
                                        </td>
                                        </tr>";
                }
            }

            ?>

        </table>
    </div>
</div>
<br><br>
<!-- footer -->

<?php
include("footer.php");
?>