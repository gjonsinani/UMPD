<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['add_user'])) {	
	$username =  mysqli_real_escape_string($conn,$_POST['username']);
	$password =  mysqli_real_escape_string($conn,MD5($_POST['password']));
	$email =  mysqli_real_escape_string($conn,$_POST['email']);
		
	// checking empty fields
	if(empty($username) || empty($password) || empty($email)) {			
		if(empty($username)) {echo "<font color='red'>Username field is empty.</font><br/>";}
		if(empty($password)) {echo "<font color='red'>Password field is empty.</font><br/>";}
		if(empty($email)) {echo "<font color='red'>Email field is empty.</font><br/>";}
		//link to the previous password
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
		//insert data to database	
		$result = mysqli_query($conn, "CALL insertUsers('$username','$email',MD5('$password'))");

		// $result = mysqli_query($conn, "INSERT INTO users(username,password,email) VALUES('$username',MD5('$password'),'$email')");
		//display success messpassword
        ?>
        <script>
            alert('Përdoruesi u shtua me sukses!');
            window.location.href = 'home.php';
        </script>
        <?php
	
	}
}
?>