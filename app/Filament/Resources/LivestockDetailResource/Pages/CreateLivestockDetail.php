<?php

namespace App\Filament\Resources\LivestockDetailResource\Pages;

use App\Filament\Resources\LivestockDetailResource;
use Filament\Resources\Pages\CreateRecord;

class CreateLivestockDetail extends CreateRecord
{
    public static $resource = LivestockDetailResource::class;

    public $livestock_variety_id = null;
    public $detail_title = null;
    public $content = null;
    public $attributes = null;
    public $image = null;

    public function create($another = false)
    {
        $data = [
            'livestock_variety_id' => $this->livestock_variety_id,
            'title' => $this->detail_title,
            'content' => $this->content,
            'attributes' => $this->attributes,
            'image' => $this->image,
        ];
        $model = $this->getModel()::create($data);
        $this->record = $model;

        $this->notify('success', 'Livestock detail created successfully.');
        return redirect()->to('/admin/resources/livestock-details');
    }
}
