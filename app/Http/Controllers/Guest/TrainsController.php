<?php

namespace App\Http\Controllers\Guest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Train;

class TrainsController extends Controller
{
    public function index()
    {
        // Query SQL SELECT * FROM `trains` WHERE departure_date >= '2024-02-27';
        $trains = Train::where('departure_date', '>=','2024-02-27') -> get();
        return view('welcome', compact('trains'));
    }
}
