<?php
define('DB_HOST','localhost');
define('DB_NAME','kshitijk_Portfolio_db');
define('DB_USER','kshitijk_kshitijksk1');
define('DB_PASS','sandeshkha1');

$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS) or die("Failed to connect to database:".mysqli_error($con));

$db = mysqli_select_db($con,DB_NAME) or die("Failed to connect to MYSQL:".mysqli_error($con));

?>