<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', '');    // DB username
define('DB_PASSWORD', '');    // DB password
define('DB_DATABASE', 'kuroki');      // DB name
define('FB_APPID', '');
define('FB_APPSECRET','');
define('BASE_URL','https://kuroki.me');
$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE) or die( "Unable to connect");