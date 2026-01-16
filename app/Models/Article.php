<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'author_id',
        'category_id',
        'title',
        'image_path',
        'slug',
        'content',
        'status',
        'published_at',
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
