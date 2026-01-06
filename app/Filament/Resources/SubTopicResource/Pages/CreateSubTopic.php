<?php

namespace App\Filament\Resources\SubTopicResource\Pages;

use App\Filament\Resources\SubTopicResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Log;

class CreateSubTopic extends CreateRecord
{
    public static $resource = SubTopicResource::class;

    public $topic_id = null;
    public $name = null;
    public $subtopic_slug = null;
    public $description = null;
    public $status = true;

    public function create($another = false)
    {
        $data = [
            'topic_id' => $this->topic_id,
            'name' => $this->name,
            'description' => $this->description,
            'status' => $this->status,
        ];
        if (isset($this->subtopic_slug)) {
            $data['slug'] = $this->subtopic_slug;
        }

        Log::info('CreateSubTopic::create - manually built data', $data);

        try {
            $model = $this->getModel()::create($data);
            $this->record = $model;
            Log::info('CreateSubTopic::create - model created', $model->toArray());

            $this->notify('success', 'Sub-topic created successfully.');

            return redirect()->to('/admin/resources/sub-topics');
        } catch (\Throwable $e) {
            Log::error('CreateSubTopic::create - exception', ['message' => $e->getMessage(), 'trace' => $e->getTraceAsString()]);
            throw $e;
        }
    }
}
