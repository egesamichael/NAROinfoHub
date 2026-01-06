<div class="max-w-6xl mx-auto px-4">

  <style>
    /* Livestock UI: mirror crop styles */
    .crops-grid { display:block; gap:1rem; }
    .crops-left, .crops-mid, .crops-right { background:#fff; border-radius:8px; box-shadow:0 2px 6px rgba(0,0,0,0.06); padding:1rem; }
    .crops-left h3, .crops-mid h3 { display:inline-block; padding:6px 12px; border-radius:20px; font-weight:700; }
    .crops-left h3 { background:#ffec99; color:#6b4f00; }
    .crops-mid h3 { background:#d2f8d0; color:#1e6b2e; }
    .crops-right h3 { color:#1e6b2e; font-weight:700; }

    .list { margin-top:8px; }
    .list ul { list-style:none; padding:0; margin:0; }
    .list li { margin-bottom:6px; }
    .list button { background:transparent; border:1px solid transparent; padding:8px; border-radius:8px; text-align:left; width:100%; display:flex; align-items:center; gap:8px; }
    .list button:hover { background:#f8faf8; }
    .list button .arrow { color:#8a8a8a; font-weight:700; min-width:18px; display:inline-block; }
    .list button.selected { background:#e6f4ea; border-color:#cfead6; }
    .list button.selected-sub { background:#fff7e0; border-color:#f3e5b3; }

    .small-box { background:#fbfbfb; border:1px solid #eee; padding:10px; border-radius:6px; margin-top:12px; }
    .crops-right { background:#fff7f7; border:1px solid #f0e8e8; padding:1rem; border-radius:8px; }

    .attributes-box { background:#fff5f7; border:1px solid #f5d1da; padding:12px; border-radius:6px; }
    .post-harvest { border:2px solid #bdeab3; border-radius:8px; padding:12px; min-height:90px; background:#fff; }

    @media (min-width: 640px) {
      .crops-grid { display:grid; grid-template-columns: 260px 260px 1fr; align-items:start; gap:1.25rem; }
    }
  </style>

  <div class="crops-grid">
    <div class="crops-left">
      <h3 class="font-bold mb-2">Category</h3>
      <div class="list">
        <ul>
          <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="mb-2">
              <button wire:click="selectCategory(<?php echo e($category->id); ?>)" class="text-left w-full px-2 py-1 rounded hover:bg-gray-100 <?php echo e($selectedCategoryId == $category->id ? 'selected' : ''); ?>">
                <span class="arrow">&raquo;&raquo;</span> <span class="name"><?php echo e($category->name); ?></span>
              </button>
            </li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      </div>

      <div class="small-box mt-4">
        <h4 class="font-semibold text-sm text-yellow-800">Varieties</h4>
        <ul class="text-sm text-gray-700 mt-2">
          <?php $__currentLoopData = $categories->first()?->varieties?->take(6) ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="mb-1">&raquo; <?php echo e($v->name); ?></li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      </div>

      <div class="small-box mt-3">
        <h4 class="font-semibold text-sm">Ongoing projects</h4>
        <div class="text-sm text-gray-500">&raquo; </div>
      </div>
    </div>

    <div class="crops-mid">
      <h3 class="font-bold mb-2">Variety</h3>
      <div class="list">
        <ul>
          <?php $__currentLoopData = $varieties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="mb-2">
              <button wire:click="selectVariety(<?php echo e($sub->id); ?>)" class="text-left w-full px-2 py-1 rounded hover:bg-gray-100 <?php echo e($selectedVarietyId == $sub->id ? 'selected-sub' : ''); ?>">
                <span class="arrow">&raquo;&raquo;</span> <span class="name"><?php echo e($sub->name); ?></span>
              </button>
            </li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      </div>
    </div>

    <div class="crops-right">
      <h3 class="font-bold mb-2">Description</h3>

      <div>
        <?php if($detail): ?>
          <div class="text-sm text-gray-700 mb-2">
            <strong><?php echo e($detail->title ?? ($detail->variety->name ?? '')); ?></strong>
          </div>

          <div class="prose max-w-none">
            <?php echo nl2br(e($detail->content)); ?>

          </div>

          <?php if($detail->attributes): ?>
            <div class="mt-4 attributes-box">
              <h4 class="font-semibold">Attributes</h4>
              <ul class="text-sm">
                <?php $__currentLoopData = $detail->attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li><strong><?php echo e(ucfirst($k)); ?>:</strong> <?php echo e($v); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ul>
            </div>
          <?php endif; ?>

        <?php else: ?>
          <div class="text-gray-500">Select a variety to see details.</div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div><?php /**PATH C:\Users\Praise Web Solutions\NAROinfoHub\resources\views/livewire/livestock-index.blade.php ENDPATH**/ ?>