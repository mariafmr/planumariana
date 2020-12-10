<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Threat;
use Illuminate\Http\Request;
use App\Type;

class AdminTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {       
        //$this->authorize('haveaccess','product.index');
        $title = $request->get('title');
       //with('images','category')->
        $types = Type::with('images')->where('title','like',"%$title%")->orderBy('id')->paginate(10);
        return view('adminlte.types.index',compact('types'));      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$this->authorize('haveaccess','product.create');

        //$estados_productos = $this->estados_productos();
        $threats = Threat::orderBy('title')->get();
        return view('adminlte.types.create',compact('threats'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // $this->authorize('haveaccess','product.create');
        
        $urlimag = [];
        if ($request->hasFile('imagenes')) {
            $imagenes = $request->file('imagenes');
          //  dd ($imagenes);
           foreach ($imagenes as $imagen) {

                $nombre = time().'_'.$imagen->getClientOriginalName();

                $ruta = public_path().'/imagenes';
                
                $imagen->move($ruta , $nombre);

                $urlimag[]['url'] = '/imagenes/'.$nombre;
            }

            //return $urlimagenes;

        }
        $type = new Type();
        $type->title = request('title');
        $type->subtitle = request('subtitle');
        $type->content = request('threat_content1');
        $type->content_long = request('threat_content2');
        $type->threat_id = request('threat_id');
      
        $type->save();
        $type->images()->createMany($urlimag);
        return redirect('/tipoamenazas/create');

       // return $type->images;
       // return redirect()->route('adminlte.types.index')->with('datos','Registro creado correctamente!');

       //return ($request->all());
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
       // $this->authorize('haveaccess','product.edit');

        $types = Type::with('images')->where('id',$id)->firstOrFail();

        $threats = Threat::orderBy('title')->get();

  

        //dd($estados_productos);
        
        return view('adminlte.types.edit',compact('types','threats'));
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
}
