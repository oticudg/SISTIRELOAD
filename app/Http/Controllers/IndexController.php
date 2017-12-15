<?php

namespace Sisti\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Sisti\ { Index, State, Municipality, Parish };

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('records');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'type_doc' => $request['type_doc'],
            'patient_id' => $request['patient_id'],
            'sex' => $request['sex'],
            'number_record' => $request['number_record'],
            'name' => $request['name'],
            'last_name' => $request['last_name'],
            'birthdate' => $request['birthdate'],
            'admission_date' => $request['admission_date'],
            'egress_date' => $request['egress_date'],
            'anotherc_id' => $request['anotherc_id'],
            'observation' => $request['observation'],
            'user_id' => $request['user_id'],
            'parish_id' => $request['parish_id']

        ];
         return Index::create($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $index = Index::findOrFail($id);
        $index->user->name;
        $index->triage;
        $index->foreignCountry;
        $index->parish->municipalities->states;
        return response()->json($index);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function apiIndex(){
        $index = Index::all();

        return Datatables::of($index)
        ->addColumn('action', function($index) {
            return  "<div class='btn-group col-md-offset-3'>
            
            <a class='btn btn-info btn-sm' id='show-index' href='".route('indexes.show', $index->id)."' data-toggle='tooltip' data-placement='top' title='Ver registros'><span class='fa fa-eye'></span></a>

            <a class='btn bg-yellow btn-sm' id='edit-index' href='".route('indexes.edit', $index->id)."' data-toggle='tooltip' data-placement='top' title='Editar registros'><span class='glyphicon glyphicon-edit'></span></a>

            <a class='btn btn-sm btn-danger' id='delete-index' href='".route('indexes.destroy', $index->id)."' onclick=\"confirm ('Desea borralo?')\"  data-toggle='tooltip' data-placement='top' title='Eliminar registros'><span class='glyphicon glyphicon-trash'></span></a></div>";
        })->make(true);
    }


     public function getStates(){
        $state = State::pluck('state','id');
        return response()->json($state);
    } 

    public function getMunicipalities(Request $request){
        $municipality = Municipality::where('state_id', '=', $request->id)->pluck('municipality','id');
        return response()->json($municipality);
    }   

    public function getParishes(Request $request){
        $parish = Parish::where('municipality_id', '=', $request->id)->pluck('parish','id');
        return response()->json($parish);
    }

        // public function apiRecord(Datatables $datatables)
    // {
    //     return $datatables->eloquent(Index::query())
    //                       ->addColumn('action', function ($record) {
    //                           return "<div class='btn-group col-md-offset-3'><a class='btn btn-info btn-sm' href='".route('users.edit', $record->id)."' data-toggle='tooltip' data-placement='top' title='Ver registros'><span class='fa fa-eye'></span></a><a class='btn bg-yellow btn-sm' href='".route('users.edit', $record->id)."' data-toggle='tooltip' data-placement='top' title='Editar registros'><span class='glyphicon glyphicon-edit'></span></a><a class='btn btn-sm btn-danger' href='".route('users.destroy', $record->id)."' onclick=\"confirm ('Desea borralo?')\"  data-toggle='tooltip' data-placement='top' title='Eliminar registros'><span class='glyphicon glyphicon-trash'></span></a></div>";
    //                     })->make(true);
    // }  
}
