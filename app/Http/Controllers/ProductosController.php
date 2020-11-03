<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use App\Models\Categorias;
use Illuminate\Http\Request;
use App\Traits\ToolBox;
use App\Http\Requests\ProductoStoreRequest;
use App\Http\Requests\ProductoUpdateRequest;


class ProductosController extends Controller
{
    use ToolBox;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax()){
            $productos = Productos::with('categorias')->select('productos.*');
            return datatables()->of($productos)
                ->editColumn('descripcion', function($data){
                    return strip_tags( substr($data->descripcion,0,70).'...');
                })
                ->editColumn('estado', function($data){
                   if($data->estado == 1 ){
                        $estado = '<span class="badge badge-primary"> Activo </span>';
                   }else{
                        $estado = '<span class="badge badge-danger"> Inactivo </span>';
                   }
                   return $estado;
                })
                ->addColumn('btn', function($data){
                    $action = '<div class="btn-group dropdown">';
                    $action .= '<a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>';
                    $action .= '<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(39px, 28px, 0px);">';
                    $action .= '<a class="dropdown-item" href="'.asset('/admin/productos/editar/'.$data->id).'"><i class="icon-note mr-2 text-muted font-18 vertical-middle" title="Editar"></i>Editar</a>';
                    $action .= '<a class="dropdown-item ver" href="#" id="'.$data->id.'"><i class="icon-eye mr-2 text-muted font-18 vertical-middle ver" title="Ver"></i>Ver imágen</a>';
                    $action .= '<a class="dropdown-item" href="'.asset('/admin/productos/activacion/'.$data->id).'">';
                    $action .= ($data->estado == 1) ? '<i class="icon-close mr-2 text-muted font-18 vertical-middle" title="Inactivar"></i> Inactivar' : '<i class="icon-check mr-2 text-muted font-18 vertical-middle" title="Activar"></i> Activar';
                    $action .= '</a>';
                    $action .= '</div>';      
                    $action .='</div>';
                    return $action;
                })
                ->escapeColumns(['contenido'])
                ->rawColumns(['btn','contenido','estado'])    
                ->make(true);
                
        }
        return view('admin.productos.listado_productos');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categorias::get();
        return view('admin.productos.nuevo_producto',compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductoStoreRequest $request)
    {
        $producto = new Productos();
        $producto->fill($request->all());

        if($request->imagen != null){
            $filename = static::nombreArchivo( $request->imagen->getClientOriginalName() );
            $request->imagen->move(public_path('img/productos'), $filename);
            $producto->imagen = $filename;
        }

        if($request->destacado == 'on'){
            $producto->destacado = 1;
        }else{
            $producto->destacado = 0;
        }

        $producto->save();
        return redirect()->action('ProductosController@index')->with('status','Producto <b>'.$request->nombre.'</b> creado satisfactoriamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = Productos::find($id);
        if(request()->ajax()){
            return $producto;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Productos::find($id);
        $categorias = Categorias::get();
        return view('admin.productos.editar_producto',compact('producto','categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function update(ProductoUpdateRequest $request)
    {
        $producto = Productos::find($request->id);

        if($request->imagen != null){
            if($producto->imagen != null){
                unlink(public_path().'/'.'img/productos'.'/'.$producto->imagen);
            }
            $filename = static::nombreArchivo( $request->imagen->getClientOriginalName() );
            $request->imagen->move(public_path('img/productos'), $filename);
            $producto->imagen = $filename;
        }

        if($request->destacado == 'on'){
            $producto->destacado = 1;
        }else{
            $producto->destacado = 0;
        }

        $producto->nombre = $request->nombre; 
        $producto->descripcion = $request->descripcion; 
        $producto->categoria_id = $request->categoria_id; 
        $producto->precio = $request->precio; 
        $producto->orden = $request->orden; 

        $producto->save();
        return redirect()->action('ProductosController@index')->with('status','Producto <b>'.$request->nombre.'</b> actualizado satisfactoriamente!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Productos $productos)
    {
        //
    }

    public function activacion($id){
        $producto = Productos::find($id);
        if($producto->estado == 0){
            $producto->estado = 1;
            $msg = 'Activado';
        }else{
            $producto->estado = 0;
            $msg = 'Inactivado';
        }
        $producto->save();
        return redirect()->action('ProductosController@index')->with('status','Producto <b>'.$producto->nombre.'</b> <u>'.$msg.'</u> satisfactoriamente!');

    }
}
