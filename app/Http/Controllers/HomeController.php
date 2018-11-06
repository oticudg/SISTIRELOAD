<?php

namespace Sisti\Http\Controllers;

use Sisti\Http\Requests;
use Illuminate\Http\Request;
use Sisti\NewIndex;

/**
 * Class HomeController
 * @package Sisti\Http\Controllers
 */
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
     * @return Response
     */
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