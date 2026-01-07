<?php

namespace App\Filament\Resources\LivestockDetailResource\Pages;

use App\Filament\Resources\LivestockDetailResource;
use Filament\Resources\Pages\EditRecord;

class EditLivestockDetail extends EditRecord
{
    public static $resource = LivestockDetailResource::class;

    public $livestock_variety_id = null;
    public $detail_title = null;
    public $content = null;
    public $attributes = null;
    public $image = null;

    public function mount($record): void
    {
        parent::mount($record);
        $this->livestock_variety_id = $this->record->livestock_variety_id;
        $this->detail_title = $this->record->title;
        $this->content = $this->record->content;
        $this->attributes = $this->record->attributes;
        $this->image = $this->record->image;
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        return [
            'livestock_variety_id' => $this->livestock_variety_id,
            'title' => $this->detail_title,
            'content' => $this->content,
            'attributes' => $this->attributes,
            'image' => $this->image,
        ];
    }
}
