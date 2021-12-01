<?php
//including the database connection file
include_once("config.php");

if (isset($_POST['add_kategori'])) {
	$emri = $_POST['emri'];
	$imgData = addslashes(file_get_contents($_FILES['userfile']['tmp_name']));
	$name = $_FILES['userfile']['name'];
	$maxsize = 10000000; //set to approx 10 MB



	{
		// if all the fields are filled (not empty) 

		//insert data to database	
		$result = mysqli_query($conn, "INSERT INTO kategorite (emri,image,name) VALUES('$emri','$imgData','$name')");

		//display success messPershkrimi
?>
		<script>
			alert('Kategoria u shtua me sukses!');
			window.location.href = 'home.php';
		</script>
<?php
	}
}
?>