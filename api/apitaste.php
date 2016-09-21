<?php
session_start();
// KurokiX
if(isset($_GET['source'])) {
	switch($_GET['source']) {
		default:
		header('Content-Type: application/json');
		echo "// KurokiX \n";
		echo json_encode(array("error" => "method not allowed"));
		break;
		case 'girlcelly':
		require_once "vn/girlcelly.php";
		break;
		case 'moonkaini':
		require_once "vn/moonkaini.php";
		break;
		case 'hgame':
		require_once "vn/h-game.php";
		break;
		case 'hikarinoakari':
		require_once "ost/hikarinoakariost.php";
		break;
		case 'nhentai':
		require_once "manga/nhentai.php";
		break;
		case 'smartsearch':
		require_once "other/smartseach.php";
		break;
	}
}
else {
	echo "<html><head></head><body><pre style='word-wrap: break-word; white-space: pre-wrap;''>Hello '/' (＠´∀｀)ノ</pre></body></html>";
}


?>
