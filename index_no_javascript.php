<?php

$img = "bg_red.png";
$color = $_GET["color"];

if (!empty($color))
	$img = "bg_" . $color .".png";

?>
<html>
<body>
	<div style="float: left;">
		<img src="<?php echo $img; ?>" />	
	</div>
	<div style="float: left;">
		<form action="index.php">
			<input type="radio" name="color" value="red">Red<br>
			<input type="radio" name="color" value="blue">Blue<br>
			<input type="radio" name="color" value="green">Green<br>	
			<input type="submit" value="Apply changes" />
		</form>
	</div>
</body>
</html>