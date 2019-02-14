<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {

    	    return view('index')->with([
    	    	'projects' => [
    	    	    	'TrevsAutomotive.com',
    	    			'DiveBarNYC.com',
    	    			'Oakbrookcommons.com'
    	    		],
    	    		'title' => 'Home', 
                    'description' => 'The detailed description of our about page, Duh!'
	    	]);
    }

    public function about() {
    	return view('about')->with([
    		'title' => 'About',
    		'description' => 'The detailed description of our about page, Duh!'
    	]);
    }
}
