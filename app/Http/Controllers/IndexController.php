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
        $index->parish_id=$request->parish;
        $index->triage_id=$request->triage;
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

    public function apiIndex(Request $request){
        return Datatables::of(Index::query())
        ->addColumn('action', function($index){
            return  "<div class='btn-group btn-group-xs col-md-offset-3' role='toolbar'>
            <a class='btn btn-info show-index' n='1' href='".route('indexes.show', $index->id)."' data-toggle='tooltip' data-placement='top' title='Ver registros'><span class='fa fa-eye'></span></a>
            <a class='btn bg-yellow edit-index' n='2' update='".route('indexes.update', $index->id)."' href='".route('indexes.edit', $index->id)."' data-toggle='tooltip' data-placement='top' title='Editar registros'><span class='glyphicon glyphicon-edit'></span></a>
            <a class='btn btn-danger destroy-index' href='".route('indexes.destroy', $index->id)."''  data-toggle='tooltip' data-placement='top' title='Eliminar registros'><span class='glyphicon glyphicon-trash'></span></a></div>";
        })
        ->filter(function ($query) use ($request) {
            if ($request->has('number_record')) {
                $query->where('number_record', 'like', "%{$request->get('number_record')}%");
            }

            if ($request->has('patient_id')) {
                $query->where('patient_id', 'like', "%{$request->get('patient_id')}%");
            }

            if ($request->has('name')) {
                $query->where('name', 'like', "%{$request->get('name')}%");
            }

            if ($request->has('last_name')) {
                $query->where('last_name', 'like', "%{$request->get('last_name')}%");
            }

            if ($request->has('birthdate')) {
                $query->where('birthdate', 'like', "%{$request->get('birthdate')}%");
            }

            if ($request->has('admission_date')) {
                $query->where('admission_date', 'like', "%{$request->get('admission_date')}%");
            }
        })
        ->make(true);
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