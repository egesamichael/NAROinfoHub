<?php

namespace App\Filament\Resources\LivestockVarietyResource\Pages;

use App\Filament\Resources\LivestockVarietyResource;
use Filament\Resources\Pages\CreateRecord;

class CreateLivestockVariety extends CreateRecord
{
    public static $resource = LivestockVarietyResource::class;

    public $livestock_category_id = null;
    public $name = null;
    public $variety_slug = null;
    public $description = null;
    public $image = null;
    public $status = true;

    public function create($another = false)
    {
        $data = [
            'livestock_category_id' => $this->livestock_category_id,
            'name' => $this->name,
            'description' => $this->description,
            'image' => $this->image,
            'status' => $this->status,
        ];

        if (isset($this->variety_slug)) {
            $data['slug'] = $this->variety_slug;
        }

        $model = $this->getModel()::create($data);
        $this->record = $model;

        $this->notify('success', 'Livestock variety created successfully.');
        return redirect()->to('/admin/resources/livestock-varieties');
    }
}
