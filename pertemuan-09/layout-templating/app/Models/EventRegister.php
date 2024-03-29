<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventRegister extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_id',
        'user_id',
        'tanggal_daftar',
    ];
}
