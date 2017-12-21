<?php
namespace Sisti\Http\Controllers;
use Illuminate\Http\Request;
use Sisti\User;
use Yajra\DataTables\DataTables;
use Laracasts\Flash\Flash;
class UsersController extends Controller
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
    public function data(Datatables $datatables)
    {
        return $datatables->eloquent(User::query())
                          ->addColumn('action', function ($user) {
                              return "<div class='btn-group col-md-offset-3'><a class='btn btn-info btn-sm' href='".route('users.edit', $user->id)."' data-toggle='tooltip' data-placement='top' title='Ver registros'><span class='fa fa-eye'></span></a><a class='btn bg-yellow btn-sm' href='".route('users.edit', $user->id)."' data-toggle='tooltip' data-placement='top' title='Editar registros'><span class='glyphicon glyphicon-edit'></span></a><a class='btn btn-sm btn-danger' href='".route('users.destroy', $user->id)."' onclick=\"confirm ('Desea borralo?')\"  data-toggle='tooltip' data-placement='top' title='Eliminar registros'><span class='glyphicon glyphicon-trash'></span></a></div>";
                        })->make(true);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
    {
        return view('admin.users.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //creando nuevo usuario
        $user = new User($request->all());
        //encriptando contraseña
        $user->password = bcrypt($request->password);
        $user->save();
        Flash::success("Se ha registrado " . $user->name . "de forma exitosa!");
        return redirect()->route('users.index');
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
        $user = User::find($id);
        return view('admin.users.edit')->with('user', $user);
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
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->type = $request->type;
        $user->save();
        Flash::success('El usuario' . $user->name . 'ha sido editado con exito');
        return redirect()->route('users.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        Flash::error('El usuario' . $user->name . 'ha sido elimanado');
        return redirect()->route('users.index');
    }
}