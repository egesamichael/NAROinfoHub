<div class="p-6">
    <h2 class="text-xl font-semibold mb-4">Crops Manager</h2>

    <?php if(session()->has('message')): ?>
        <div class="mb-4 p-2 bg-green-100 text-green-800 rounded"><?php echo e(session('message')); ?></div>
    <?php endif; ?>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="md:col-span-2">
            <table class="w-full bg-white shadow rounded">
                <thead>
                    <tr class="text-left">
                        <th class="px-4 py-2">Name</th>
                        <th class="px-4 py-2">Slug</th>
                        <th class="px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $crops; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $crop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="border-t">
                            <td class="px-4 py-2"><?php echo e($crop['name']); ?></td>
                            <td class="px-4 py-2"><?php echo e($crop['slug']); ?></td>
                            <td class="px-4 py-2">
                                <button wire:click="editCrop(<?php echo e($crop['id']); ?>)" class="mr-2 px-2 py-1 bg-blue-500 text-white rounded">Edit</button>
                                <button wire:click="deleteCrop(<?php echo e($crop['id']); ?>)" class="px-2 py-1 bg-red-500 text-white rounded">Delete</button>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>

        <div class="bg-white shadow rounded p-4">
            <h3 class="font-semibold mb-2"><?php if($editingId): ?> Edit <?php else: ?> New <?php endif; ?> Crop</h3>
            <div class="mb-2">
                <label class="block text-sm">Name</label>
                <input wire:model.defer="name" class="w-full border rounded px-2 py-1" />
                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-600 text-sm"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="mb-2">
                <label class="block text-sm">Slug</label>
                <input wire:model.defer="slug" class="w-full border rounded px-2 py-1" />
                <?php $__errorArgs = ['slug'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-600 text-sm"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="mb-2">
                <label class="block text-sm">Description</label>
                <textarea wire:model.defer="description" class="w-full border rounded px-2 py-1"></textarea>
            </div>
            <div class="flex gap-2">
                <?php if($editingId): ?>
                    <button wire:click="updateCrop" class="px-3 py-2 bg-green-600 text-white rounded">Update</button>
                    <button wire:click="resetForm" class="px-3 py-2 bg-gray-300 rounded">Cancel</button>
                <?php else: ?>
                    <button wire:click="createCrop" class="px-3 py-2 bg-green-600 text-white rounded">Create</button>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /var/www/projects/NAROinfoHub/resources/views/livewire/admin/crops-manager.blade.php ENDPATH**/ ?>