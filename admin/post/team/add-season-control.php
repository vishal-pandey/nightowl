<?php
	$season = $_POST['sname'];
	include_once "../../content/configure.php";
	$sql = "insert into team values('{$season}')";
	$conn->query($sql);
	echo "success";
	mkdir("../../../images/team/".$season);
	// mkdir("../../../images/media/".$season."/thumb");

?>