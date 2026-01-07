<?php

namespace App\Filament\Resources\LivestockCategoryResource\Pages;

use App\Filament\Resources\LivestockCategoryResource;
use Filament\Resources\Pages\CreateRecord;

class CreateLivestockCategory extends CreateRecord
{
    public static $resource = LivestockCategoryResource::class;

    public $name = null;
    public $category_slug = null;
    public $description = null;
    public $image = null;
    public $status = true;

    public function create($another = false)
    {
        $data = [
            'name' => $this->name,
            'description' => $this->description,
            'image' => $this->image,
            'status' => $this->status,
        ];

        if (isset($this->category_slug)) {
            $data['slug'] = $this->category_slug;
        }

        $model = $this->getModel()::create($data);
        $this->record = $model;

        $this->notify('success', 'Livestock category created successfully.');
        return redirect()->to('/admin/resources/livestock-categories');
    }
}
