<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    private static $tasks = [
        [
            'id' => 1,
            'name' => 'Belajar Laravel',
            'description' => 'Belajar laravel dasar',
            'deadline' => '2023-10-10',
            'status' => 'Selesai',
        ],
        [
            'id' => 2,
            'name' => 'Belajar PHP',
            'description' => 'Belajar PHP dasar',
            'deadline' => '2023-10-10',
            'status' => 'Selesai',
        ],
        [
            'id' => 3,
            'name' => 'Belajar Javascript',
            'description' => 'Belajar Javascript dasar',
            'deadline' => '2023-10-10',
            'status' => 'Belum Selesai',
        ],

    ];

    public static function getAll()
    {
        return self::$tasks;
    }
}
