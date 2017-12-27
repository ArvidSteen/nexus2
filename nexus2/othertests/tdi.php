<?php
	$dirname = "galery_img/";
	$images = glob($dirname."*.*");

	foreach($images as $image) {
    	echo '<img src="'.$image.'" /><br />';
	}
?>