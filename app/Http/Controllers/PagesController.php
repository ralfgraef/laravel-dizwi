<?php

namespace App\Http\Controllers;










use Illuminate\Http\Request;









use App\User;









use Yajra\Datatables\Datatables;












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
	
	
	
	
	
	
	
	
	
	
	public function help() {
		
		
		
		
		
		
		
		
		
		
		return view('help');
		
		
		
		
		
		
		
		
		
		
	}
	
	
	
	
	
	
	
	
	
	
	public function contact() {
		
		
		
		
		
		
		
		
		
		
		return view('contact');
		
		
		
		
		
		
		
		
		
		
	}
	
	
	
	
	
	
	
	
	
	
	public function datenbank() {
		
		
		
		
		$users = User::all();
		
		
		
		
		return view('datenbank', compact('users'));
		
		
		
		
	}
	
	
	
	
	public function getUsers() {
		
		
		return Datatables::of(User::query())->make(true);
		
		
	}
	
	
	
	
	
	
	
	
	public function ingest() {
		
		
		
		
		
		
		
		
		
		
		return view('ingest');
		
		
		
		
		
		
		
		
		
		
	}
	
	
	
	
	
	
	
	
	
	
	public function speicherorte() {
		
		
		
		
		
		
		
		
		
		return view('speicherorte');
		
		
		
		
		
		
		
		
		
	}
	
	
	
	
	
	
	
	
	
}













