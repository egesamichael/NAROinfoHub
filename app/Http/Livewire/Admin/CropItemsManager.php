<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\CropItem;

class CropItemsManager extends Component
{
    public $items = [];

    public $crop_category_id;
    public $title;
    public $content;
    public $order = 0;
    public $editingId = null;

    protected $rules = [
        'crop_category_id' => 'required|integer',
        'title' => 'required|string|max:191',
        'content' => 'nullable|string',
        'order' => 'nullable|integer',
    ];

    public function mount()
    {
        $this->loadItems();
    }

    public function loadItems()
    {
        $this->items = CropItem::orderBy('crop_category_id')->orderBy('order')->get()->toArray();
    }

    public function createItem()
    {
        $this->validate();

        CropItem::create([
            'crop_category_id' => $this->crop_category_id,
            'title' => $this->title,
            'content' => $this->content,
            'order' => $this->order ?? 0,
        ]);

        $this->resetForm();
        $this->loadItems();
        session()->flash('message', 'Item created.');
    }

    public function editItem($id)
    {
        $i = CropItem::findOrFail($id);
        $this->editingId = $i->id;
        $this->crop_category_id = $i->crop_category_id;
        $this->title = $i->title;
        $this->content = $i->content;
        $this->order = $i->order;
    }

    public function updateItem()
    {
        $this->validate();
        $i = CropItem::findOrFail($this->editingId);
        $i->update([
            'crop_category_id' => $this->crop_category_id,
            'title' => $this->title,
            'content' => $this->content,
            'order' => $this->order ?? 0,
        ]);

        $this->resetForm();
        $this->loadItems();
        session()->flash('message', 'Item updated.');
    }

    public function deleteItem($id)
    {
        $i = CropItem::find($id);
        if ($i) $i->delete();
        $this->loadItems();
        session()->flash('message', 'Item deleted.');
    }

    protected function resetForm()
    {
        $this->editingId = null;
        $this->crop_category_id = $this->title = $this->content = null;
        $this->order = 0;
    }

    public function render()
    {
        return view('livewire.admin.crop-items-manager');
    }
}
