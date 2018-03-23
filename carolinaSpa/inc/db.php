<?php

	//$db = new mysqli('localhost','root','','carolina_spa');
	$db = new mysqli('sql11.freemysqlhosting.net','sql11228321','Bpxfhv9ZGc','sql11228321');
	if ($db->connect_error) {
		$error = $db->connect_error;
	}

?>