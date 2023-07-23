<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        // mengambil semua data task di model
        $tasks = Task::getAll();
        // mengirimkan data task ke view
        return view('task.index', [
            // kirim data dan Carbon
            'tugas' => $tasks,
        ]);
    }
}
