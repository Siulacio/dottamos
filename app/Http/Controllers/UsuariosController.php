<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::get();
        return view('admin.usuarios.listado_usuarios',compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.usuarios.nuevo_usuario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserStoreRequest $request)
    {
        $usuario = new User();
        $usuario->username = $request->username;
        $usuario->nombres = $request->nombres;
        $usuario->email = $request->email;
        $usuario->password = bcrypt($request->password);
        $usuario->save();

        return redirect()->action('UsuariosController@index')->with('status','Usuario '.$request->username.' almacenado satisfactoriamente!');
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
        $usuario = User::find($id);
        return view('admin.usuarios.editar_usuario',compact('usuario'));        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request)
    {
        $usuario = User::find($request->id);
        $usuario->username = $request->username;
        $usuario->nombres = $request->nombres;
        $usuario->email = $request->email;

        if($request->password != null && $request->password_confirm != null ){
            $usuario->password = bcrypt($request->password);
        }
        
        $usuario->save();

        return redirect()->action('UsuariosController@index')->with('status','Usuario <b>'.$request->username.'</b> actualizado satisfactoriamente!');

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

    public function activacion($id){
        $usuario = User::find($id);
        if($usuario->estado == 0){
            $usuario->estado = 1;
            $msg = 'Activado';
        }else{
            $usuario->estado = 0;
            $msg = 'Inactivado';
        }
        $usuario->save();
        return redirect()->action('UsuariosController@index')->with('status','Usuario <b>'.$usuario->nombres.'</b> <u>'.$msg.'</u> satisfactoriamente!');

    }
}
