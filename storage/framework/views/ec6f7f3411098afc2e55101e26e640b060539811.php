<div class="max-w-4xl mx-auto">
  <div class="flex items-center justify-between mb-4">
    <h2 class="text-lg font-semibold">Topics</h2>
    <div>
      <button wire:click="create" class="px-4 py-2 bg-green-600 text-white rounded">New Topic</button>
    </div>
  </div>

  <?php if(session()->has('message')): ?>
    <div class="mb-4 text-sm text-green-700"><?php echo e(session('message')); ?></div>
  <?php endif; ?>

  <table class="w-full bg-white rounded shadow">
    <thead>
      <tr class="text-left">
        <th class="px-4 py-2">Name</th>
        <th class="px-4 py-2">Status</th>
        <th class="px-4 py-2">Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php $__currentLoopData = $topics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr class="border-t">
          <td class="px-4 py-2"><?php echo e($t->name); ?></td>
          <td class="px-4 py-2"><?php echo e($t->status ? 'Active' : 'Inactive'); ?></td>
          <td class="px-4 py-2">
            <button wire:click="edit(<?php echo e($t->id); ?>)" class="px-2 py-1 bg-yellow-400 rounded mr-2">Edit</button>
            <button wire:click="delete(<?php echo e($t->id); ?>)" onclick="return confirm('Delete this topic?')" class="px-2 py-1 bg-red-500 text-white rounded">Delete</button>
          </td>
        </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>

  <div class="mt-4">
    <?php echo e($topics->links()); ?>

  </div>

  <?php if($modalOpen): ?>
    <div class="fixed inset-0 bg-black/40 flex items-center justify-center">
      <div class="bg-white rounded shadow p-6 w-full max-w-2xl">
        <h3 class="font-semibold mb-4"><?php echo e($editingId ? 'Edit' : 'Create'); ?> Topic</h3>
        <div class="space-y-3">
          <div>
            <label class="block text-sm">Name</label>
            <input type="text" wire:model.defer="name" class="w-full border rounded px-3 py-2" />
            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="text-red-500 text-sm"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>
          <div>
            <label class="block text-sm">Slug</label>
            <input type="text" wire:model.defer="slug" class="w-full border rounded px-3 py-2" />
            <?php $__errorArgs = ['slug'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="text-red-500 text-sm"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>
          <div>
            <label class="block text-sm">Description</label>
            <textarea wire:model.defer="description" class="w-full border rounded px-3 py-2" rows="3"></textarea>
          </div>
<div class="grid grid-cols-2 gap-3">
            <div>
              <label class="block text-sm">Status</label>
              <select wire:model.defer="status" class="w-full border rounded px-3 py-2">
                <option value="1">Active</option>
                <option value="0">Inactive</option>
              </select>
            </div>
            <div>
              <label class="block text-sm">Image</label>
              <input type="file" wire:model="image">
              <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="text-red-500 text-sm"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              <?php if($image): ?>
                <div class="mt-2">
                  <img src="<?php echo e($image->temporaryUrl()); ?>" class="w-28 h-20 object-cover rounded" alt="Image preview">
                </div>
              <?php elseif($imagePreview): ?>
                <div class="mt-2">
                  <img src="<?php echo e($imagePreview); ?>" class="w-28 h-20 object-cover rounded" alt="Image">
                </div>
              <?php endif; ?>
            </div>
          </div>

          <div class="mt-4 border-t pt-3">
            <div class="flex items-center justify-between mb-2">
              <h4 class="font-semibold">Sub-Topics</h4>
              <button wire:click="addSubtopicRow" class="px-3 py-1 bg-blue-600 text-white rounded text-sm">Add sub-topic</button>
            </div>

            <div class="space-y-2">
              <?php $__currentLoopData = $subtopics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $st): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(empty($st['deleted'])): ?>
                  <div class="bg-gray-50 p-2 rounded flex items-start space-x-2">
                    <div class="flex-1">
                      <input type="hidden" wire:model.defer="subtopics.<?php echo e($i); ?>.id">
                      <input type="text" wire:model.defer="subtopics.<?php echo e($i); ?>.name" placeholder="Name" class="w-full border rounded px-3 py-2 mb-2" />
                      <?php $__errorArgs = ['subtopics.'.$i.'.name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="text-red-500 text-sm"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                      <input type="text" wire:model.defer="subtopics.<?php echo e($i); ?>.slug" placeholder="Slug" class="w-full border rounded px-3 py-2 mb-2" />
                      <textarea wire:model.defer="subtopics.<?php echo e($i); ?>.description" placeholder="Description" class="w-full border rounded px-3 py-2 mb-2"></textarea>
                      <div class="grid grid-cols-3 gap-2">
                        <select wire:model.defer="subtopics.<?php echo e($i); ?>.status" class="border rounded px-3 py-2">
                          <option value="1">Active</option>
                          <option value="0">Inactive</option>
                        </select>
                        <button wire:click="removeSubtopicRow(<?php echo e($i); ?>)" class="px-3 py-2 bg-red-500 text-white rounded">Remove</button>
                      </div>
                    </div>
                  </div>
                <?php else: ?>
                  <div class="bg-red-50 p-2 rounded text-sm text-red-600">This sub-topic is marked for deletion. <button wire:click="$set('subtopics.<?php echo e($i); ?>.deleted', false)" class="underline">Undo</button></div>
                <?php endif; ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php if(empty($subtopics)): ?>
                <div class="text-sm text-gray-500">No sub-topics yet. Click <strong>Add sub-topic</strong> to create one inline.</div>
              <?php endif; ?>
            </div>
          </div>

          <div class="pt-3 flex justify-end space-x-2">
            <button wire:click="$set('modalOpen', false)" class="px-4 py-2 border rounded">Cancel</button>
            <button wire:click="save" class="px-4 py-2 bg-green-600 text-white rounded">Save</button>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>
</div>
<?php /**PATH /var/www/projects/NAROinfoHub/resources/views/livewire/admin/topic-manager.blade.php ENDPATH**/ ?>