<form class="add-season-form text-center">
	<input type="text" name="sname" class="form-control" placeholder="Name of season" required="true">
	<br>
	<input type="submit" name="submit" value="Create Season" class="btn btn-default">
</form>

<br>
<div class="seasons">
	<?php
		include '../../content/configure.php';
		$sql = "select * from artist";
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc()){
			$season = $row['seasons'];
			echo '<div class="well col-sm-4 text-center">';
				echo "<b style='font-size:20px;'>".$season."<b>";
				echo "<br>";
				echo "<button class='btn btn-success edit' id='{$season}'>Edit</button>";
				echo "           ";
				echo "<button class='btn btn-danger delete' id='{$season}'>Delete</button>";
			echo '</div>';
		}
	?>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('.delete').click(function(){
			if(confirm("Do You really want to delete season")){
				$url = "./post/artist/delete-season-control.php";
				var seas = $(this).attr("id")
				$.post($url,
			    {
			        season: seas,
			    },
			    function(data, status){
			        $("#add-season").click();
			    });
			}
		});
		$(".edit").click(function(){
	        $("#edit-season").click();
			$url1 = "./post/artist/edit-season-control.php";
			var seas = $(this).attr("id")
			$.post($url1,
		    {
		        season: seas,
		    },
		    function(data, status){
		        $('.edit-season-content').html(data);
		    });
		});
	});
</script>

