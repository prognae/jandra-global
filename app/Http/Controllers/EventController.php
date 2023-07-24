<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    //
    public function displayEvents() {
        $events = DB::select('SELECT * FROM public.event ORDER BY event_date ASC');
        return view('pages.event', ['events'=>$events]);
    }

    public function displayEventPage($event_id) {
        $event = DB::select('SELECT * FROM public.event WHERE id = :id', ['id'=>$event_id]);
        return view('pages.event_view', ['event'=>$event]);
    }
}
