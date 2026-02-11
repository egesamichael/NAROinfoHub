<div class="max-w-4xl mx-auto">
  <div class="flex items-center justify-between mb-4">
    <h2 class="text-lg font-semibold">Sub-Topics</h2>
    <div>
      <button wire:click="create" class="px-4 py-2 bg-green-600 text-white rounded">New Sub-Topic</button>
    </div>
  </div>

  <?php if(session()->has('message')): ?>
    <div class="mb-4 text-sm text-green-700"><?php echo e(session('message')); ?></div>
  <?php endif; ?>

  <table class="w-full bg-white rounded shadow">
    <thead>
      <tr class="text-left">
        <th class="px-4 py-2">Name</th>
        <th class="px-4 py-2">Topic</th>
        <th class="px-4 py-2">Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php $__currentLoopData = $subs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr class="border-t">
          <td class="px-4 py-2"><?php echo e($s->name); ?></td>
          <td class="px-4 py-2"><?php echo e($s->topic->name ?? ''); ?></td>
          <td class="px-4 py-2">
            <button wire:click="edit(<?php echo e($s->id); ?>)" class="px-2 py-1 bg-yellow-400 rounded mr-2">Edit</button>
            <button wire:click="delete(<?php echo e($s->id); ?>)" onclick="return confirm('Delete this sub-topic?')" class="px-2 py-1 bg-red-500 text-white rounded">Delete</button>
          </td>
        </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>

  <div class="mt-4">
    <?php echo e($subs->links()); ?>

  </div>

  <?php if($modalOpen): ?>
    <div class="fixed inset-0 bg-black/40 flex items-center justify-center">
      <div class="bg-white rounded shadow p-6 w-full max-w-2xl">
        <h3 class="font-semibold mb-4"><?php echo e($editingId ? 'Edit' : 'Create'); ?> Sub-Topic</h3>
        <div class="space-y-3">
          <div>
            <label class="block text-sm">Topic</label>
            <select wire:model.defer="topic_id" class="w-full border rounded px-3 py-2">
              <option value="">Select Topic</option>
              <?php $__currentLoopData = $topics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($t->id); ?>"><?php echo e($t->name); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <?php $__errorArgs = ['topic_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="text-red-500 text-sm"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>

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

          <div class="grid grid-cols-1 gap-3">
            <div>
              <label class="block text-sm">Status</label>
              <select wire:model.defer="status" class="w-full border rounded px-3 py-2">
                <option value="1">Active</option>
                <option value="0">Inactive</option>
              </select>
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
<?php /**PATH /var/www/projects/NAROinfoHub/resources/views/livewire/admin/sub-topic-manager.blade.php ENDPATH**/ ?>