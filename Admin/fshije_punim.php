<?php
//including the database connection file
include_once("config.php");
include("header.php");


//fetching data in descending order (lastest entry first)
$result = mysqli_query(
    $conn,
    "CALL selectPunim () "

    // "SELECT * FROM punimet ORDER BY pid DESC "
);
?>
<div class="container">
    <div class="d-form">
        <h3>Forma per menaxhimin e Punimeve të Drurit</h3>
        <br><br>

        <form action="" method="post" class=" footer-bottom ">
            <div style="width: 70%; text-align: center; margin:0 15% 2% 15%;">
                <div class="input-group">
                    <input type="text" name="term" class="form-control" placeholder="Emri ose Pershkrimi">
                    <button class="btn btn-outline-success" type="submit">Kërko</button>
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
    </div>

    <div class="table-responsive-sm">
        <br>
        <table class="table table-success table-striped">
            <th>Emri</th>
            <th>Pershkrimi</th>
            <th>Emri i Fotos</th>
            <th>Foto</th>
            <th>Cmimi</th>
            <th></th>
            <?php
            if (!empty($_REQUEST['term'])) {
                $term = mysqli_real_escape_string($conn, $_REQUEST['term']);
                $sql = mysqli_query($conn, "SELECT * FROM punimet WHERE emri LIKE '%" . $term . "%' OR pershkrimi LIKE'%" . $term . "%'");
                if (!$sql) {
                    printf("Error: %s\n", mysqli_error($conn));
                    exit();
                }

                while ($row = mysqli_fetch_array($sql)) {

                    echo "<tr>";
                    echo "<td>" . $row['emri'] . "</td>";
                    echo "<td>" . $row['pershkrimi'] . "</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td><img src=data:image/jpeg;base64," . base64_encode($row['image']) . " width='80'  height='100'/></td>";
                    echo "<td>" . $row['cmimi'] . "</td>";
                    echo "<td>
                    <a href=\"delete_punim.php?pid=$row[pid]\" class='btn btn-danger' type='submit'>
                                        Fshijë</a>
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