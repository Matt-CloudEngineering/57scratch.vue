<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
                return view('index')->with([
                    'projects' => [
                            'TrevsAutomotive.com',
                            'DiveBarNYC.com',
                            'Oakbrookcommons.com'
                        ],
                        'title' => 'Home', 
                        'description' => 'The detailed description of our about page, Duh!'
                ]);
        /*return view('home');*/
    }
}
