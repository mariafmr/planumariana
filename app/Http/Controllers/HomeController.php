<?php

namespace App\Http\Controllers;

use App\Threat;
use Illuminate\Http\Request;
use App\Type;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //return view('home');
        $types = Type::all();
        $threats = Threat::all();
        return view('welcome',['types' => $types], ['threats' =>  $threats]);
    }
}
