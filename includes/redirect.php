<?php
require_once 'lib/shorty.php';
if(isset($_GET['code'])){
	$s = new Shortener;
	$code = $_GET['code'];
	if($url = $s->getUrl($code)){
		header("Location: {$url}");
		die();
	}
	else
	{
		echo "<pre>404 page not found</pre>";
		die();
	}	
}

?>