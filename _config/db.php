<?php 

$dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8';


//base donnée connection handler
$db = new PDO($dsn,DB_USER,DB_PASS);
