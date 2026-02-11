<?php $__env->startSection('content'); ?>
<div class="container my-5">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <a href="<?php echo e(route('facilities.anti_tick_vaccine')); ?>" class="text-blue-600 hover:text-blue-800 mb-4 inline-block">
            ← Back to Anti-Tick Vaccine
        </a>
        
        <h1 class="text-3xl font-bold mb-6">Publications - Anti-Tick Vaccine</h1>
        
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-2xl font-semibold mb-4">Research & Publications</h2>
            <p class="mb-4">
                Browse our collection of research papers, studies, and technical publications related to the anti-tick vaccine.
            </p>
            
            <h3 class="text-xl font-semibold mb-3">Recent Publications:</h3>
            <div class="space-y-4">
                <div class="border-l-4 border-blue-500 pl-4 py-2">
                    <h4 class="font-semibold">Efficacy of NARO Anti-tick Vaccine in Cattle</h4>
                    <p class="text-sm text-gray-600">Published: 2024</p>
                    <p class="text-sm">A comprehensive study on the effectiveness of the vaccine in reducing tick infestations.</p>
                </div>
                
                <div class="border-l-4 border-blue-500 pl-4 py-2">
                    <h4 class="font-semibold">Economic Impact of Anti-tick Vaccination</h4>
                    <p class="text-sm text-gray-600">Published: 2024</p>
                    <p class="text-sm">Analysis of cost-benefit ratios for farmers using the anti-tick vaccine.</p>
                </div>
                
                <div class="border-l-4 border-blue-500 pl-4 py-2">
                    <h4 class="font-semibold">Field Trial Results in Uganda</h4>
                    <p class="text-sm text-gray-600">Published: 2023</p>
                    <p class="text-sm">Results from large-scale field trials across different regions of Uganda.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projects/NAROinfoHub/resources/views/sections/facilities/anti_tick_vaccine/publications.blade.php ENDPATH**/ ?>