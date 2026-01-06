<?php

namespace App\Filament\Resources\TopicResource\Pages;

use App\Filament\Resources\TopicResource;
use Filament\Resources\Pages\CreateRecord;

class CreateTopic extends CreateRecord
{
    public static $resource = TopicResource::class;

    // Expose the image property so Filament's FileUpload can reference it safely
    public $image = null;

    // Expose description so Livewire can bind form data safely
    public $description = null;

    // Expose name so Livewire can bind form data safely
    public $name = null;

    // Local form property for slug to avoid colliding with the Page::$slug static property
    public $topic_slug = null;

    // Expose status so Livewire validation and the form can bind safely
    public $status = true;

    // Override create to manually collect form data from public properties
    public function create($another = false)
    {
        $data = [
            'name' => $this->name,
            'description' => $this->description,
            'topic_slug' => $this->topic_slug,
            'image' => $this->image,
            'status' => $this->status,
        ];

        // Map topic_slug to slug
        if (isset($data['topic_slug'])) {
            $data['slug'] = $data['topic_slug'];
            unset($data['topic_slug']);
        }

        // Create the model directly
        $model = $this->getModel()::create($data);

        $this->record = $model;

        $this->notify('success', 'Topic created successfully.');

        return redirect()->to('/admin/resources/topics');
    }
} 
