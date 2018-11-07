<?php
namespace Sisti\Http\Controllers;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Yajra\Datatables\Services\DataTable;
use Sisti\ { NewIndex, State, Municipality, Parish, ForeignCountry, Triage };
use Sisti\Http\Requests\{NewIndexCreateRequest, NewIndexEditRequest};
use Carbon\Carbon;
class NewIndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('new_records');
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
    public function store(NewIndexCreateRequest $request)
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
            'anotherc_id' => $request['foreigncountry'],
            'observation' => $request['observation'],
            'user_id' => Auth()->user()->id,
            'triage_id' => $request['triage_id'],
            'parish_id' => $request['parish']
        ];
        return NewIndex::create($data);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $index = NewIndex::findOrFail($id);
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
        $index = NewIndex::findOrFail($id);
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
    public function update(NewIndexEditRequest $request, $id)
    {
        $index = NewIndex::find($id);
        $index->fill($request->all());
        $index->parish_id=$request->parish;
        $index->anotherc_id=$request->foreigncountry;
        $index->triage_id=$request->triage_id;
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
      $index = NewIndex::findOrFail($id);
      $index->delete();
      return response()->json($index);
    }

    public function apiNewIndex(Request $request){
       return Datatables::of(NewIndex::query())
        ->addColumn('action', function($index){
            $buttons = "<div class='btn-group btn-group-xs col-md-offset-3' role='toolbar'>
            <a class='btn btn-info show-index' n='1' href='".route('newindexes.show', $index->id)."' data-toggle='tooltip' data-placement='top' title='Ver registros'><span class='fa fa-eye'></span></a>
            <a class='btn bg-yellow edit-index' n='2' update='".route('newindexes.update', $index->id)."' href='".route('newindexes.edit', $index->id)."' data-toggle='tooltip' data-placement='top' title='Editar registros'><span class='glyphicon glyphicon-edit'></span></a>";
            if (\Auth::user()->admin()) {
            $buttons .= "<a class='btn btn-danger destroy-index' href='".route('newindexes.destroy', $index->id)."''  data-toggle='tooltip' data-placement='top' title='Eliminar registros'><span class='glyphicon glyphicon-trash'></span></a>";
            }
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
