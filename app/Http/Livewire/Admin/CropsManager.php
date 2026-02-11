<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Crop;

class CropsManager extends Component
{
    public $crops = [];

    public $name;
    public $slug;
    public $description;
    public $editingId = null;

    protected $rules = [
        'name' => 'required|string|max:191',
        'slug' => 'nullable|string|max:191',
        'description' => 'nullable|string',
    ];

    public function mount()
    {
        $this->loadCrops();
    }

    public function loadCrops()
    {
        $this->crops = Crop::orderBy('name')->get()->toArray();
    }

    public function createCrop()
    {
        $this->validate();

        $crop = Crop::create([
            'name' => $this->name,
            'slug' => $this->slug ?: str("$this->name")->slug(),
            'description' => $this->description,
            'status' => true,
        ]);

        $this->resetForm();
        $this->loadCrops();
        session()->flash('message', 'Crop created.');
    }

    public function editCrop($id)
    {
        $crop = Crop::findOrFail($id);
        $this->editingId = $crop->id;
        $this->name = $crop->name;
        $this->slug = $crop->slug;
        $this->description = $crop->description;
    }

    public function updateCrop()
    {
        $this->validate();
        $crop = Crop::findOrFail($this->editingId);
        $crop->update([
            'name' => $this->name,
            'slug' => $this->slug ?: str("$this->name")->slug(),
            'description' => $this->description,
        ]);

        $this->resetForm();
        $this->loadCrops();
        session()->flash('message', 'Crop updated.');
    }

    public function deleteCrop($id)
    {
        $crop = Crop::find($id);
        if ($crop) $crop->delete();
        $this->loadCrops();
        session()->flash('message', 'Crop deleted.');
    }

    protected function resetForm()
    {
        $this->editingId = null;
        $this->name = $this->slug = $this->description = null;
    }

    public function render()
    {
        return view('livewire.admin.crops-manager');
    }
}
