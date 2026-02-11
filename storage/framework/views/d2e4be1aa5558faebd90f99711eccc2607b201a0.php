<?php $__env->startSection('title', 'NARO Infohub'); ?>

<?php $__env->startSection('content'); ?>
<section class="max-w-7xl mx-auto px-6 py-16 mt-10 rounded-xl"
    style="background: radial-gradient(#d7dfea 1px, transparent 1px); background-size: 28px 28px;">

    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-10 text-center">
        NARO Resource Modules
    </h2>

    <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-4">

        <!-- Fisheries Module -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition duration-300">
            <img src="https://via.placeholder.com/600x400?text=Fisheries+Research"
                 alt="Fisheries Research"
                 class="w-full h-48 object-cover">

            <div class="p-6">
                <h3 class="text-xl font-semibold text-blue-700 mb-3">
                    Fisheries Module
                </h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Access research, innovations, and extension materials focused on sustainable
                    aquaculture, fish breeding, water quality management, and value addition
                    technologies to enhance Uganda’s fisheries sector productivity.
                </p>
            </div>
        </div>

        <!-- Livestock Module -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition duration-300">
            <img src="https://via.placeholder.com/600x400?text=Livestock+Research"
                 alt="Livestock Research"
                 class="w-full h-48 object-cover">

            <div class="p-6">
                <h3 class="text-xl font-semibold text-blue-700 mb-3">
                    Livestock Module
                </h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Explore research findings on animal health, breeding technologies,
                    pasture management, dairy development, and improved livestock
                    productivity systems for farmers across Uganda.
                </p>
            </div>
        </div>

        <!-- Crops Module -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition duration-300">
            <img src="https://via.placeholder.com/600x400?text=Crop+Research"
                 alt="Crop Research"
                 class="w-full h-48 object-cover">

            <div class="p-6">
                <h3 class="text-xl font-semibold text-blue-700 mb-3">
                    Crops Module
                </h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Discover improved crop varieties, pest and disease management
                    solutions, soil fertility innovations, and climate-smart agriculture
                    practices developed by NARO scientists.
                </p>
            </div>
        </div>

        <!-- Forestry Module -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition duration-300">
            <img src="https://via.placeholder.com/600x400?text=Forestry+Research"
                 alt="Forestry Research"
                 class="w-full h-48 object-cover">

            <div class="p-6">
                <h3 class="text-xl font-semibold text-blue-700 mb-3">
                    Forestry Module
                </h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Access knowledge on sustainable forest management, tree
                    improvement programs, agroforestry systems, biodiversity
                    conservation, and climate resilience initiatives in Uganda.
                </p>
            </div>
        </div>

    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.infohub', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projects/NAROinfoHub/resources/views/welcome.blade.php ENDPATH**/ ?>