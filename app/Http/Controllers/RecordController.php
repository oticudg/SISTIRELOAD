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
            return  '<a href="#" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-eye-open"></i> Ver</a> ' .
                    '<a onclick="editForm('. $record->id .')" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i> Editar</a> ' .
                    '<a onclick="deleteData('. $record->id .')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i> Eliminar</a>';
        })->make(true);
    }
}
