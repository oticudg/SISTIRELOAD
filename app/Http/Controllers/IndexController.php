<?php

namespace Sisti\Http\Controllers;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Yajra\Datatables\Services\DataTable;
use Sisti\ {Index, Triage};
use Carbon\Carbon;

class IndexController extends Controller
{

    public function index()
    {
        return view('records');
    }

    public function show($id)
    {
        $index = Index::findOrFail($id);
        $index->triage;

        return response()->json($index);
    }

    public function apiIndex(Request $request){
        return Datatables::of(Index::query())
        ->addColumn('action', function($index){
            $buttons = "<div class='btn-group btn-group-xs col-md-offset-5' role='toolbar'>
            <a class='btn btn-info show-index' n='1' href='".route('indexes.show', $index->id)."' data-toggle='tooltip' data-placement='top' title='Ver registros'><span class='fa fa-eye'></span></a>";
            return $buttons .= "</div>";
        })
        ->filter(function ($query) use ($request) {
            if ($request->number_record != '') {
                $query->where('number_record', 'like', "%{$request->number_record}%");
            }
            if ($request->patient_id != '') {
                $query->where('patient_id', 'like', "%{$request->patient_id}%");
            }
            if ($request->name != '') {
                $query->where('name', 'like', "%{$request->name}%");
            }
            if ($request->last_name != '') {
                $query->where('last_name', 'like', "%{$request->last_name}%");
            }
            if ($request->birthdate != '') {
                $query->where('birthdate', 'like', "%{$request->birthdate}%");
            }
            if ($request->admission_date != '') {
                $query->where('admission_date', 'like', "%{$request->admission_date}%");
            }
        })
        ->make(true);
    }
    
    public function getTriages(){
        $triage = Triage::pluck('triage','id');
        return response()->json($triage);
    }
}