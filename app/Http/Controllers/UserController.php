<?php

namespace Sisti\Http\Controllers;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Yajra\Datatables\Services\DataTable;
use Sisti\ { User };
use Sisti\Http\Requests\{NewUserCreateRequest, NewUserEditRequest};

class UserController extends Controller
{

    public function index()
    {
        return view('users');
    }

    public function create()
    {
    //
    }

    public function store(NewUserCreateRequest $request)
    {
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        User::create($input);

        return response()->json([
            'success' => true,
            'message' => 'Usuario Creado'
        ]);
    }

    public function show($id)
    {
    //
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return $user;
    }

    public function update(NewUserEditRequest $request, $id)
    {
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::findOrFail($id);
        $user->update($input);
        return response()->json([
            'success' => true,
            'message' => 'Usuario editado'
        ]);
    }

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
            <a class='btn bg-yellow btn-flat' onclick='editForm(". $user->id .")' data-toggle='tooltip' data-placement='top' title='EDITAR REGISTROS'><span class='glyphicon glyphicon-edit'></span></a>
            <a class='btn btn-danger btn-flat' onclick='deleteData(". $user->id .")'  data-toggle='tooltip' data-placement='top' title='ELIMINAR REGISTROS'><span class='glyphicon glyphicon-trash'></span></a></div>";
        })->make(true);
    }

}
