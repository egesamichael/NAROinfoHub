<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LivestockIndex extends Component
{
    public $categories;
    public $selectedCategoryId = null;
    public $varieties = [];
    public $selectedVarietyId = null;
    public $detail = null;

    public function mount()
    {
        $this->categories = \App\Models\LivestockCategory::orderBy('name')->get();

        if ($this->categories->isNotEmpty()) {
            $this->selectCategory($this->categories->first()->id);
        }
    }

    public function selectCategory($id)
    {
        $this->selectedCategoryId = $id;
        $this->varieties = \App\Models\LivestockVariety::where('livestock_category_id', $id)->orderBy('name')->get();

        $this->selectedVarietyId = $this->varieties->first()?->id;

        if ($this->selectedVarietyId) {
            $this->loadDetail($this->selectedVarietyId);
        } else {
            $this->detail = null;
        }
    }

    public function selectVariety($id)
    {
        $this->selectedVarietyId = $id;
        $this->loadDetail($id);
    }

    protected function loadDetail($varietyId)
    {
        $this->detail = \App\Models\LivestockDetail::where('livestock_variety_id', $varietyId)->first();
    }

    public function render()
    {
        return view('livewire.livestock-index');
    }
}
