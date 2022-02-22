<?php
echo '<noscript>Pro správnou funčnost stránek je nutný zapnutý javascript.</noscript>
<div id="root">';

if ($_SESSION['logged'] == 'true') {
	require_once "_system/nav.php";
	if ($_SESSION['rights'] == 'admin') {
		require_once './_admin/admin.php';
	} elseif ($_SESSION['rights'] == 'user') {
		require_once '_partials/_user/user.php';
	} else {
		require_once "_system/access_denied.php";
	}
} else {
	require_once "_system/access_denied.php";
}

echo "</div>";