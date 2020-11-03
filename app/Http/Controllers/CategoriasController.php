<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use Illuminate\Http\Request;
use App\Http\Requests\CategoriaStoreRequest;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categorias::get();
        return view('admin.categorias.listado_categorias',compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categorias.nueva_categoria');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoriaStoreRequest $request)
    {
        Categorias::create($request->all());
        return redirect()->action('CategoriasController@index')->with('status','Categoria <b>'.$request->nombre.'</b> creada satisfactoriamente!');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categorias  $categorias
     * @return \Illuminate\Http\Response
     */
    public function show(Categorias $categorias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categorias  $categorias
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoria = Categorias::find($id);
        return view('admin.categorias.editar_categoria',compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categorias  $categorias
     * @return \Illuminate\Http\Response
     */
    public function update(CategoriaStoreRequest $request)
    {
        Categorias::find($request->id)->update($request->all());
        return redirect()->action('CategoriasController@index')->with('status','Categoria <b>'.$request->nombre.'</b> actualizada satisfactoriamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categorias  $categorias
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorias $categorias)
    {
        //
    }

    public function activacion($id){
        $categoria = Categorias::find($id);
        if($categoria->estado == 0){
            $categoria->estado = 1;
            $msg = 'Activada';
        }else{
            $categoria->estado = 0;
            $msg = 'Inactivada';
        }
        $categoria->save();
        return redirect()->action('CategoriasController@index')->with('status','Categoria <b>'.$categoria->nombre.'</b> <u>'.$msg.'</u> satisfactoriamente!');

    }
}
