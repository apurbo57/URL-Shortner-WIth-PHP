<?php 
	$conn = mysqli_connect('localhost','root','','shorturl');

	$id = $_GET['id'];

	if ($conn) {
		$sql = "DELETE FROM shortner WHERE id = '$id' ";
			 if (mysqli_query($conn, $sql)) {
			 	header("location: allurl.php");
			 }else{
			 	echo "Delete Eror!";
			 }
	}
	

?>