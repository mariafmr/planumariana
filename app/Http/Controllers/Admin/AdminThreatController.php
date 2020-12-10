<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Threat;
use App\Type;
use App\Image;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class AdminThreatController extends Controller
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
        $threats = Threat::with('images')->where('title','like',"%$title%")->orderBy('id')->paginate(10);
        return view('adminlte.threats.index',compact('threats'));      
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $threats = Threat::orderBy('title')->get();
        return view('adminlte.threats.create',compact('threats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $urlimagenes = [];
        if ($request->hasFile('imagenes')) {
            $imagenes = $request->file('imagenes');
          //  dd ($imagenes);
           foreach ($imagenes as $imagen) {

                $nombre = time().'_'.$imagen->getClientOriginalName();               
                $ruta = public_path().'/imagenes';
                $imagen->move($ruta , $nombre);
                $urlimagenes[]['url'] = '/imagenes/'.$nombre;
            }

            //return $urlimagenes;

        }
       // dd($threat);
       $user =auth()->user();
       $threat = new Threat();
       //dd($threat);
       $threat->title = request('title');
       $threat->subtitle = request('subtitle');
       $threat->content = request('threat_content1');
       $threat->content_long = request('threat_content2');
       //$threat->user_id = $user->id;
       $threat->save();
       $threat->images()->createMany($urlimagenes);
      
      
      
       return redirect('/amenazas/create');
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
        
        //$types = Type::with('images')->where('id',$id)->firstOrFail();

        $threat = Threat::with('images')->where('id',$id)->firstOrFail();
        //orderBy('title')->get();

        //dd($estados_productos);
        
        return view('adminlte.threats.edit',compact('threat'));
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
     
        $urlimagenes = [];
        if ($request->hasFile('imagenes')) {
            $imagenes = $request->file('imagenes');
          //  dd ($imagenes);
           foreach ($imagenes as $imagen) {

                $nombre = time().'_'.$imagen->getClientOriginalName();

               
                $ruta = public_path().'/imagenes';
                
                $imagen->move($ruta , $nombre);

                $urlimagenes[]['url'] = '/imagenes/'.$nombre;
            }

            //return $urlimagenes;

        }
    
       // dd($threat);
       $user =auth()->user();
       $threat= Threat::findOrFail($id);
       //dd($threat);
       $threat->title = request('title');
       $threat->subtitle = request('subtitle');
       $threat->content = request('threat_content1');
       $threat->content_long = request('threat_content2');
       $threat->user_id = $user->id;
       $threat->save();
       $threat->images()->createMany($urlimagenes);
      
             //return $request;
            // $threat= Threat::findOrFail($id);
            // $threat->fill($request->all())->save();
             // return $request;
      
      return redirect('/amenazas');
       
    //   return redirect()->route('adminlte.threats.edit',$threat->id)->with('datos','Registro actualizado correctamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $threat= Threat::find($request->post_id);
       // $threat= Threat::find($threat->images);
       // $oldImage = public_path() . '/imagenes'. $images->id;
    // dd($threat->images);//public_path().'/imagenes';
       // if(file_exists($oldImage)){
            //delete the image
        //    unlink($oldImage);
      //  }

        //delete the post
        $threat->delete();

        //redirect to posts
        return redirect('/amenazas');

    }
    
    public function eliminarimagen(Request $request)
    {
        
        //return "se va a eliminar el registro ".$id;
        $image = Image::find($request->post_id);
        dd( $image);
        $archivo = substr($image->url,1);

        $eliminar = File::delete($archivo);

        $image->delete();

        //return "eliminado id:".$id. ' '.$eliminar;
    }
}
