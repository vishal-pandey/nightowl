<?php
	$season = $_POST['sname'];
	include_once "../../content/configure.php";
	$sql = "insert into exhibitor values('{$season}')";
	$conn->query($sql);
	echo "success";
	mkdir("../../../images/exhibitor/".$season);
	// mkdir("../../../images/media/".$season."/thumb");

?>