<?php
	session_start();
	if((!isset($_SESSION['theadmin'])) && ($_SESSION['theadmin']!="superadmin")){
		header("Location:http://www.rvsinstitute.com/");
		die();
	}
?>
<?php
	// include_once "../../../adminlibrary/phplib.php";
	include '../../content/configure.php';
	

	$sql = "SELECT * FROM about where id = 'About'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
?>
<form method="post" class="about-form">
	<input type="text" name="pid" value="About" style="display: none;">
	<input type="text" name="title" class="form-control" value="About" style="display: none;">
	<textarea name="content" class="form-control" rows="20"><?php echo $row['value'];?></textarea>
	<input type="submit" name="submit" value="submit" class="btn btn-default">
</form>
<script type="text/javascript">
  tinymce.init({
	selector: "textarea",
    theme: 'modern',
	  plugins: [
	    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
	    'searchreplace wordcount visualblocks visualchars code fullscreen',
	    'insertdatetime media nonbreaking save table contextmenu directionality',
	    'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc help'
	  ],
	  toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
	  toolbar2: 'print preview media | forecolor backcolor emoticons',
	  image_advtab: true,
	  templates: [
	    { title: 'Test template 1', content: 'Test 1' },
	    { title: 'Test template 2', content: 'Test 2' }
	  ],
	  content_css: [
	    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
	    '//www.tinymce.com/css/codepen.min.css'
	  ]
    });
</script>
