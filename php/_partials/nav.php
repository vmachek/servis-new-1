<?php
if ($_SESSION['logged'] !== 'true') {
?>
	<nav class="absolute top-0 z-50 flex flex-wrap items-center justify-between w-full px-2 py-3 navbar-expand-lg">
		<div class="container flex flex-wrap items-center justify-between px-4 mx-auto">
			<div class="relative flex justify-between w-full lg:w-auto lg:static lg:block lg:justify-start">
				<a class="inline-block py-2 mr-4 text-sm font-bold leading-relaxed text-white uppercase whitespace-nowrap" href="https://www.fimak.cz/servis/">Servisní modul <br>
					<small>Fimak s.r.o</small></a>
			</div>
		</div>
	</nav>
<?php
} elseif ($_SESSION['logged'] == 'true') {
?>
	<nav class="relative z-10 flex flex-wrap items-center justify-between px-6 py-4 bg-white shadow-xl md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden md:w-64">
		<div class="flex flex-wrap items-center justify-between w-full px-0 mx-auto md:flex-col md:items-stretch md:min-h-full md:flex-nowrap">
			<button class="px-3 py-1 text-xl leading-none text-black bg-transparent border border-transparent border-solid rounded opacity-50 cursor-pointer md:hidden" type="button" onclick="toggleNavbar('example-collapse-sidebar')">
				<i class="fas fa-bars"></i>
			</button>
			<a class="inline-block p-4 px-0 mr-0 text-sm font-bold text-left uppercase md:block md:pb-2 text-blueGray-600 whitespace-nowrap" href="../../index.html">
				Přehled servisních zásahů <br>
				<small>Firma</small>
			</a>
			<ul class="flex flex-wrap items-center list-none md:hidden">
				<li class="relative inline-block">
					<a class="block px-3 py-1 text-blueGray-500" href="#pablo" onclick="openDropdown(event,'notification-dropdown')"><i class="fas fa-bell"></i></a>
					<div class="z-50 hidden float-left py-2 text-base text-left list-none bg-white rounded shadow-lg min-w-48" id="notification-dropdown">
						<a href="#pablo" class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-blueGray-700">Odhlásit</a>
					</div>
				</li>
				<li class="relative inline-block">
					<a class="block text-blueGray-500" href="#pablo" onclick="openDropdown(event,'user-responsive-dropdown')">
						<div class="flex items-center">
							<span class="inline-flex items-center justify-center w-12 h-12 text-sm text-white rounded-full bg-blueGray-200"><img alt="..." class="w-full align-middle border-none rounded-full shadow-lg" src="../../assets/img/team-1-800x800.jpg" /></span>
						</div>
					</a>
					<div class="z-50 hidden float-left py-2 text-base text-left list-none bg-white rounded shadow-lg min-w-48" id="user-responsive-dropdown">
						<a href="#pablo" class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-blueGray-700">Odhlásit</a>
					</div>
				</li>
			</ul>
			<div class="absolute top-0 left-0 right-0 z-40 items-center flex-1 hidden h-auto overflow-x-hidden overflow-y-auto rounded shadow md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none" id="example-collapse-sidebar">
				<div class="block pb-4 mb-4 border-b border-solid md:min-w-full md:hidden border-blueGray-200">
					<div class="flex flex-wrap">
						<div class="w-6/12">
							<a class="inline-block p-4 px-0 mr-0 text-sm font-bold text-left uppercase md:block md:pb-2 text-blueGray-600 whitespace-nowrap" href="../../index.html">
								Přehled servisních zásahů <br>
								<small>Firma</small>
							</a>
						</div>
						<div class="flex justify-end w-6/12">
							<button type="button" class="px-3 py-1 text-xl leading-none text-black bg-transparent border border-transparent border-solid rounded opacity-50 cursor-pointer md:hidden" onclick="toggleNavbar('example-collapse-sidebar')">
								<i class="fas fa-times"></i>
							</button>
						</div>
					</div>
				</div>
				<!-- Divider -->
				<hr class="my-4 md:min-w-full" />
				<!-- Heading -->
				<h6 class="block pt-1 pb-4 text-xs font-bold no-underline uppercase md:min-w-full text-blueGray-500">
					Menu
				</h6>
				<!-- Navigation -->

				<ul class="flex flex-col list-none md:flex-col md:min-w-full">
					<li class="items-center">
						<a href="./dashboard.html" class="block py-3 text-xs font-bold text-indigo-500 uppercase hover:text-indigo-600">
							<i class="mr-2 text-sm opacity-75 fas fa-tv"></i>
							Přehled
						</a>
					</li>

					<li class="items-center">
						<a href="./tables.html" class="block py-3 text-xs font-bold uppercase text-blueGray-700 hover:text-blueGray-500">
							<i class="mr-2 text-sm fas fa-table text-blueGray-300"></i>
							Archiv
						</a>
					</li>

					<!-- Divider -->
					<hr class="my-4 md:min-w-full" />

					<li class="items-center">
						<a href="./settings.html" class="block py-3 text-xs font-bold uppercase text-blueGray-700 hover:text-blueGray-500">
							<i class="mr-2 text-sm fas fa-tools text-blueGray-300"></i>
							Nastavení
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
<?php
}
?>