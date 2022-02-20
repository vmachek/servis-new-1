<?php
if ($_GET['page'] == 'archive') {
	require_once "_admin/archive.php";
} elseif ($_GET['page'] == 'settings') {
	require_once "_admin/settings.php";
} else {
	require_once "_admin/overview.php";
}