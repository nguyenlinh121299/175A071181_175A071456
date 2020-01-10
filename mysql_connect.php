<?php
//Kêt nối database
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', '');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'project_web');
// Make the connection:
$dbconn = new mysqli (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
mysqli_set_charset($dbconn, 'UTF8');
