<?php
	$season = $_POST['sname'];
	include_once "../../content/configure.php";
	$sql = "insert into gallery values('{$season}')";
	$conn->query($sql);
	echo "success";
	mkdir("../../../images/gallery/".$season);
	// mkdir("../../../images/media/".$season."/thumb");

?>