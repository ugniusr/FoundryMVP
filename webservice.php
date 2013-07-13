<?php
$color = $_REQUEST['color'];

$img = file_get_contents('bg_'. $color .'.png');

echo base64_encode($img);
?>