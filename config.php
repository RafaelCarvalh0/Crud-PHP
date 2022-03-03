<?php

session_start();

$dbname = "crud";
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";

$pdo = new PDO("mysql:dbname=".$dbname.";host".$dbhost, $dbuser, $dbpass);