<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;

class ManangerModel extends User
{
    use HasFactory;

    protected $table = 'manangers';

    protected $fillable = [
        'users_id',
        'historic'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
