<?php
	$season = $_POST['sname'];
	include_once "../../content/configure.php";
	$sql = "insert into media values('{$season}')";
	$conn->query($sql);
	echo "success";
	mkdir("../../../images/media/".$season);
	mkdir("../../../images/media/".$season."/thumb");

?>