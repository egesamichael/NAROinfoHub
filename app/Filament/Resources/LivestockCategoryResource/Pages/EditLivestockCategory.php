<?php

namespace App\Filament\Resources\LivestockCategoryResource\Pages;

use App\Filament\Resources\LivestockCategoryResource;
use Filament\Resources\Pages\EditRecord;

class EditLivestockCategory extends EditRecord
{
    public static $resource = LivestockCategoryResource::class;

    public $name = null;
    public $category_slug = null;
    public $description = null;
    public $image = null;
    public $status = true;

    public function mount($record): void
    {
        parent::mount($record);
        $this->name = $this->record->name;
        $this->category_slug = $this->record->slug;
        $this->description = $this->record->description;
        $this->image = $this->record->image;
        $this->status = $this->record->status;
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        return [
            'name' => $this->name,
            'slug' => $this->category_slug,
            'description' => $this->description,
            'image' => $this->image,
            'status' => $this->status,
        ];
    }
}
