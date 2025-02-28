<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<div class="flex font-body content-around w-auto bg-header m-0 p-0  border border-white">
	<div class="box-logo w-1/4 flex ">
		<div class="box-lo w-1/2 h-40 bg-slate-200 "></div>
		<a class="text-center items-center w-1/2 " href="/mywordpress">
			<video class=" object-cover h-40 w-full box-radius shadow-white " autoplay muted loop>
				<source
					src="http://localhost/mywordpress/wp-content/uploads/2025/02/logo.mov"
					type="video/mp4"
				/>
			</video>
		</a>
		
	</div>
	<header class=" w-3/4 m-0 p-0">
		<nav class="bg-header ">
		<div class="">
			<div class="relative flex h-20 items-center justify-between">
			<div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
				<!-- Mobile menu button-->
				<button type="button" onclick="ToggleMenu(this)" name="menu" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
				<span class="absolute -inset-0.5"></span>
				<span class="sr-only">Open main menu</span>

				<svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
					<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
				</svg>

				<svg class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
					<path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
				</svg>
				</button>
			</div>
			<div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
				<div class="hidden sm:ml-6 sm:block">
				<div class="flex space-x-4">
					<ul class="flex flex-wrap items-center  text-sm">

					<li
						class="relative flex items-center font-body"
						x-data="{ open: false }"
						@mouseenter="open = true"
						@mouseleave="open = false">
						<a
						class="rounded-md mb-1 py-2 hover-menu text-sm font-body text-gray-700  hover:text-white"
						href="#0" 
						:aria-expanded="open">LIVE SCHEDULES</a>

						<ul
						class="origin-top-right box-hover absolute z-50 top-full left-1/2 -translate-x-1/2  bg-white border border-slate-200 p-2 rounded-lg shadow-xl [&[x-cloak]]:hidden"
						x-show="open"
						x-transition:enter="transition ease-out duration-200 transform"
						x-transition:enter-start="opacity-0 -translate-y-2"
						x-transition:enter-end="opacity-100 translate-y-0"
						x-transition:leave="transition ease-out duration-200"
						x-transition:leave-start="opacity-100"
						x-transition:leave-end="opacity-0"
						x-cloak
						@focusout="await $nextTick();!$el.contains($focus.focused()) && (open = false)">
						<li>
							<a class="text-slate-800 hover-menu1 flex items-center p-2" href="#">
								<div class="flex  items-center justify-center  shadow-sm w-10 h-10 shrink-0 mr-3">
									<!-- <svg class="fill-indigo-500" xmlns="http://www.w3.org/2000/svg" width="9" height="12">
									<path d="M8.724.053A.5.5 0 0 0 8.2.1L4.333 3H1.5A1.5 1.5 0 0 0 0 4.5v3A1.5 1.5 0 0 0 1.5 9h2.833L8.2 11.9a.5.5 0 0 0 .8-.4V.5a.5.5 0 0 0-.276-.447Z" />
									</svg> -->
									<img class="w-full h-full" src="https://demnay.hair/icon/10hover.webp" alt="">
								</div>
								<span class="whitespace-nowrap ">FOOTBALL</span>
							</a>
						</li>
						<li class="py-4">
							<a class=" hover-menu1 font-body text-slate-800 flex items-center p-2" href="#">
							<div class="flex items-center justify-center shadow-sm w-10 h-10 shrink-0 mr-3">
								<img class="w-full h-full" src="https://demnay.hair/icon/40hover.webp" alt="">
							</div>
							<span class="whitespace-nowrap">MARBLE</span>
							</a>
						</li>
						<li class="py-4">
							<a class="font-body text-slate-800 hover-menu1 flex items-center p-2" href="#">
							<div class="flex items-center justify-center shadow-sm w-10 h-10 shrink-0 mr-3">
								<img class="w-full h-full" src="https://demnay.hair/icon/20hover.webp" alt="">
							</div>
							<span class="whitespace-nowrap">BASKIBALL</span>
							</a>
						</li>
						<li class="py-4">
							<a class="font-body text-slate-800 hover-menu1 flex items-center p-2" href="#">
							<div class="flex items-center justify-center hover-menu1 shadow-sm w-10 h-10 shrink-0 mr-3">
								<img class="w-full h-full" src="https://demnay.hair/icon/30hover.webp" alt="">
							</div>
							<span class="whitespace-nowrap">ESPORT</span>
							</a>
						</li>

						<li class="py-4">
							<a class="font-body text-slate-800 hover-menu1 flex items-center p-2" href="#">
							<div class="flex items-center justify-center hover-menu1 shadow-sm w-10 h-10 shrink-0 mr-3">
								<img class="w-full h-full" src="https://demnay.hair/icon/50hover.webp" alt="">
							</div>
							<span class="whitespace-nowrap">CASINO</span>
							</a>
						</li>
						</ul>
					</li>

					<li class="">
						<a href="#" class="font-body rounded-md hover-menu px-10 py-2 text-sm  text-gray-700  hover:text-white">ODD RATE</a>
					</li>
					<li class="">
						<a href="#" class="font-body rounded-md hover-menu px-10 py-2 text-sm  text-gray-700  hover:text-white">SCHEDULES</a>
					</li>
					<li class="">
						<a href="#" class="font-body rounded-md hover-menu px-10 py-2 text-sm  text-gray-700  hover:text-white">RESULT</a>
					</li>
					<li class="">
						<a href="#" class="font-body rounded-md hover-menu px-10 py-2 text-sm  text-gray-700  hover:text-white">ROOM CHAT</a>
					</li>
					<li class="">
						<a href="#" class="font-body rounded-md hover-menu px-10 py-2 text-sm  text-gray-700  hover:text-white">NEWS</a>
					</li>

					<li class="">
						<a href="#" class="font-body rounded-md bg-header border border-slate-400 text-gray-700   px-3 py-2 text-sm font-medium   hover:text-white">Register</a>
					</li>
					<li class="">
						<a href="#" class="font-body rounded-md mx-8 bg-header border border-slate-400 text-gray-700   px-3 py-2 text-sm font-medium   hover:text-white">Login</a>
					</li>
					<!-- <li class="">
						<a href="#" class="font-body rounded-md px-3 py-2 text-sm text-gray-700  hover:text-white font-medium   ">Number</a>
					</li> -->
					<li class="py-4">
						<a class="font-body text-slate-800 hover-menu1 flex items-center p-2" href="#">
						<div class="flex items-center justify-center hover-menu1 shadow-sm w-10 h-10 shrink-0 mr-3">
							<img class="w-full h-full" src="https://demnay.hair/_amplify/image?url=%2Fuser%2Fframeavatar.png&w=1536&q=100" alt="">
						</div>
						</a>
					</li>

					</ul>
					</div>
				</div>
			</div>
			<!-- <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
				<button type="button" class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
				<span class="absolute -inset-1.5"></span>
				<span class="sr-only">View notifications</span>
				<svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
					<path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
				</svg>
				</button>
				<div class="relative ml-3">
				<div>
					<button onclick="profileOption(this)" type="button" class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
					<span class="absolute -inset-1.5"></span>
					<span class="sr-only">Open user menu</span>
					<img class="size-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
					</button>
				</div>
				<div class="profile-option hidden absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black/5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
					<a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
					<a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
					<a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
				</div>
				</div>
			</div> -->
			</div>
		</div>

		<!-- Mobile menu, show/hide based on menu state. -->
		<div class="menu-link sm:hidden" id="mobile-menu">
			<div class="space-y-1 px-2 pb-3 pt-2">
			<a href="#" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white" aria-current="page">Dashboard</a>
			<a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Team</a>
			<a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Projects</a>
			<a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Calendar</a>
			</div>
		</div>
		</nav>
		<nav class=" bg-slate-300">
		<div class="">
			<div class="relative flex h-20 items-center justify-between">
			<div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
				</div>
			<div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
				
				<div class="hidden sm:ml-6 sm:block">
				<div class="flex space-x-4">
					<ul class="flex flex-wrap items-center font-sans font-bold  text-sm">

					<li
						class="relative flex items-center hover-menu2"
						x-data="{ open: false }"
						@mouseenter="open = true"
						@mouseleave="open = false">
						<!-- <i class="fa-solid fa-file font-body"></i> -->
						<img class="w-10 h-10" src="https://image.naybank.com/demnaylive/2025-01-15/4d30c77f333e642cd6c34681f40da8af.svg" alt="">

						<a
						class="font-body rounded-md px-3 py-2 text-sm hover:text-white"
						href="#0"
						:aria-expanded="open"> Newsfeed</a>
					</li>

					<li class="font-body px-10 flex items-center hover-menu2">
						<img class="w-10 h-10" src="https://image.naybank.com/demnaylive/2025-01-15/ff76762f45afc086c9c869962377c9e1.svg" alt="">
						<a class="font-body rounded-md px-3 py-2 text-sm hover:text-white" href="#">Reels</a>
					</li>

					<li class="font-body px-10 flex items-center hover-menu2">
						<img class="w-10 h-10" src="https://image.naybank.com/demnaylive/2025-01-15/6c48c7c0acc2e2d71da6cf602784646c.svg" alt="">
						<a class="font-body rounded-md px-3 py-2 text-sm hover:text-white" href="#">Highlight</a>
					</li>

					<li class="font-body px-10 flex items-center hover-menu2">
						<img class="w-10 h-10" src="https://image.naybank.com/demnaylive/2025-01-15/561d29f38fe1219329193690c29f7de0.svg" alt="">
						<a class="font-body rounded-md px-3 py-2 text-sm hover:text-white" href="#">Odd Tip</a>
					</li>

					<li class="font-body px-10 flex items-center hover-menu2">
						<img class="w-10 h-10" src="https://image.naybank.com/demnaylive/2025-01-15/19f6c0fddb336290a45aa2d10d453369.svg" alt="">
						<a class="font-body rounded-md px-3 py-2 text-sm hover:text-white" href="#">Movie</a>
					</li>

					<li class="font-body px-10 flex items-center hover-menu2">
						<img class="w-10 h-10" src="https://image.naybank.com/demnaylive/2025-01-15/da9480c41c38cc795a47f7a8b100334d.svg" alt="">
						<a class="font-body rounded-md px-3 py-2 text-sm hover:text-white" href="#">Comic</a>
					</li>

					<li class="font-body px-10 flex items-center hover-menu2">
						<img class="w-10 h-10" src="https://demnay.hair/_amplify/image?url=%2FflagLanguages%2Funitedkingdom.svg&w=1536&q=100" alt="">
						<a class="font-body rounded-md px-3 py-2 text-sm hover:text-white" href="#">ENGLISH</a>
					</li>

					
					</ul>
				</div>
				</div>
			</div>
			</div>
		</div>

		
		</nav>
	</header>
	</div>

	<?php 
	// do_action('bloghash_after_masthead', 'after_header'); 
	?>

  <script>
    function ToggleMenu(e) {
      const navLink = document.querySelector('.menu-link');
      if (navLink.classList.contains('hidden')) {
        navLink.classList.remove('hidden');
        e.setAttribute('aria-expanded', 'true');
      } else {
        navLink.classList.add('hidden');
        e.setAttribute('aria-expanded', 'false');
      }
    }

    function profileOption(e) {
      const Option = document.querySelector('.profile-option');
      if (Option.classList.contains('hidden')) {
        Option.classList.remove('hidden');
        e.setAttribute('aria-expanded', 'true');
      } else {
        Option.classList.add('hidden');
        e.setAttribute('aria-expanded', 'false');
      }
    }
  </script>

  <!-- <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/focus@3.x.x/dist/cdn.min.js"></script>
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> -->

  <?php wp_footer(); ?>
</body>

</html>				