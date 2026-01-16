<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = ['name', 'slug'];

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    public function lawyers()
    {
        return $this->belongsToMany(User::class, 'category_lawyer', 'category_id', 'lawyer_id')
            ->withTimestamps();
    }
}
