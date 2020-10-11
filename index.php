<?php
	$conn = new mysqli('localhost','root','','shorturl');


	if (isset($_GET)) {
		
		foreach ($_GET as $key => $val) {
			$l = mysqli_real_escape_string($conn,$key);
			$sl = trim($l, '/');

		}

		$eeeee   = $conn -> query(" SELECT * FROM shortner WHERE short_link = '$sl' And status = '1' ");
		echo $count = mysqli_num_rows($eeeee);

		if ($count > 0) {

			$row = $eeeee->fetch_assoc();
			$link = $row ['link'];

			$conn -> query(" UPDATE shortner SET hit_count = hit_count+1 WHERE short_link = '$sl' ");

			header("location: ".$link);
		}else{
			echo "<h5 style='color:red;text-align:center;'>Link Not Found</h5>";
		}
	}





 ?>

 <?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Shorten URL</h2>

    <?php 

        if (isset($_REQUEST['delete_success'])) {
            echo "<h5 style='color:green;text-align:center;'>Your Data Delete Success!</h5>";
        }

     ?><?php 

        if (isset($_REQUEST['update_success'])) {
            echo "<h5 style='color:green;text-align:center;'>Your Data Update Success!</h5>";
        }

     ?>

    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Short Link</th>
        <th>Link</th>
        <th>Count</th>
        <th>Action</th>
        </thead>
        <tbody>

        <?php 

            $conn = new mysqli('localhost','root','','shorturl');
            $data = $conn -> query("SELECT * FROM shortner");
            while ($tokra = $data -> fetch_assoc()) { ?>
            <tr>
                <td><?php echo $tokra['id'] ?></td>
                <td>localhost/shorturl/<?php echo $tokra['short_link'] ?></td>
                <td><?php echo $tokra['link'] ?></td>
                <td><?php echo $tokra['hit_count'] ?></td>
                <td>
                    <a href='edit.php?id=<?php echo $tokra['id'] ?>'>Edit</a>
                    <a href='delete-inline.php?id=<?php echo $tokra['id'] ?>'>Delete</a>
                </td>
            </tr>
        <?php  } ?>
        </tbody>
    </table>
</div>
</div>
</body>
</html>
