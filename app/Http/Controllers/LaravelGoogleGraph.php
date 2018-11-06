<?php

namespace Sisti\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class LaravelGoogleGraph extends Controller
{
    function sex()
    {
     $data = DB::table('new_indexes')
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


    function triage()
    {
     $data = DB::table('new_indexes')
       ->join('triages', 'new_indexes.id', '=', 'triages.id')
       ->select(
        DB::raw('triages.triage as triage'),
        DB::raw('count(*) as number'))
       ->groupBy('triage')
       ->get();
     $array[] = ['Triage', 'Number'];
     foreach($data as $key => $value)
     {
      $array[++$key] = [$value->triage, $value->number];
     }
     return view('triage_pie_chart')->with('triage', json_encode($array));
    }

    function doc()
    {
     $data = DB::table('new_indexes')
       ->select(
        DB::raw('type_doc as doc'),
        DB::raw('count(*) as number'))
       ->groupBy('doc')
       ->get();
     $array[] = ['Doc', 'Number'];
     foreach($data as $key => $value)
     {
      $array[++$key] = [$value->doc, $value->number];
     }
     return view('doc_pie_chart')->with('doc', json_encode($array));
    }

    
}
