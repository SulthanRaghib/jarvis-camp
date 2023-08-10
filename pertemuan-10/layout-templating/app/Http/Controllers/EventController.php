<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Event',
            'user' => [
                'name' => 'Raghib',
                'email' => 'raghib@gmail.com',
            ],
            'dataEvent' => Event::all(),
        ];

        return view('contents.event', $data);
    }
}
