<div class="max-w-4xl mx-auto">
  <div class="flex items-center justify-between mb-4">
    <h2 class="text-lg font-semibold">Topic Details</h2>
    <div>
      <button wire:click="create" class="px-4 py-2 bg-green-600 text-white rounded">New Detail</button>
    </div>
  </div>

  @if(session()->has('message'))
    <div class="mb-4 text-sm text-green-700">{{ session('message') }}</div>
  @endif

  <table class="w-full bg-white rounded shadow">
    <thead>
      <tr class="text-left">
        <th class="px-4 py-2">Title</th>
        <th class="px-4 py-2">Sub-Topic</th>
        <th class="px-4 py-2">Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($details as $d)
        <tr class="border-t">
          <td class="px-4 py-2">{{ $d->title }}</td>
          <td class="px-4 py-2">{{ $d->subTopic->name ?? '' }}</td>
          <td class="px-4 py-2">
            <button wire:click="edit({{ $d->id }})" class="px-2 py-1 bg-yellow-400 rounded mr-2">Edit</button>
            <button wire:click="delete({{ $d->id }})" onclick="return confirm('Delete this detail?')" class="px-2 py-1 bg-red-500 text-white rounded">Delete</button>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>

  <div class="mt-4">
    {{ $details->links() }}
  </div>

  @if($modalOpen)
    <div class="fixed inset-0 bg-black/40 flex items-center justify-center">
      <div class="bg-white rounded shadow p-6 w-full max-w-2xl">
        <h3 class="font-semibold mb-4">{{ $editingId ? 'Edit' : 'Create' }} Detail</h3>
        <div class="space-y-3">
          <div>
            <label class="block text-sm">Sub-Topic</label>
            <select wire:model.defer="sub_topic_id" class="w-full border rounded px-3 py-2">
              <option value="">Select Sub-Topic</option>
              @foreach($subtopics as $s)
                <option value="{{ $s->id }}">{{ $s->name }} ({{ $s->topic->name ?? '' }})</option>
              @endforeach
            </select>
            @error('sub_topic_id') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
          </div>

          <div>
            <label class="block text-sm">Title</label>
            <input type="text" wire:model.defer="title" class="w-full border rounded px-3 py-2" />
            @error('title') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
          </div>

          <div>
            <label class="block text-sm">Content</label>
            <textarea wire:model.defer="content" class="w-full border rounded px-3 py-2" rows="6"></textarea>
          </div>

          <div>
            <label class="block text-sm">Attributes (JSON-ish key/value pairs)</label>
            <input type="text" wire:model.defer="attributes" class="w-full border rounded px-3 py-2" placeholder='{"key":"value"} or leave blank' />
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
