<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhoneParticipantModel extends Model
{
    use HasFactory;

    protected $table = 'phones_participants';

    protected $fillable = [
        'users_id',
        'phone',
        'is_whatzapp'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
