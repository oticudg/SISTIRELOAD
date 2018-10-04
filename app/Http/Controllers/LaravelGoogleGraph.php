<?php

namespace Sisti\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class LaravelGoogleGraph extends Controller
{
    function sex()
    {
     $data = DB::table('indexes')
       ->select(
        DB::raw('sex as sex'),
        DB::raw('count(*) as number'))
       ->groupBy('sex')
       ->get();
     $array[] = ['Sex', 'Number'];
     foreach($data as $key => $value)
     {
      $array[++$key] = [$value->sex, $value->number];
     }
     return view('sex_pie_chart')->with('sex', json_encode($array));
    }

    
}
