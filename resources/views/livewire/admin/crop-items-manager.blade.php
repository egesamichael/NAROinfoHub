<div class="p-6">
    <h2 class="text-xl font-semibold mb-4">Crop Items Manager</h2>

    @if (session()->has('message'))
        <div class="mb-4 p-2 bg-green-100 text-green-800 rounded">{{ session('message') }}</div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="md:col-span-2">
            <table class="w-full bg-white shadow rounded">
                <thead>
                    <tr class="text-left">
                        <th class="px-4 py-2">Category ID</th>
                        <th class="px-4 py-2">Title</th>
                        <th class="px-4 py-2">Order</th>
                        <th class="px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($items as $i)
                        <tr class="border-t">
                            <td class="px-4 py-2">{{ $i['crop_category_id'] }}</td>
                            <td class="px-4 py-2">{{ $i['title'] }}</td>
                            <td class="px-4 py-2">{{ $i['order'] }}</td>
                            <td class="px-4 py-2">
                                <button wire:click="editItem({{ $i['id'] }})" class="mr-2 px-2 py-1 bg-blue-500 text-white rounded">Edit</button>
                                <button wire:click="deleteItem({{ $i['id'] }})" class="px-2 py-1 bg-red-500 text-white rounded">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="bg-white shadow rounded p-4">
            <h3 class="font-semibold mb-2">@if($editingId) Edit @else New @endif Item</h3>
            <div class="mb-2">
                <label class="block text-sm">Category ID</label>
                <input wire:model.defer="crop_category_id" class="w-full border rounded px-2 py-1" />
                @error('crop_category_id') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
            </div>
            <div class="mb-2">
                <label class="block text-sm">Title</label>
                <input wire:model.defer="title" class="w-full border rounded px-2 py-1" />
                @error('title') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
            </div>
            <div class="mb-2">
                <label class="block text-sm">Content</label>
                <textarea wire:model.defer="content" class="w-full border rounded px-2 py-1"></textarea>
            </div>
            <div class="mb-2">
                <label class="block text-sm">Order</label>
                <input wire:model.defer="order" type="number" class="w-full border rounded px-2 py-1" />
            </div>
            <div class="flex gap-2">
                @if($editingId)
                    <button wire:click="updateItem" class="px-3 py-2 bg-green-600 text-white rounded">Update</button>
                    <button wire:click="resetForm" class="px-3 py-2 bg-gray-300 rounded">Cancel</button>
                @else
                    <button wire:click="createItem" class="px-3 py-2 bg-green-600 text-white rounded">Create</button>
                @endif
            </div>
        </div>
    </div>
</div>
