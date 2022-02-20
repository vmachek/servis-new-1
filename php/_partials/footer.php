<?php
if ($_SESSION['logged'] !== 'true') {
?>
<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
<script>
/* Make dynamic date appear */
(function() {
	if (document.getElementById("get-current-year")) {
		document.getElementById(
			"get-current-year"
		).innerHTML = new Date().getFullYear();
	}
})();
/* Function for opning navbar on mobile */
function toggleNavbar(collapseID) {
	document.getElementById(collapseID).classList.toggle("hidden");
	document.getElementById(collapseID).classList.toggle("block");
}
/* Function for dropdowns */
function openDropdown(event, dropdownID) {
	let element = event.target;
	while (element.nodeName !== "A") {
		element = element.parentNode;
	}
	Popper.createPopper(element, document.getElementById(dropdownID), {
		placement: "bottom-start",
	});
	document.getElementById(dropdownID).classList.toggle("hidden");
	document.getElementById(dropdownID).classList.toggle("block");
}
</script>
<?php
} elseif ($_SESSION['logged'] == 'true') {
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" charset="utf-8"></script>
<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
<script type="text/javascript">
/* Make dynamic date appear */
(function() {
	if (document.getElementById("get-current-year")) {
		document.getElementById(
			"get-current-year"
		).innerHTML = new Date().getFullYear();
	}
})();
/* Sidebar - Side navigation menu on mobile/responsive mode */
function toggleNavbar(collapseID) {
	document.getElementById(collapseID).classList.toggle("hidden");
	document.getElementById(collapseID).classList.toggle("bg-white");
	document.getElementById(collapseID).classList.toggle("m-2");
	document.getElementById(collapseID).classList.toggle("py-3");
	document.getElementById(collapseID).classList.toggle("px-6");
}
/* Function for dropdowns */
function openDropdown(event, dropdownID) {
	let element = event.target;
	while (element.nodeName !== "A") {
		element = element.parentNode;
	}
	Popper.createPopper(element, document.getElementById(dropdownID), {
		placement: "bottom-start",
	});
	document.getElementById(dropdownID).classList.toggle("hidden");
	document.getElementById(dropdownID).classList.toggle("block");
}
</script>

<?php
}
?>

</body>

</html>