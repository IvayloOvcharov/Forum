<?php
  $dbname = 'forum';
	$host = 'localhost:3006';
	$username = 'root';
	$password = '';
    $opt = [
		PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
		PDO::ATTR_EMULATE_PREPARES   => false,
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"
	];
    $dbh = new PDO("mysql:dbname=$dbname;host=$host;", $username, $password ,$opt);
