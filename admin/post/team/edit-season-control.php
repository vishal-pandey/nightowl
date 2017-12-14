
<?php
	$season = $_POST['season'];


	$dir = "../../../images/team/".$season;




	// Open a directory, and read its contents
	
	// readdir("../../../images/team/".$season);
?>

	<div class="col-sm-12 text-center well"><h3 style="margin: 0;">Add <?php echo $season; ?> Images</h3></div><br><br>
	<span class="theseason" id="<?php echo $season; ?>"></span>
	<form method="post" enctype="multipart/form-data" class="well file-upload-form">
		<div class="inputfiles">
			<input type="file" name="fileToUpload[]" id="fileToUpload" class="form-control">
		</div>
			<input type="text" name="dir" value="<?php echo '../../../images/team/'.$season.'/'; ?>" hidden="true">

		<center><input type="submit" value="Upload" name="submit" class="btn btn-default"></center>

	</form>
		<center><button class="add-inp btn btn-default">Add More</button></center>




<?php

	$dir1 = "../images/team/".$season."/";

	if (is_dir($dir)){
	  if ($dh = opendir($dir)){
	    while (($file = readdir($dh)) !== false){
	    	if (!is_dir($file) && $file != 'thumb') {

		      echo "<div class='col-sm-3 well himg text-center'><img src='".$dir1.$file."'>
		      		<br><br><button class='btn btn-danger img-delete' id='../../".$dir1.$file."'>delete</button>

		      </div>";

	    	}
	    }
	    closedir($dh);
	  }
	}

?>







<script type="text/javascript">
	
	$(".file-upload-form").submit(function(e) {
	    var url = "./post/team/upload.php";

	    $.ajax({
	            type: "POST",
	             url: url,
	            data: new FormData(this),
	           cache: false,
         contentType: false,
         processData: false,
	           success: function(data)
	           {
	           		if (data=="success") {
	           			$url1 = "./post/team/edit-season-control.php";
						var seas = $(".theseason").attr("id");
						$.post($url1,
					    {
					        season: seas,
					    },
					    function(data, status){
					        // $("#edit-season").click();
					        $('.edit-season-content').html(data);
					    });
	           		}
	           }
	         });
	    e.preventDefault(); 
	});


	$(".img-delete").click(function(){
		if (confirm("Do you want to delete this image")) {
			var imglink = $(this).attr("id");
			$url3 = './post/team/imgdelete.php';
			$.post($url3,
		    {
		        img: imglink,
		   },
		    function(data, status){
		        $url1 = "./post/team/edit-season-control.php";
							var seas = $(".theseason").attr("id");
							$.post($url1,
						    {
						        season: seas,
						    },
						    function(data, status){
						        // $("#edit-season").click();
						        $('.edit-season-content').html(data);
						    });
		    });
		}
	});



	$(".add-inp").click(function(){
		$(".inputfiles").append('<input type="file" name="fileToUpload[]" id="fileToUpload" class="form-control">');
	});

</script>

<style type="text/css">
	.himg img{
		width: 100px;
		height: 100px;
	}
</style>