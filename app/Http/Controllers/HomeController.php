<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace Sisti\Http\Controllers;

use Sisti\Http\Requests;
use Illuminate\Http\Request;
use Sisti\Index;

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
        $recordscount = Index::count();
        $pediatric = Index::where('triage_id', '=', 1)->count();
        $adult = Index::where('triage_id', '=', 2)->count();
        $hospitalization = Index::where('triage_id', '=', 3)->count();
        $catch = Index::where('triage_id', '=', 4)->count();
        return view('adminlte::home', compact('recordscount','pediatric','adult','hospitalization','catch'));
    }
}