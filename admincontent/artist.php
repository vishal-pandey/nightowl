<div class="side-menu col-sm-2">
    <h3 align="center">Menu</h3>
    <br>
    <button class="btn btn-default col-sm-12" id="instruction">Instruction</button>
    

    <button class="btn btn-default col-sm-12" id="add-season">Add Season</button>

    <button class="btn btn-default col-sm-12" id="edit-season">Edit Season</button>


    
</div>
<div class="main-content col-sm-10 well">
	<div class="instruction">
		<h3 align="center">Instructions</h3>
		<p>
			<ol>
				<li>Select Edit Content from the side menu to edit About section.</li>
			</ol>
		</p>
	</div>
	
	<div class="add-season">
		<h3 align="center">Add Season</h3>
		<div class="add-season-content">
		</div>
	</div>

	<div class="edit-season">
		<h3 align="center">Edit Season</h3>
		<div class="edit-season-content">
		</div>
	</div>

	<span class="status">
	</span>

</div>
<script type="text/javascript">
	$(document).ready(function(){
		$(document).ajaxStart(function(){
       	 	$(".status").html("Processing ...");
       	 	$(".status").css("display","block");
    	});
    	$(document).ajaxComplete(function(){
        	$(".status").html("Done");
       	 	$(".status").css("display","none");
    	});

	    $("button#add-season").click(function(){
			$.post("./post/artist/add-season.php", function(data, status){
	            $('.add-season-content').html(data);
	            bindSubmit();
	        });
	    });

	     $("button#edit-season").click(function(){
			$.post("./post/artist/edit-season.php", function(data, status){
	            $('.edit-season-content').html(data);
	            bindSubmit();
	        });
	    });
        
		$('button').click(function(){
			$(".main-content div").css("display","none");
			$(".side-menu button").css("background","initial");
			$(this).css("background","lightgrey");
			var abc = $(this).attr("id");
			$('.'+abc).css("display","block");
			$('.'+abc+'>div').css("display","block");
		});
		


		function bindSubmit(){
			$('.add-season-content').ready(function(){
				$(".add-season-form").submit(function(e) {
				    var url = "./post/artist/add-season-control.php";
				    $.ajax({
				           type: "POST",
				           url: url,
				           data: $(this).serialize(), 
				           success: function(data)
				           {
				               if (data == "success") {
				               		$.post("./post/artist/add-season.php", function(data, status){
								            $('.add-season-content').html(data);
								            bindSubmit();
								        });
				               }
				           }
				         });

				    e.preventDefault(); 
				});
			});
		}
	});
</script>
<style type="text/css">
	h3{
		margin: 0;
	}
	div.registered , div.course , div.assign , div.home-work, div.student-video , div.result , div.fees, div.collect-fees, div.add-season, div.edit-season{
		display: none;
	}
</style>