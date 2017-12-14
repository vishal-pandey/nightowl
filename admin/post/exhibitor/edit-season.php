
	<?php
		include '../../content/configure.php';
		$sql = "select * from exhibitor";
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


	<?php
		echo $_POST['see'];
	?>




	<script type="text/javascript">
	$(document).ready(function(){
		$('.delete').click(function(){
			if(confirm("Do You really want to delete season")){
				$url = "./post/exhibitor/delete-season-control.php";
				var seas = $(this).attr("id")
				$.post($url,
			    {
			        season: seas,
			    },
			    function(data, status){
			        $("#edit-season").click();
			    });
			}
		});
		$(".edit").click(function(){
			$url1 = "./post/exhibitor/edit-season-control.php";
			var seas = $(this).attr("id")
			$.post($url1,
		    {
		        season: seas,
		    },
		    function(data, status){
		        // $("#edit-season").click();
		        $('.edit-season-content').html(data);
		    });
			// $("#edit-season").click();
		});
	});
</script>