<?php
if ($_GET['page'] == 'archive') {
	require_once "_user/archive.php";
} elseif ($_GET['page'] == 'settings') {
	require_once "_user/settings.php";
} else {
	require_once "_user/overview.php";
}