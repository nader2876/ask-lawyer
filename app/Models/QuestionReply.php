<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuestionReply extends Model
{
    protected $fillable = [
        'question_id',
        'lawyer_id',
        'body',
    ];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function lawyer()
    {
        return $this->belongsTo(User::class, 'lawyer_id');
    }
}
