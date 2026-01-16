<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'description',
        'status',
    ];

    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function replies()
    {
        return $this->hasMany(QuestionReply::class);
    }
}
