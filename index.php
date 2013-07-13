<html>
<head>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js">
	</script>
	<script>
		$(document).ready(function(){
		  $("button").click(function(){

			  	var image = $("#bg_img img");
			  	var selectedcol = $('input[name="color"]:checked').val();
			  	console.log(selectedcol);

				// image.attr("src", "bg_" + selectedcol + ".png");

				var url = "webservice.php"; // you can also add full URL here 
				var params = {  // you can define any number of URL parameters
				  "color" : selectedcol
				};
				$.get(url, params, function(response) { 
					response = 'data:image/png;base64,' + response;
					image.attr("src", response);
					console.log(response);
					// alert(response);
				});
		  });
		  $("input[name='color']").change(function () {
  			  	var image = $("#bg_img img");
			  	var selectedcol = $("input[name='color']:checked").val();
			  	console.log(selectedcol);

				// image.attr("src", "bg_" + selectedcol + ".png");

				var url = "webservice.php"; // you can also add full URL here 
				var params = {  // you can define any number of URL parameters
				  "color" : selectedcol
				};
				$.get(url, params, function(response) { 
					response = 'data:image/png;base64,' + response;
					image.attr("src", response);
					console.log(response);
					// alert(response);
				});
			});

		});
	</script>
</head>
<body>
	<div id="bg_img" style="float: left;">
		<img src="bg_red.png" />	
	</div>
	<div id="selector" style="float: left;">
			<input class="colr" type="radio" name="color" value="red" checked>Red<br>
			<input class="colr" type="radio" name="color" value="blue">Blue<br>
			<input class="colr" type="radio" name="color" value="green">Green<br>	
			<!-- <button>Apply changes</button> -->
	</div>
	<div class="result">

	</div>
</body>
</html>