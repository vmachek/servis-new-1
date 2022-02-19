<?php
session_start();
$_SESSION['logged'] = 'true';

/** DATABASE */
require_once "config/database.php";

/** HEADER */
require_once "_partials/header.php";
require_once "_partials/nav.php";

/** CONTENT */
if (empty($_SESSION['logged'])) {
	require_once "_partials/login.php";
} elseif ($_SESSION['logged'] == 'true') {
	require_once "_partials/logged.php";
}

/** FOOTER */
require_once "_partials/footer.php";