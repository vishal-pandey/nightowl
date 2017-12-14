<?php
	$season = $_POST['sname'];
	include_once "../../content/configure.php";
	$sql = "insert into artist values('{$season}')";
	$conn->query($sql);
	echo "success";
	mkdir("../../../images/artist/".$season);
	// mkdir("../../../images/media/".$season."/thumb");

?>