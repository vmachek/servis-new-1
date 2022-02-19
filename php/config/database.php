<?php
// Require Composer's autoloader.
require 'vendor/autoload.php';

// Using Medoo namespace.
use Medoo\Medoo;

$database = new Medoo([
	// [required]
	'type' => 'mariadb',
	'host' => 'localhost',
	'database' => 'name',
	'username' => 'your_username',
	'password' => 'your_password',

	// [optional]
	'charset' => 'utf8mb4',
	'collation' => 'utf8mb4_general_ci',
	'port' => 3306,

]);