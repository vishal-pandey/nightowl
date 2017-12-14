<?php
	if ($_POST['pid'] == 'About') {
		include_once "../../content/configure.php";
		$title = $_POST['title'];
		$content = $_POST['content'];
		$pid = $_POST['pid'];

		$sql="update about set value='".$content."' where id = '".$pid."';";
		$result = $conn->query($sql);
		echo "success";
	}
?>