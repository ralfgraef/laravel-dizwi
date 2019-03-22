<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
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
	
	
	public function index() {
		return view('home');
	}
	
	public function about() {
		return view('about');
	}
	
	
}
