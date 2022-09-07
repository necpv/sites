<?php
	include "configs/db.php";
	if (!empty($_POST)) {
		$sql = "INSERT INTO helprequests (name, tel, question)
		VALUES ('" . $_POST['user_name'] . "', '" . $_POST['phone'] . "', '" . $_POST['question'] . "')";

		if ($conn->query($sql) === TRUE) {
		  echo "<h4>New record created successfully</h4>";
		  header('Location: index.php');
		} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}

?>