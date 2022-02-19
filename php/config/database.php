<?php
// require_once "vendor/catfan/medoo/src/Medoo.php";

// Require Composer's autoloader.
require 'vendor/autoload.php';

// Using Medoo namespace.
use Medoo\Medoo;

$database = new Medoo([
	// [required]
	'type' => 'mariadb',
	'host' => 'localhost',
	'database' => 'fimak_servis',
	'username' => 'root',
	'password' => '0139Sql.',

	// [optional]
	'charset' => 'utf8mb4',
	'collation' => 'utf8mb4_czech_ci',
	'port' => 3306,

]);