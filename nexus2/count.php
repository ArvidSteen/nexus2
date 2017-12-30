<?php
	function getUsersOnline() {
	   	$count = 0;

	   	$handle = opendir(session_save_path());
	   	if ($handle == false) return -1;

	   	while (($file = readdir($handle)) != false) {
	    		if (ereg("^sess", $file)) $count++;
		}
	   	closedir($handle);

	   	return $count;
	}
	$usercount = getUsersOnline();
	echo $usercount;
?>