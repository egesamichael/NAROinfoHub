<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubTopic extends Model
{
    use HasFactory;

    protected $fillable = [
        'topic_id',
        'name',
        'slug',
        'description',
        'order',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }

    public function details()
    {
        return $this->hasMany(TopicDetail::class);
    }
}
