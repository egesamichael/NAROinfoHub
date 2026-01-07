<?php

namespace App\Filament\Resources\LivestockVarietyResource\Pages;

use App\Filament\Resources\LivestockVarietyResource;
use Filament\Resources\Pages\EditRecord;

class EditLivestockVariety extends EditRecord
{
    public static $resource = LivestockVarietyResource::class;

    public $livestock_category_id = null;
    public $name = null;
    public $variety_slug = null;
    public $description = null;
    public $image = null;
    public $status = true;

    public function mount($record): void
    {
        parent::mount($record);
        $this->livestock_category_id = $this->record->livestock_category_id;
        $this->name = $this->record->name;
        $this->variety_slug = $this->record->slug;
        $this->description = $this->record->description;
        $this->image = $this->record->image;
        $this->status = $this->record->status;
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        return [
            'livestock_category_id' => $this->livestock_category_id,
            'name' => $this->name,
            'slug' => $this->variety_slug,
            'description' => $this->description,
            'image' => $this->image,
            'status' => $this->status,
        ];
    }
}
