<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;

class ParticipantModel extends User
{
    use HasFactory;

    protected $table = 'participants';

    protected $fillable = [
        'users_id',
        'old',
        'email',
        'parish',
        'group',
        'addres'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
