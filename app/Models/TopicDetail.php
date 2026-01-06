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

    public function subTopic()
    {
        return $this->belongsTo(SubTopic::class);
    }
}
