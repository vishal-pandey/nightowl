<?php
	$season = $_POST['season'];
	include_once "../../content/configure.php";
	$sql = "delete from exhibitor where seasons = '{$season}' ";
	$conn->query($sql);
	echo "success";
	// rmdir("../../../images/media/".$season."/thumb");
	// rmdir("../../../images/media/".$season);

	$ddir = "../../../images/exhibitor/".$season;

	 function rrmdir($dir) { 
	   if (is_dir($dir)) { 
	     $objects = scandir($dir); 
	     foreach ($objects as $object) { 
	       if ($object != "." && $object != "..") { 
	         if (is_dir($dir."/".$object))
	           rrmdir($dir."/".$object);
	         else
	           unlink($dir."/".$object); 
	       } 
	     }
	     rmdir($dir); 
	   } 
	 }
	 rrmdir($ddir);



?>