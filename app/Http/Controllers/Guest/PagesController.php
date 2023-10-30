<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $all_trains = Train::all();
        //dd($all_trains);
        return view('index', compact('all_trains'));
    }

    public function today()
    {
        //$today_trains = Train::where('departure_time', '=', Date('yy-mm-gg'))->get();
        //$today_trains = Train::select("SELECT * FROM trains WHERE day(departure_time) = day(now());", [1]);

        $today_trains = Train::whereDay('departure_time', '=', date('d'))->get();
        //dd($today_trains);

        return view('today', compact('today_trains'));
    }
}
