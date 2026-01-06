<?php

namespace App\Filament\Resources\TopicDetailResource\Pages;

use App\Filament\Resources\TopicDetailResource;
use Filament\Resources\Pages\CreateRecord;

class CreateTopicDetail extends CreateRecord
{
    public static $resource = TopicDetailResource::class;

    public $sub_topic_id = null;
    public $detail_title = null;
    public $content = null;
    public $attributes = null;
    public $image = null;

    public function create($another = false)
    {
        $data = [
            'sub_topic_id' => $this->sub_topic_id,
            'title' => $this->detail_title,
            'content' => $this->content,
            'attributes' => $this->attributes,
            'image' => $this->image,
        ];
        $model = $this->getModel()::create($data);
        $this->record = $model;

        $this->notify('success', 'Topic detail created successfully.');

        return redirect()->to('/admin/resources/topic-details');
    }
}
