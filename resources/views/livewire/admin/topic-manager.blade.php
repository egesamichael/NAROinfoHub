<div class="max-w-4xl mx-auto">
  <div class="flex items-center justify-between mb-4">
    <h2 class="text-lg font-semibold">Topics</h2>
    <div>
      <button wire:click="create" class="px-4 py-2 bg-green-600 text-white rounded">New Topic</button>
    </div>
  </div>

  @if (session()->has('message'))
    <div class="mb-4 text-sm text-green-700">{{ session('message') }}</div>
  @endif

  <table class="w-full bg-white rounded shadow">
    <thead>
      <tr class="text-left">
        <th class="px-4 py-2">Name</th>
        <th class="px-4 py-2">Order</th>
        <th class="px-4 py-2">Status</th>
        <th class="px-4 py-2">Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($topics as $t)
        <tr class="border-t">
          <td class="px-4 py-2">{{ $t->name }}</td>
          <td class="px-4 py-2">{{ $t->order }}</td>
          <td class="px-4 py-2">{{ $t->status ? 'Active' : 'Inactive' }}</td>
          <td class="px-4 py-2">
            <button wire:click="edit({{ $t->id }})" class="px-2 py-1 bg-yellow-400 rounded mr-2">Edit</button>
            <button wire:click="delete({{ $t->id }})" onclick="return confirm('Delete this topic?')" class="px-2 py-1 bg-red-500 text-white rounded">Delete</button>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>

  <div class="mt-4">
    {{ $topics->links() }}
  </div>

  @if($modalOpen)
    <div class="fixed inset-0 bg-black/40 flex items-center justify-center">
      <div class="bg-white rounded shadow p-6 w-full max-w-2xl">
        <h3 class="font-semibold mb-4">{{ $editingId ? 'Edit' : 'Create' }} Topic</h3>
        <div class="space-y-3">
          <div>
            <label class="block text-sm">Name</label>
            <input type="text" wire:model.defer="name" class="w-full border rounded px-3 py-2" />
            @error('name') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
          </div>
          <div>
            <label class="block text-sm">Slug</label>
            <input type="text" wire:model.defer="slug" class="w-full border rounded px-3 py-2" />
            @error('slug') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
          </div>
          <div>
            <label class="block text-sm">Description</label>
            <textarea wire:model.defer="description" class="w-full border rounded px-3 py-2" rows="3"></textarea>
          </div>
          <div class="grid grid-cols-3 gap-3">
            <div>
              <label class="block text-sm">Order</label>
              <input type="number" wire:model.defer="order" class="w-full border rounded px-3 py-2" />
            </div>
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
              @error('image') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
              @if($image)
                <div class="mt-2">
                  <img src="{{ $image->temporaryUrl() }}" class="w-28 h-20 object-cover rounded" alt="Image preview">
                </div>
              @elseif($imagePreview)
                <div class="mt-2">
                  <img src="{{ $imagePreview }}" class="w-28 h-20 object-cover rounded" alt="Image">
                </div>
              @endif
            </div>
          </div>

          <div class="mt-4 border-t pt-3">
            <div class="flex items-center justify-between mb-2">
              <h4 class="font-semibold">Sub-Topics</h4>
              <button wire:click="addSubtopicRow" class="px-3 py-1 bg-blue-600 text-white rounded text-sm">Add sub-topic</button>
            </div>

            <div class="space-y-2">
              @foreach($subtopics as $i => $st)
                @if(empty($st['deleted']))
                  <div class="bg-gray-50 p-2 rounded flex items-start space-x-2">
                    <div class="flex-1">
                      <input type="hidden" wire:model.defer="subtopics.{{ $i }}.id">
                      <input type="text" wire:model.defer="subtopics.{{ $i }}.name" placeholder="Name" class="w-full border rounded px-3 py-2 mb-2" />
                      @error('subtopics.'.$i.'.name') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
                      <input type="text" wire:model.defer="subtopics.{{ $i }}.slug" placeholder="Slug" class="w-full border rounded px-3 py-2 mb-2" />
                      <textarea wire:model.defer="subtopics.{{ $i }}.description" placeholder="Description" class="w-full border rounded px-3 py-2 mb-2"></textarea>
                      <div class="grid grid-cols-3 gap-2">
                        <input type="number" wire:model.defer="subtopics.{{ $i }}.order" class="border rounded px-3 py-2" placeholder="Order" />
                        <select wire:model.defer="subtopics.{{ $i }}.status" class="border rounded px-3 py-2">
                          <option value="1">Active</option>
                          <option value="0">Inactive</option>
                        </select>
                        <button wire:click="removeSubtopicRow({{ $i }})" class="px-3 py-2 bg-red-500 text-white rounded">Remove</button>
                      </div>
                    </div>
                  </div>
                @else
                  <div class="bg-red-50 p-2 rounded text-sm text-red-600">This sub-topic is marked for deletion. <button wire:click="$set('subtopics.{{ $i }}.deleted', false)" class="underline">Undo</button></div>
                @endif
              @endforeach
              @if(empty($subtopics))
                <div class="text-sm text-gray-500">No sub-topics yet. Click <strong>Add sub-topic</strong> to create one inline.</div>
              @endif
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
