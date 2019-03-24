<?php
	function guid()
	{
	    mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
	    $charid = strtoupper(md5(uniqid(rand(), true)));
	    $uuid = substr($charid, 0, 8)
	        .substr($charid, 8, 4)
	        .substr($charid,12, 4)
	        .substr($charid,16, 4)
	        .substr($charid,20,12);
	    return $uuid;
	}
	$filepond = $_POST["filepond"];
	list($type, $code) = explode(';', $filepond);
	list(, $code) = explode(',', $code);
	list(, $type) = explode('/', $type);
	$code = base64_decode($code);
	$filename = guid().".".$type;
	$path = "file/".$filename;
	$code = base64_decode($code);
	file_put_contents($path, $code);
	echo "done";
?>