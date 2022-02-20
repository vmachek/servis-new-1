			<!-- Header -->
			<div class="relative pt-12 pb-32 bg-indigo-600 md:pt-32">
				<div class="w-full px-4 mx-auto md:px-10">
					<div>
						<!-- Card stats -->
						<div class="flex flex-wrap">
							<div class="w-full px-4 lg:w-6/12 xl:w-3/12">
								<div class="relative flex flex-col min-w-0 mb-6 break-words bg-white rounded shadow-lg xl:mb-0">
									<div class="flex-auto p-4">
										<div class="flex flex-wrap">
											<div class="relative flex-1 flex-grow w-full max-w-full pr-4">
												<h5 class="text-xs font-bold uppercase text-blueGray-400">
													Hodin měsíčně dle smlouvy
												</h5>
												<span class="text-xl font-semibold text-blueGray-700">
													3
												</span>
											</div>
											<div class="relative flex-initial w-auto pl-4">
												<div class="inline-flex items-center justify-center w-12 h-12 p-3 text-center text-white bg-red-500 rounded-full shadow-lg">
													<i class="far fa-chart-bar"></i>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>
							<div class="w-full px-4 lg:w-6/12 xl:w-3/12">
								<div class="relative flex flex-col min-w-0 mb-6 break-words bg-white rounded shadow-lg xl:mb-0">
									<div class="flex-auto p-4">
										<div class="flex flex-wrap">
											<div class="relative flex-1 flex-grow w-full max-w-full pr-4">
												<h5 class="text-xs font-bold uppercase text-blueGray-400">
													Čerpáno hodin
												</h5>
												<span class="text-xl font-semibold text-blueGray-700">
													2,5
												</span>
											</div>
											<div class="relative flex-initial w-auto pl-4">
												<div class="inline-flex items-center justify-center w-12 h-12 p-3 text-center text-white bg-orange-500 rounded-full shadow-lg">
													<i class="fas fa-chart-pie"></i>
												</div>
											</div>
										</div>
										<p class="mt-4 text-sm text-blueGray-400">
											<span class="mr-2 text-red-500">
												<i class="fas fa-arrow-down"></i> 1,5
											</span>
											<span class="mr-2 text-emerald-500">
												<i class="fas fa-arrow-up"></i> 3
											</span>
											<span class="whitespace-nowrap">Minulý měsíc</span>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="w-full px-4 mx-auto -m-24 md:px-10">
				<?php
				if ($_SESSION['rule'] == 'admin') {
					require_once "_admin/admin.php";
				} elseif ($_SESSION['rule'] == 'user') {
					require_once "_user/user.php";
				}
				?>
				<footer class="block py-4">
					<div class="container px-4 mx-auto">
						<hr class="mb-4 border-b-1 border-blueGray-200" />
						<div class="flex flex-wrap items-center justify-center md:justify-between">
							<div class="w-full px-4 md:w-4/12">
								<div class="py-1 text-sm font-semibold text-center text-blueGray-500 md:text-left">
									<a href="https://www.fimak.cz/" class="py-1 text-sm font-semibold text-blueGray-500 hover:text-blueGray-700">
										Fimak s.r.o.
									</a>
								</div>
							</div>
						</div>
					</div>
				</footer>
			</div>
			</div>