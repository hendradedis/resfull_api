<?php

namespace App\Http\Controllers;
use App\provinsi;

class HomeController extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
		//$this->middleware('auth');
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		return view('home');
	}
	public function travel() {
		return view('page.travel');
	}
	public function theman() {
		return view('page.theman');
	}
	public function provinsi() {
		$provinsi = provinsi::select("id", "name")->get();
		return response()->json($provinsi);
	}

}
