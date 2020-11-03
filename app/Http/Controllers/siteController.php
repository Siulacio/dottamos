<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Models\Empresa;
use App\Models\Productos;
use App\Models\Categorias;

class siteController extends Controller
{

    public function index(){
        $empresa = Empresa::find(1);
        $productos = Productos::where('destacado',1)->get();
        return view('sitio.template',compact('empresa','productos'));
    }

    public function admin(){
        $empresa = Empresa::find(1);
        return view('admin.dashboard',compact('empresa'));
    }

    public function contacto(){
        $empresa = Empresa::find(1);
        return view('sitio.paginas.contacto',compact('empresa'));
    }

    public function nosotros(){
        $empresa = Empresa::find(1);
        return view('sitio.paginas.nosotros',compact('empresa'));
    }

    public function catalogoAseo(){
        $empresa = Empresa::find(1);
        $categoria = Categorias::find(1);
        $productos = Productos::where('categoria_id',$categoria->id)->paginate(8);
        return view('sitio.paginas.catalogo_aseo',compact('empresa','productos','categoria'));
    }

    public function catalogoPapeleria(){
        $empresa = Empresa::find(1);
        $categoria = Categorias::find(2);
        $productos = Productos::where('categoria_id',$categoria->id)->paginate(8);
        return view('sitio.paginas.catalogo_papeleria',compact('empresa','productos','categoria'));
    }

    public function catalogoSalud(){
        $empresa = Empresa::find(1);
        $categoria = Categorias::find(3);
        $productos = Productos::where('categoria_id',$categoria->id)->paginate(8);
        return view('sitio.paginas.catalogo_salud',compact('empresa','productos','categoria'));
    }

    public function enviarEmail(Request $request){
        // dd($request);
        $empresa = Empresa::find(1);
        
        $data = array(
            'nombres'    =>  $request->nombres.' '.$request->apellidos,
            'email'     =>  $request->email,
            'celular'  =>  $request->celular,
            'asunto'    =>  $request->asunto,
            'mensaje'   =>  $request->mensaje,
        );


        try{
            Mail::send('sitio.email.email_template', $data, function ($message) use ($request, $empresa){
                $message->from('comunicaciones.dottamos@gmail.com', 'Comunicaciones Dottamos');
                $message->to($empresa->email, 'Dottamos');
                $message->subject($request->asunto);
            });
        }catch (\Exception $e) {            
            return back()->with('status2','Falló envío de email, por favor, revise su conexión a internet e intente mas tarde.');
        }

        return back()->with('status','¡Información de contacto enviada exitosamente!');
        
    }
}
