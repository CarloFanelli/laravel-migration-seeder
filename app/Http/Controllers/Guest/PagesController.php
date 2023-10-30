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

        return view('index', compact('all_trains'));
    }
}
