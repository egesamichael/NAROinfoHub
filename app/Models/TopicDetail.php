<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopicDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'sub_topic_id',
        'title',
        'content',
        'attributes',
        'image',
    ];

    protected $casts = [
        'attributes' => 'array',
    ];

    protected static function booted()
    {
        static::saving(function ($model) {
            \Log::info('TopicDetail::saving', [
                'id' => $model->id,
                'dirty' => $model->getDirty(),
            ]);
        });

        static::saved(function ($model) {
            \Log::info('TopicDetail::saved', [
                'id' => $model->id,
                'updated_at' => $model->updated_at,
                'attrs' => $model->getAttributes(),
            ]);
        });
    }

    public function subTopic()
    {
        return $this->belongsTo(SubTopic::class);
    }
}
