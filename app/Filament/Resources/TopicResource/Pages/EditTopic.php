<?php

namespace App\Filament\Resources\TopicResource\Pages;

use App\Filament\Resources\TopicResource;
use Filament\Resources\Pages\EditRecord;

class EditTopic extends EditRecord
{
    public static $resource = TopicResource::class;

    // Expose the image property so Filament's FileUpload can read it when rendering the form
    public $image;

    // Expose description so Livewire can bind form data safely
    public $description;

    // Expose name so Livewire can bind form data safely
    public $name;

    // Local form property for slug to avoid colliding with the Page::$slug static property
    public $topic_slug;

    public function mount($record): void
    {
        parent::mount($record);

        // initialize the image property from the loaded record (if available)
        $this->image = $this->record?->image;
        $this->description = $this->record?->description;
        $this->name = $this->record?->name;
        $this->topic_slug = $this->record?->slug;
        // Initialize status from the record so the form binds correctly
        $this->status = $this->record?->status ?? true;
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        if (isset($data['topic_slug'])) {
            $data['slug'] = $data['topic_slug'];
            unset($data['topic_slug']);
        }

        return $data;
    }
}
