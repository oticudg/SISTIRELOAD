<?php

namespace Sisti\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Yajra\Datatables\Services\DataTable;
use Sisti\ { User };

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users');
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
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        User::create($input);

        return response()->json([
            'success' => true,
            'message' => 'Usuario Creado'
        ]);
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
        $user = User::findOrFail($id);
        return $user;
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
        $input = $request->all();
        $user = User::findOrFail($id);
        $user->update($input);
        return response()->json([
            'success' => true,
            'message' => 'Usuario editado'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        User::destroy($id);
        return response()->json([
            'success' => true,
            'message' => 'Usuario eliminado'
        ]);
    }

    public function apiUser()
    {
        $user = User::all();
        return Datatables::of($user)
        ->addColumn('action', function($user){
            return  "<div class='btn-group btn-group-xs col-md-offset-3' role='toolbar'>
            <a class='btn bg-yellow' onclick='editForm(". $user->id .")' data-toggle='tooltip' data-placement='top' title='Editar registros'><span class='glyphicon glyphicon-edit'></span></a>
            <a class='btn btn-danger' onclick='deleteData(". $user->id .")'  data-toggle='tooltip' data-placement='top' title='Eliminar registros'><span class='glyphicon glyphicon-trash'></span></a></div>";
        })->make(true);
    }

    // public function apiUser()
    // {
    //     $user = User::all();
 
    //     return Datatables::of($user)
    //         ->addColumn('action', function($contact){
    //             return '<a href="#" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-eye-open"></i> Show</a> ' .
    //                    '<a onclick="editForm('. $contact->id .')" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i> Edit</a> ' .
    //                    '<a onclick="deleteData('. $contact->id .')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
    //         })
    //         ->rawColumns(['show_photo', 'action'])->make(true);
    // }
}
