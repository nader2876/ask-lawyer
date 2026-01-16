<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LawyerProfile extends Model
{
    //  protected 
    protected $fillable = [
        'user_id',
        'bio',
        'license_number',
        'profile_photo_path',
        'status',
        'rejection_reason',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
