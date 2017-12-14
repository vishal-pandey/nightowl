<?php
	// echo $_POST['dir'];
    // $target_dir = "../../../images/media/season/";
    $target_dir = $_POST['dir'];

    $i=0;
    while ($_FILES["fileToUpload"]["name"][$i]) {
	    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"][$i]);
	    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"][$i], $target_file);

    	$i++;
    }
    echo "success";
?>
