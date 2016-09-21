<?php 
//get title
//visual novel section
$args = explode('/', rtrim($_SERVER['QUERY_STRING'], '/'));
$method = array_shift($args);
$title = "";


	switch($method) {
		case 'dashboard=index&source=hgame':
		$title = "H-game 123";
		$class_s_1 = "active";
		break;
		case 'dashboard=index&source=moonkaini':
		$title = "Moonkaini Rhapsody";
		$class_s_2 = "active";
		break;
		case 'dashboard=index&source=girlcelly':
		$title = "Girlcelly";
		$class_s_3 = "active";
		break;
		case 'dashboard=index&source=hikarinoakari':
		$title = "HikarinoAkariOST";
		$class_s_4 = "active";
		break;
		case 'dashboard=index&smartsearch':
		$title = 'Mencari "'.$_GET['find'].'"';
		break;
		case 'dashboard=index&routefinder':
		$title = 'Walkthrough';
		$class_s_rfinder = "active";
		break;
		case 'dashboard=bookmark':
		$title = 'Bookmark';
		$class_s_bookmark = "active";
		break;
		default:
		$title = "Home";
		break;
	}	
