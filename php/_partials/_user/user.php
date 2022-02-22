<?php
if ($_GET['page'] == 'archive') {
	require_once "archive.php";
} elseif ($_GET['page'] == 'settings') {
	require_once "settings.php";
} else {
	require_once "overview.php";
}