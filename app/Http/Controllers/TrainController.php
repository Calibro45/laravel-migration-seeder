<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index() {

        $trains = Train::all()->where('data_partenza', date('d-m-Y'));

        return view('home', compact('trains'));
    }
}
