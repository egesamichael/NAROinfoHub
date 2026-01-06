<?php

namespace App\Filament\Resources\TopicDetailResource\Pages;

use App\Filament\Resources\TopicDetailResource;
use Filament\Resources\Pages\EditRecord;

class EditTopicDetail extends EditRecord
{
    public static $resource = TopicDetailResource::class;

    public $sub_topic_id = null;
    public $detail_title = null;
    public $content = null;
    public $attributes = null;
    public $image = null;

    public function mount($record): void
    {
        parent::mount($record);
        $this->sub_topic_id = $this->record->sub_topic_id;
        $this->detail_title = $this->record->title;
        $this->content = $this->record->content;
        $this->attributes = $this->record->attributes;
        $this->image = $this->record->image;
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        return [
            'sub_topic_id' => $this->sub_topic_id,
            'title' => $this->detail_title,
            'content' => $this->content,
            'attributes' => $this->attributes,
            'image' => $this->image,
        ];
    }
}
