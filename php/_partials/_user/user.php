<?php
if (isset($_GET['page']) and $_GET['page'] == 'archive') {
	require_once "archive.php";
} elseif (isset($_GET['page']) and $_GET['page'] == 'settings') {
	require_once "settings.php";
} else {
	require_once "overview.php";
}