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
        //
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
            return  '<a href="#" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-eye-open"></i> Ver</a> ' .
                    '<a onclick="editForm('. $index->id .')" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i> Editar</a> ' .
                    '<a onclick="deleteData('. $index->id .')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i> Eliminar</a>';
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
}
