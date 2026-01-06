<div class="max-w-4xl mx-auto">
  <div class="flex items-center justify-between mb-4">
    <h2 class="text-lg font-semibold">Sub-Topics</h2>
    <div>
      <button wire:click="create" class="px-4 py-2 bg-green-600 text-white rounded">New Sub-Topic</button>
    </div>
  </div>

  @if (session()->has('message'))
    <div class="mb-4 text-sm text-green-700">{{ session('message') }}</div>
  @endif

  <table class="w-full bg-white rounded shadow">
    <thead>
      <tr class="text-left">
        <th class="px-4 py-2">Name</th>
        <th class="px-4 py-2">Topic</th>
        <th class="px-4 py-2">Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($subs as $s)
        <tr class="border-t">
          <td class="px-4 py-2">{{ $s->name }}</td>
          <td class="px-4 py-2">{{ $s->topic->name ?? '' }}</td>
          <td class="px-4 py-2">
            <button wire:click="edit({{ $s->id }})" class="px-2 py-1 bg-yellow-400 rounded mr-2">Edit</button>
            <button wire:click="delete({{ $s->id }})" onclick="return confirm('Delete this sub-topic?')" class="px-2 py-1 bg-red-500 text-white rounded">Delete</button>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>

  <div class="mt-4">
    {{ $subs->links() }}
  </div>

  @if($modalOpen)
    <div class="fixed inset-0 bg-black/40 flex items-center justify-center">
      <div class="bg-white rounded shadow p-6 w-full max-w-2xl">
        <h3 class="font-semibold mb-4">{{ $editingId ? 'Edit' : 'Create' }} Sub-Topic</h3>
        <div class="space-y-3">
          <div>
            <label class="block text-sm">Topic</label>
            <select wire:model.defer="topic_id" class="w-full border rounded px-3 py-2">
              <option value="">Select Topic</option>
              @foreach($topics as $t)
                <option value="{{ $t->id }}">{{ $t->name }}</option>
              @endforeach
            </select>
            @error('topic_id') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
          </div>

          <div>
            <label class="block text-sm">Name</label>
            <input type="text" wire:model.defer="name" class="w-full border rounded px-3 py-2" />
            @error('name') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
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
  @endif
</div>
