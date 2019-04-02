<?php

namespace App\Http\Controllers;





use Illuminate\Http\Request;



use App\User;




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
		
		
		
		
		$users = User::all();
		
		
		
		
		return view('home', compact('users'));
		
		
		
		
	}
	
	
	
	
	
	public function about() {
		
		
		
		
		return view('about');
		
		
		
		
	}
	
	
	
	
	
	public function contact() {
		
		
		
		
		return view('contact');
		
		
		
		
	}
	
	
	
	
	
	public function datenbank() {
		
		
		
		
		return view('datenbank');
		
		
		
		
	}
	
	
	
	
	
	public function ingest() {
		
		
		
		
		return view('ingest');
		
		
		
		
	}
	
	
	
	
	
	public function speicherorte() {
		
		
		
		
		return view('speicherorte');
		
		
		
		
	}
	
	
	
	
	
}




