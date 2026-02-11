<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\CropCategory;

class CropCategoriesManager extends Component
{
    public $categories = [];

    public $crop_id;
    public $name;
    public $slug;
    public $description;
    public $type = 'detail';
    public $editingId = null;

    protected $rules = [
        'crop_id' => 'required|integer',
        'name' => 'required|string|max:191',
        'slug' => 'nullable|string|max:191',
        'description' => 'nullable|string',
        'type' => 'required|in:variety,detail',
    ];

    public function mount()
    {
        $this->loadCategories();
    }

    public function loadCategories()
    {
        $this->categories = CropCategory::orderBy('crop_id')->orderBy('name')->get()->toArray();
    }

    public function createCategory()
    {
        $this->validate();

        CropCategory::create([
            'crop_id' => $this->crop_id,
            'name' => $this->name,
            'slug' => $this->slug ?: str("$this->name")->slug(),
            'description' => $this->description,
            'type' => $this->type,
            'status' => true,
        ]);

        $this->resetForm();
        $this->loadCategories();
        session()->flash('message', 'Category created.');
    }

    public function editCategory($id)
    {
        $c = CropCategory::findOrFail($id);
        $this->editingId = $c->id;
        $this->crop_id = $c->crop_id;
        $this->name = $c->name;
        $this->slug = $c->slug;
        $this->description = $c->description;
        $this->type = $c->type ?? 'detail';
    }

    public function updateCategory()
    {
        $this->validate();
        $c = CropCategory::findOrFail($this->editingId);
        $c->update([
            'crop_id' => $this->crop_id,
            'name' => $this->name,
            'slug' => $this->slug ?: str("$this->name")->slug(),
            'description' => $this->description,
            'type' => $this->type,
        ]);

        $this->resetForm();
        $this->loadCategories();
        session()->flash('message', 'Category updated.');
    }

    public function deleteCategory($id)
    {
        $c = CropCategory::find($id);
        if ($c) $c->delete();
        $this->loadCategories();
        session()->flash('message', 'Category deleted.');
    }

    protected function resetForm()
    {
        $this->editingId = null;
        $this->crop_id = $this->name = $this->slug = $this->description = null;
        $this->type = 'detail';
    }

    public function render()
    {
        return view('livewire.admin.crop-categories-manager');
    }
}
