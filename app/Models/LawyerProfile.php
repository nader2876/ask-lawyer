<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LawyerProfile extends Model
{
    use SoftDeletes;
        use HasFactory;

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
