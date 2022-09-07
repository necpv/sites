<?php
	include "configs/db.php";
	include "partials/header.php";

	$sql = 'SELECT * FROM `helprequests`';
	$result = $conn->query($sql);
?>

<table id="customers">
	<tr>
		<th>Time</th>
		<th>Name</th>
		<th>Phone</th>
		<th>Question</th>
		<th>Coments</th>
	</tr>

<?php
	foreach ($result as $row) {

		if ($row["isDone"] == 0) {

			echo '<tr data-time = "55"><td>' . $row["Time"] .
			'</td><td>' . $row["Name"] .
			'</td><td>' . $row["Tel"] .
			'</td><td>' . $row["Question"] .
			'</td><td>

				<form action="reply.php?id=' . $row['id'] . '" method="POST">
					<input type="text" name="comment">
					<button class="btnDone" data-id="' .
					$row['id'] . '">Done</button>
				</form>

			</td></tr>';
		}
	}
?>

</table>

<?php
	include "partials/footer.php";
?>