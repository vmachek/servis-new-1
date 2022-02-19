<?php
session_start();

require_once "_partials/header.php";

if (empty($_SESSION('logged'))) {
	require_once "_partials/login.php";
} else {
	require_once "_partials/logged.php";
}

require_once "_partials/footer.php";