<?php

namespace App\Filament\Resources\SubTopicResource\Pages;

use App\Filament\Resources\SubTopicResource;
use Filament\Resources\Pages\EditRecord;

class EditSubTopic extends EditRecord
{
    public static $resource = SubTopicResource::class;

    public $topic_id = null;
    public $name = null;
    public $subtopic_slug = null;
    public $description = null;
    public $status = true;

    public function mount($record): void
    {
        parent::mount($record);
        $this->topic_id = $this->record->topic_id;
        $this->name = $this->record->name;
        $this->subtopic_slug = $this->record->slug;
        $this->description = $this->record->description;
        $this->status = $this->record->status;
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        return [
            'topic_id' => $this->topic_id,
            'name' => $this->name,
            'slug' => $this->subtopic_slug,
            'description' => $this->description,
            'status' => $this->status,
        ];
    }
}
