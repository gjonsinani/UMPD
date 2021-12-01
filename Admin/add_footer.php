<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['add_footer'])) {	
	$pershkrimi = $_POST['pershkrimi'];
    $ikonat = $_POST['ikonat'];
    $linku = $_POST['linku'];

	

	{ 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($conn, "CALL insertFooter('$pershkrimi','$ikonat','$linku')");
		
		//display success messPershkrimi
		?>
		<script>
		alert('Footer-i juaj u shtua me sukses!');
        window.location.href='home.php';
        </script>
		<?php
	}
}
?>