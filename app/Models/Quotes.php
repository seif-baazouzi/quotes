<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotes extends Model
{
    use HasFactory;

    protected $fillable = ['author', 'quote', 'user'];

    function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
