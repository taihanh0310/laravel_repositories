<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\StoreMusicService;

class HomeController extends Controller
{
    private $storeSev;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(StoreMusicService $storeSev)
    {
        $this->storeSev = $storeSev;
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd($this->storeSev->dummnyData());
        //return view('home');
    }
}
