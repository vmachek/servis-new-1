<?php
echo '<noscript>Pro správnou funčnost stránek je nutný zapnutý javascript.</noscript>
<div id="root">';

if ($_SESSION['logged'] == 'true') {
	require_once "_partials/dashboard/nav.php";
	require_once "_partials/dashboard/content.php";
} else {
	require_once "_partials/system/access_denied.php";
}

echo "</div>";