<?php

namespace Sisti\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Sisti\ { Index, State, Municipality, Parish, ForeignCountry, Triage };

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
            'type_doc' => $request['typedoc'],
            'patient_id' => $request['idpatient'],
            'sex' => $request['sex'],
            'number_record' => $request['numbh'],
            'name' => $request['name'],
            'last_name' => $request['lastname'],
            'birthdate' => $request['birthdate'],
            'admission_date' => $request['admissiondate'],
            'egress_date' => $request['egressdate'],
            'anotherc_id' => $request['foreigncountry'],
            'observation' => $request['observation'],
            'user_id' => Auth()->user()->id,
            'triage_id' => $request['triage'],
            'parish_id' => $request['parish']

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
        if ($index->parish)
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
        $index = Index::findOrFail($id);
        $index->user->name;
        $index->triage;
        $index->foreignCountry;
        if ($index->parish)
            $index->parish->municipalities->states;
        return response()->json($index);
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
        $index = Index::find($id);
        $index->fill($request->all());
        $index->save();
         return response()->json($index);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $index = Index::findOrFail($id);
      $index->delete();
      return response()->json($index);
    }

    public function apiIndex(){
        $index = Index::query();

        return Datatables::of($index)
        ->addColumn('action', function($index) {
            return  "<div class='btn-group col-md-offset-3'>
            
            <a class='btn btn-info btn-sm show-index' n='1' href='".route('indexes.show', $index->id)."' data-toggle='tooltip' data-placement='top' title='Ver registros'><span class='fa fa-eye'></span></a>

            <a class='btn bg-yellow btn-sm edit-index' n='2' update='".route('indexes.update', $index->id)."' href='".route('indexes.edit', $index->id)."' data-toggle='tooltip' data-placement='top' title='Editar registros'><span class='glyphicon glyphicon-edit'></span></a>

            <a class='btn btn-sm btn-danger destroy-index' href='".route('indexes.destroy', $index->id)."''  data-toggle='tooltip' data-placement='top' title='Eliminar registros'><span class='glyphicon glyphicon-trash'></span></a></div>";
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

    public function getFcountries(){
        $foreigncountry = ForeignCountry::pluck('foreign_country','id');
        return response()->json($foreigncountry);
    }

    public function getTriages(){
        $triage = Triage::pluck('triage','id');
        return response()->json($triage);
    }

}