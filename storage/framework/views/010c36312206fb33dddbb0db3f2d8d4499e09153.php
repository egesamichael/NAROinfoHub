
<header class="bg-white shadow">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between h-16 items-center" x-data="{ open:false }">

      <!-- Desktop Menu -->
      <nav class="hidden md:flex items-center space-x-8">
        <a href="<?php echo e(route('livestock.index')); ?>" class="text-sm font-medium !text-gray-800 <?php echo e(request()->routeIs('livestock.*') ? 'text-indigo-600' : 'text-gray-700 hover:text-indigo-600'); ?>">Livestock</a>
        <a href="<?php echo e(route('crops.index')); ?>" class="text-sm font-medium <?php echo e(request()->routeIs('crops.*') ? 'text-indigo-600' : 'text-gray-700 hover:text-indigo-600'); ?>">Crops</a>
        <a href="<?php echo e(route('forestry.index')); ?>" class="text-sm font-medium <?php echo e(request()->routeIs('forestry.*') ? 'text-indigo-600' : 'text-gray-700 hover:text-indigo-600'); ?>">Forestry</a>
        <a href="<?php echo e(route('fisheries.index')); ?>" class="text-sm font-medium <?php echo e(request()->routeIs('fisheries.*') ? 'text-indigo-600' : 'text-gray-700 hover:text-indigo-600'); ?>">Fisheries</a>

        
        <div x-data="{ fOpen:false }" class="relative">
          <button @click="fOpen = !fOpen" @click.away="fOpen = false"
                  class="text-sm font-medium flex items-center <?php echo e(request()->routeIs('facilities.*') ? 'text-indigo-600' : 'text-gray-700 hover:text-indigo-600'); ?>">
            Facilities
            <svg class="ml-1 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </button>

          <div x-show="fOpen" x-transition class="absolute mt-2 w-60 bg-white rounded-md shadow-lg z-50">
            
            <a href="<?php echo e(route('facilities.anti_tick_vaccine')); ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Anti-Tick Vaccine</a>
            <a href="<?php echo e(route('facilities.greenhouses')); ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Greenhouses</a>
            <a href="<?php echo e(route('facilities.libraries')); ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Libraries</a>
          </div>
        </div>

        <a href="<?php echo e(route('media.index')); ?>" class="text-sm font-medium <?php echo e(request()->routeIs('media.*') ? 'text-indigo-600' : 'text-gray-700 hover:text-indigo-600'); ?>">Media</a>
        <a href="<?php echo e(route('contactus.index')); ?>" class="text-sm font-medium <?php echo e(request()->routeIs('contactus.*') ? 'text-indigo-600' : 'text-gray-700 hover:text-indigo-600'); ?>">Contact Us</a>
      </nav>

      <!-- Mobile button -->
      <div class="flex items-center md:hidden">
        <button @click="open = !open" type="button"
                class="inline-flex items-center justify-center p-2 rounded-md text-gray-600 hover:text-gray-900 hover:bg-gray-100 focus:outline-none"
                aria-controls="mobile-menu" :aria-expanded="open.toString()">
          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            <path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
          </svg>
        </button>
      </div>
    </div>
  </div>

  <!-- Mobile Menu -->
  <nav x-show="open" x-cloak id="mobile-menu" class="md:hidden border-t">
    <div class="px-4 pt-2 pb-3 space-y-1">
      <a href="<?php echo e(route('livestock.index')); ?>" class="block px-3 py-2 rounded-md text-base font-medium <?php echo e(request()->routeIs('livestock.*') ? 'text-indigo-600' : 'text-gray-700 hover:text-indigo-600'); ?>">Livestock</a>
      <a href="<?php echo e(route('crops.index')); ?>" class="block px-3 py-2 rounded-md text-base font-medium <?php echo e(request()->routeIs('crops.*') ? 'text-indigo-600' : 'text-gray-700 hover:text-indigo-600'); ?>">Crops</a>
      <a href="<?php echo e(route('forestry.index')); ?>" class="block px-3 py-2 rounded-md text-base font-medium <?php echo e(request()->routeIs('forestry.*') ? 'text-indigo-600' : 'text-gray-700 hover:text-indigo-600'); ?>">Forestry</a>
      <a href="<?php echo e(route('fisheries.index')); ?>" class="block px-3 py-2 rounded-md text-base font-medium <?php echo e(request()->routeIs('fisheries.*') ? 'text-indigo-600' : 'text-gray-700 hover:text-indigo-600'); ?>">Fisheries</a>

      
      <div x-data="{ mfOpen:false }" class="border-t pt-2">
        <button @click="mfOpen = !mfOpen" class="w-full flex items-center justify-between px-3 py-2 rounded-md text-base font-medium <?php echo e(request()->routeIs('facilities.*') ? 'text-indigo-600' : 'text-gray-700 hover:text-indigo-600'); ?>">
          <span>Facilities</span>
          <svg class="h-4 w-4 transform transition" :class="mfOpen ? 'rotate-180' : ''" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
          </svg>
        </button>
        <div x-show="mfOpen" x-transition class="pl-4 space-y-1">
          <a href="<?php echo e(route('facilities.anti_tick_vaccine')); ?>" class="block px-3 py-2 rounded-md text-base text-gray-700 hover:text-indigo-600">Anti-Tick Vaccine</a>
          <a href="<?php echo e(route('facilities.greenhouses')); ?>" class="block px-3 py-2 rounded-md text-base text-gray-700 hover:text-indigo-600">Laboratories</a>
          <a href="<?php echo e(route('facilities.libraries')); ?>" class="block px-3 py-2 rounded-md text-base text-gray-700 hover:text-indigo-600">Libraries</a>
        </div>
      </div>

      <a href="<?php echo e(route('media.index')); ?>" class="block px-3 py-2 rounded-md text-base font-medium <?php echo e(request()->routeIs('media.*') ? 'text-indigo-600' : 'text-gray-700 hover:text-indigo-600'); ?>">Media</a>
      <a href="<?php echo e(route('contactus.index')); ?>" class="block px-3 py-2 rounded-md text-base font-medium <?php echo e(request()->routeIs('contactus.*') ? 'text-indigo-600' : 'text-gray-700 hover:text-indigo-600'); ?>">Contact Us</a>
    </div>
  </nav>
</header>
<?php /**PATH C:\Users\Praise Web Solutions\NAROinfoHub\resources\views/components/nav.blade.php ENDPATH**/ ?>