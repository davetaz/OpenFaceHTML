<?php

	$path = $_GET["path"];

	$full = "outputs/" . $path;

	$cmd = 'zip -r outputs/'.$path.'.zip outputs/testing/';

	exec($cmd);

	header('Location: outputs/'. $path . '.zip' );

?>