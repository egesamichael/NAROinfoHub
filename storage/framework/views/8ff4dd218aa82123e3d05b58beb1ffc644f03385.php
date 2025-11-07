<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>NARO Infohub</title>

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

<!-- Tailwind (compiled via Mix) -->
<link rel="stylesheet" href="<?php echo e(mix('css/app.css')); ?>">
<script src="<?php echo e(mix('js/app.js')); ?>" defer></script>

<!-- Helpers -->
<style>[x-cloak]{ display:none !important; }</style>

<!-- Livewire -->
<?php echo \Livewire\Livewire::styles(); ?>

</head>

    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <?php if(Route::has('login')): ?>
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/dashboard')); ?>" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        <?php if(Route::has('register')): ?>
                            <a href="<?php echo e(route('register')); ?>" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                        <g clip-path="url(#clip0)" fill="#EF3B2D">
                            <path d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z"/>
                        </g>
                    </svg>
                </div>


                          <!-- Dxsn code start -->
                          <!-- Top Navigation -->
<header x-data="{ open: false }" class="bg-white border-b">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Brand -->
            <div class="flex items-center">
                <a href="<?php echo e(route('home')); ?>" class="text-xl font-semibold text-gray-900">
                    NARO InfoHub
                </a>
            </div>

            <!-- Desktop Menu -->
  <nav class="flex items-center space-x-8">
      <a href="<?php echo e(route('livestock.index')); ?>" class="text-sm font-medium !text-gray-800 <?php echo e(request()->routeIs('livestock.*') ? 'text-indigo-600' : 'text-gray-700 hover:text-indigo-600'); ?>">Livestock</a>
      <a href="<?php echo e(route('crops.index')); ?>" class="text-sm font-medium <?php echo e(request()->routeIs('crops.*') ? 'text-indigo-600' : 'text-gray-700 hover:text-indigo-600'); ?>">Crops</a>
      <a href="<?php echo e(route('forestry.index')); ?>" class="text-sm font-medium <?php echo e(request()->routeIs('forestry.*') ? 'text-indigo-600' : 'text-gray-700 hover:text-indigo-600'); ?>">Forestry</a>
      <a href="<?php echo e(route('fisheries.index')); ?>" class="text-sm font-medium <?php echo e(request()->routeIs('fisheries.*') ? 'text-indigo-600' : 'text-gray-700 hover:text-indigo-600'); ?>">Fisheries</a>

      <!-- Facilities Dropdown -->
      <div x-data="{ open: false }" class="relative">
          <button @click="open = !open" @click.away="open = false"
              class="text-sm font-medium flex items-center <?php echo e(request()->routeIs('facilities.*') ? 'text-indigo-600' : 'text-gray-700 hover:text-indigo-600'); ?>">
              Facilities
              <svg class="ml-1 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
          </button>

          <div x-show="open" x-transition
              class="absolute mt-2 w-60 bg-white rounded-md shadow-lg z-50">
              <a href="<?php echo e(route('facilities.anti_tick_vaccine')); ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Anti-Tick Vaccine</a>
              <a href="<?php echo e(route('facilities.greenhouses')); ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Aflasafe</a>
              <a href="<?php echo e(route('facilities.libraries')); ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Libraries</a>
          </div>
      </div>

      <a href="<?php echo e(route('media.index')); ?>" class="block px-3 py-2 rounded-md text-base font-medium <?php echo e(request()->routeIs('media.*') ? 'text-indigo-600' : 'text-gray-700 hover:text-indigo-600'); ?>">Media</a>
      <a href="<?php echo e(route('contactus.index')); ?>" class="block px-3 py-2 rounded-md text-base font-medium <?php echo e(request()->routeIs('contactus.*') ? 'text-indigo-600' : 'text-gray-700 hover:text-indigo-600'); ?>">Contact Us</a>
  </nav>


            <!-- Mobile button -->
            <div class="flex items-center md:hidden">
                <button @click="open = !open" type="button"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-600 hover:text-gray-900 hover:bg-gray-100 focus:outline-none"
                        aria-controls="mobile-menu" :aria-expanded="open.toString()">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor">
                        <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                        <path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <nav x-show="open" x-cloak id="mobile-menu" class="md:hidden border-t">
        <div class="px-4 pt-2 pb-3 space-y-1">
            <a href="<?php echo e(route('livestock.index')); ?>"
               class="block px-3 py-2 rounded-md text-base font-medium <?php echo e(request()->routeIs('livestock.*') ? 'text-indigo-600' : 'text-gray-700 hover:text-indigo-600'); ?>">
                Livestock
            </a>
            <a href="<?php echo e(route('crops.index')); ?>"
               class="block px-3 py-2 rounded-md text-base font-medium <?php echo e(request()->routeIs('crops.*') ? 'text-indigo-600' : 'text-gray-700 hover:text-indigo-600'); ?>">
                Crops
            </a>
            <a href="<?php echo e(route('forestry.index')); ?>"
               class="block px-3 py-2 rounded-md text-base font-medium <?php echo e(request()->routeIs('forestry.*') ? 'text-indigo-600' : 'text-gray-700 hover:text-indigo-600'); ?>">
                Forestry
            </a>
            <a href="<?php echo e(route('fisheries.index')); ?>"
               class="block px-3 py-2 rounded-md text-base font-medium <?php echo e(request()->routeIs('fisheries.*') ? 'text-indigo-600' : 'text-gray-700 hover:text-indigo-600'); ?>">
                Fisheries
            </a>
            <a href="<?php echo e(route('facilities.index')); ?>"
               class="block px-3 py-2 rounded-md text-base font-medium <?php echo e(request()->routeIs('facilities.*') ? 'text-indigo-600' : 'text-gray-700 hover:text-indigo-600'); ?>">
                Facilities
            </a>
            <a href="<?php echo e(route('media.index')); ?>"
               class="block px-3 py-2 rounded-md text-base font-medium <?php echo e(request()->routeIs('media.*') ? 'text-indigo-600' : 'text-gray-700 hover:text-indigo-600'); ?>">
                Media
            </a>
            <a href="<?php echo e(route('contactus.index')); ?>"
               class="block px-3 py-2 rounded-md text-base font-medium <?php echo e(request()->routeIs('contactus.*') ? 'text-indigo-600' : 'text-gray-700 hover:text-indigo-600'); ?>">
                Contact Us
            </a>

        </div>
    </nav>
</header>
                          <!-- Dxsn code end -->
<!-- banner img -->

<section class="relative mt-16 sm:mt-20">
    <div class="relative h-56 sm:h-72 md:h-[28rem]">
        
        <img
    src="<?php echo e(asset('images/infohub_banner2.png')); ?>"
    alt="NARO InfoHub banner"
    class="block w-full h-56 sm:h-72 md:h-[420px] object-cover"
    loading="lazy"
>

</div>
</section>

<!-- end bannaer img -->


                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="#" class="underline text-gray-900 dark:text-white">Services</a></div>
                            </div>

                            <div class="max-w-7xl mx-auto px-6">
                                <h2 class="text-2xl font-bold">Micro Studies & Other Surveys</h2>
                                <p class="mt-4 text-gray-600">Deep dives into micro-enterprises (1–4 workers) and specialized topics like innovation, climate, and animal health.</p>
                                <div class="mt-6 flex flex-wrap gap-3">
                                    <a href="<?php echo e(url('#indicators')); ?>" class="inline-flex items-center px-4 py-2 rounded-lg bg-indigo-600 text-white hover:bg-indigo-700">Indicators</a>
                                    <a href="<?php echo e(url('#surveys')); ?>" class="inline-flex items-center px-4 py-2 rounded-lg bg-white border hover:bg-gray-50">Browse Surveys</a>
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="#" class="underline text-gray-900 dark:text-white">Technologies</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">Fact Sheet</a></div>
                            </div>
                            <div class="max-w-7xl mx-auto px-6">
                                <h2 class="text-2xl font-bold">NARO Fact Sheet</h2>
                                <p class="mt-4 text-gray-600">Tailored approaches to characterize unregistered producers and value-chain actors not captured in formal listings.</p>
                                <div class="mt-6 flex flex-wrap gap-3">
                                    <a href="<?php echo e(route('crops.index')); ?>" class="inline-flex items-center px-4 py-2 rounded-lg bg-indigo-600 text-white hover:bg-indigo-700">Explore Indicators</a>
                                    <a href="<?php echo e(url('#surveys')); ?>" class="inline-flex items-center px-4 py-2 rounded-lg bg-white border hover:bg-gray-50">Browse Surveys</a>
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>, and <a href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- =========================== LATEST & BLOGS (side-by-side) =========================== -->
              <section class="py-12 bg-white">
              <div class="max-w-7xl mx-auto px-6">
              <div class="grid gap-10 lg:grid-cols-2">
              <!-- Latest Research -->
              <div>
              <div class="flex items-center justify-between">
              <h2 class="text-2xl font-bold">Latest Research</h2>
              <a href="#" class="text-indigo-600 hover:text-indigo-700">View more</a>
              </div>
              <ul class="mt-6 space-y-6">
              <li class="border-b pb-4">
              <span class="text-xs uppercase text-gray-500">Policy Brief • Feb 19, 2025</span>
              <a href="#" class="mt-1 block text-lg font-semibold hover:underline">Technology adoption and standards in agro-processing</a>
              </li>
              <li class="border-b pb-4">
              <span class="text-xs uppercase text-gray-500">Working Paper • Jan 13, 2025</span>
              <a href="#" class="mt-1 block text-lg font-semibold hover:underline">Returns to micro‑entrepreneurship in rural markets</a>
              </li>
              <li class="border-b pb-4">
              <span class="text-xs uppercase text-gray-500">Working Paper • Jan 08, 2025</span>
              <a href="#" class="mt-1 block text-lg font-semibold hover:underline">Informality and certification in agribusiness</a>
              </li>
              </ul>
              </div>

              <!-- Blogs & Briefs -->
              <div class="bg-gray-50 rounded-2xl p-6">
              <div class="flex items-center justify-between">
              <h2 class="text-2xl font-bold">Blogs & Briefs</h2>
              <a href="#" class="text-indigo-600 hover:text-indigo-700">View more</a>
              </div>
              <ul class="mt-6 space-y-4">
              <li class="bg-white rounded-xl p-5 shadow">
              <span class="text-xs uppercase text-gray-500">Mar 04, 2025</span>
              <a href="#" class="mt-1 block text-lg font-semibold hover:underline">Field insights from tea value‑chains</a>
              </li>
              <li class="bg-white rounded-xl p-5 shadow">
              <span class="text-xs uppercase text-gray-500">Nov 25, 2024</span>
              <a href="#" class="mt-1 block text-lg font-semibold hover:underline">Financing constraints and productivity</a>
              </li>
              <li class="bg-white rounded-xl p-5 shadow">
              <span class="text-xs uppercase text-gray-500">Oct 23, 2024</span>
              <a href="#" class="mt-1 block text-lg font-semibold hover:underline">Revealing tax evasion in agrifood sectors</a>
              </li>
              </ul>
              </div>
              </div>
              </div>
              </section>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                    &copy; <?php echo e(date('Y')); ?> NARO infoHub. All Rights Reserved.
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<?php /**PATH C:\Users\Praise Web Solutions\NAROinfoHub\resources\views/welcome2.blade.php ENDPATH**/ ?>