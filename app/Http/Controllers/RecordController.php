<?php

namespace Sisti\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\Datatables;
use Sisti\Index;

class RecordController extends Controller
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
        //
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

    public function apiRecord(){
        
        $record = Index::all();

        return Datatables::of($record)
        ->addColumn('action', function($record) {
            return  "<div class='btn-group col-md-offset-3'><a class='btn btn-info btn-sm' href='".route('users.edit', $record->id)."' data-toggle='tooltip' data-placement='top' title='Ver registros'><span class='fa fa-eye'></span></a><a class='btn bg-yellow btn-sm' href='".route('users.edit', $record->id)."' data-toggle='tooltip' data-placement='top' title='Editar registros'><span class='glyphicon glyphicon-edit'></span></a><a class='btn btn-sm btn-danger' href='".route('users.destroy', $record->id)."' onclick=\"confirm ('Desea borralo?')\"  data-toggle='tooltip' data-placement='top' title='Eliminar registros'><span class='glyphicon glyphicon-trash'></span></a></div>";
        })
        ->make(true);
    }


    // public function apiRecord(Datatables $datatables)
    // {
    //     return $datatables->eloquent(Index::query())
    //                       ->addColumn('action', function ($record) {
    //                           return "<div class='btn-group col-md-offset-3'><a class='btn btn-info btn-sm' href='".route('users.edit', $record->id)."' data-toggle='tooltip' data-placement='top' title='Ver registros'><span class='fa fa-eye'></span></a><a class='btn bg-yellow btn-sm' href='".route('users.edit', $record->id)."' data-toggle='tooltip' data-placement='top' title='Editar registros'><span class='glyphicon glyphicon-edit'></span></a><a class='btn btn-sm btn-danger' href='".route('users.destroy', $record->id)."' onclick=\"confirm ('Desea borralo?')\"  data-toggle='tooltip' data-placement='top' title='Eliminar registros'><span class='glyphicon glyphicon-trash'></span></a></div>";
    //                     })->make(true);
    // }
}
