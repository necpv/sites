<?php
	include "configs/db.php";

	if (!empty($_POST)) {
		//echo $_POST['user_name'];
		$sql = "UPDATE `helprequests` SET `isDone` = '1', `Comment` = '" . $_POST['comment'] . "' WHERE `helprequests`.`id` =" . $_GET['id'];

		if ($conn->query($sql) === TRUE) {
		  echo "<h4>New record created successfully</h4>";
		  header('Location: mwp.php');
		} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
?>
