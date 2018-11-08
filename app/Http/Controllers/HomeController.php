<?php

namespace Sisti\Http\Controllers;
use Sisti\Http\Requests;
use Illuminate\Http\Request;
use Sisti\NewIndex;

class HomeController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{
		$recordscount = NewIndex::count();
		$pediatric = NewIndex::where('triage_id', '=', 1)->count();
		$adult = NewIndex::where('triage_id', '=', 2)->count();
		$hospitalization = NewIndex::where('triage_id', '=', 3)->count();
		$catch = NewIndex::where('triage_id', '=', 4)->count();
		return view('adminlte::home', compact('recordscount','pediatric','adult','hospitalization','catch'));
	}
}