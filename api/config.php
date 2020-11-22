<?php

define('DB_NAME','ionic5_db');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_HOST','localhost');

$mysqli = new msqli(DB_HOST,DB_USER, DB_PASSWORD,DB_NAME);

date_default_timezone_set('America/Peru');

?>
