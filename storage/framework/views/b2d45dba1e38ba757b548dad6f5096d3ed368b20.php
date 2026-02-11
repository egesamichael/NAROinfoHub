<div class="w-full max-w-none py-8">

    <div class="flex flex-col lg:flex-row gap-8">

        <!-- LEFT SIDE -->
        <div class="flex-1 min-w-0 space-y-6">

            <!-- Hero Card -->
            <div class="bg-gradient-to-r from-emerald-600 to-teal-500 text-white rounded-xl p-8 shadow-md">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm uppercase tracking-wide opacity-90">Total Commodities</p>

                        <h2 class="mt-2 text-4xl font-bold"><?php echo e($counts['commodities']); ?></h2>

                        <p class="mt-2 text-sm opacity-80">Real-time data from system database</p>
                    </div>

                    <div class="text-right">
                        <p class="text-xs uppercase tracking-wide opacity-80">Management</p>

                        <a href="/admin/resources/commodities" class="mt-4 inline-flex items-center px-4 py-2 bg-white text-emerald-700 text-sm font-semibold rounded-lg shadow-sm hover:bg-gray-100 transition">View Commodities</a>
                    </div>
                </div>
            </div>

            <!-- Quick Crop Admin Links -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                <p class="text-sm text-gray-500 uppercase tracking-wide">Crop Admin</p>
                <div class="mt-4 flex flex-wrap gap-3">
                    <a href="/admin/crops" class="px-3 py-2 bg-emerald-50 text-emerald-700 rounded">Manage Crops</a>
                    <a href="/admin/categories" class="px-3 py-2 bg-emerald-50 text-emerald-700 rounded">Manage Categories</a>
                    <a href="/admin/items" class="px-3 py-2 bg-emerald-50 text-emerald-700 rounded">Manage Items/Varieties</a>
                    <a href="/crops" class="px-3 py-2 bg-gray-50 text-gray-700 rounded">Public Crops Page</a>
                </div>
                <p class="mt-3 text-xs text-gray-500">Create the following category types per crop: Good Agronomic practices, On-going projects, Post-harvest handling, Seed Source, Value addition, Variety.</p>
            </div>

            <!-- Stats summary -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                    <p class="text-sm text-gray-500 uppercase tracking-wide">Categories</p>
                    <p class="mt-2 text-3xl font-semibold text-gray-800"><?php echo e($counts['commodity_categories']); ?></p>
                </div>
                <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                    <p class="text-sm text-gray-500 uppercase tracking-wide">Varieties</p>
                    <p class="mt-2 text-3xl font-semibold text-gray-800"><?php echo e($counts['commodity_varieties']); ?></p>
                </div>
                <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                    <p class="text-sm text-gray-500 uppercase tracking-wide">Crops</p>
                    <p class="mt-2 text-3xl font-semibold text-gray-800"><?php echo e($counts['crops']); ?></p>
                </div>
            </div>

        </div>

        <!-- RIGHT SIDEBAR -->
        <aside class="w-full lg:w-1/3 space-y-6">

            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                <p class="text-sm text-gray-500 uppercase tracking-wide">Livestock</p>
                <p class="mt-2 text-3xl font-semibold text-gray-800"><?php echo e($counts['livestock']); ?></p>
            </div>

            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                <p class="text-sm text-gray-500 uppercase tracking-wide">Resources</p>
                <p class="mt-2 text-3xl font-semibold text-gray-800"><?php echo e($counts['resources']); ?></p>
            </div>

            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                <p class="text-sm text-gray-500 uppercase tracking-wide">Users</p>
                <p class="mt-2 text-3xl font-semibold text-gray-800"><?php echo e($counts['users']); ?></p>
            </div>

        </aside>

    </div>

</div><?php /**PATH /var/www/projects/NAROinfoHub/resources/views/filament/pages/dashboard.blade.php ENDPATH**/ ?>