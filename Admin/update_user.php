<?php
// including the database connection file
include("header.php");
include_once("config.php");

if (isset($_POST['update_user'])) {
    $uid = $_POST['uid'];
    $username =mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = mysqli_real_escape_string($conn,MD5($_POST['password'])); {
        //updating the table
        $result = mysqli_query($conn,"CALL updateUsers('$uid','$username','$password','$email')");

        // $result = mysqli_query($conn, "UPDATE users SET username='$username', email='$email', password= MD5('$password')  WHERE uid=$uid");

        //redirectig to the display message. In our case, it is home.php
        ?>
        <script>
            alert('Përdoruesi u modifikua me sukses!');
            window.location.href = 'home.php';
        </script>
        <?php
    }
}
?>
<?php
//getting id_footer from url
mysqli_next_result($conn);
$uid = $_GET['uid'];

//selecting data associated with this particular id_footer
$result = mysqli_query($conn, "CALL selectUsers('$uid')");

while ($res = mysqli_fetch_assoc($result)) {
    $username = $res['username'];
    $password = $res['password'];
    $email = $res['email'];
}
?>


<br><br>
<div class="table-wrapper">
    <form method="post" enctype="multipart/form-data" action="update_user.php" class="form control offset-md-4">
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Përdoruesi</label>
            <input name="username" type="text" class="form-control" id="inputEmail4" value="<?php echo $username; ?>">
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input name="email" type="email" class="form-control" id="inputEmail4" value="<?php echo $email; ?>">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Fjalekalimi</label>
            <input name="password" type="text" class="form-control" id="inputPassword4" value="<?php echo $password; ?>">
        </div>
        <div class="col-12">
            <input type="hidden" name="uid" value='<?php echo $_GET['uid']; ?>' />
            <button name="update_user" type="submit" class="btn btn-primary" style="width: 8rem;">Modifiko</button>
        </div>
    </form>
</div>
<br><br>

<?php
include("footer.php");
?>