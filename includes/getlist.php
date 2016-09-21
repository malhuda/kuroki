<?php 
$args = explode('/', rtrim($_SERVER['QUERY_STRING'], '/'));
$method = array_shift($args);


//visual novel section

	switch($method) {
		case 'dashboard=index&source=hgame':
		include "./source/h-game.php"; 
		break;
		case 'dashboard=index&source=moonkaini':
		include './source/moonkaini.php'; 
		break;
		case 'dashboard=index&source=routefinder':
		include './source/routefinder.php';
		break;
		case 'dashboard=index&source=girlcelly':
		include './source/girlcelly.php';
		break;
		case 'dashboard=index&source=hikarinoakari':
		include './source/hikarinoakari.php';
		break;
		case 'dashboard=index&source=nhentai':
		include './source/nhentai.php';
		break;
		default:
		include "./source/spotlight.php";
		break;


	}




 

	
	