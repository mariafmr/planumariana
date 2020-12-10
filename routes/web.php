<?php
use App\Threat;
use App\User;
use App\Type;
use App\Image;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/prueba1', function (){
    // $threat = Threat::find(2);
    // return  $threat;
   // $type = Type::find(1);
   // return $type;
   $imagen = [];
   $imagen[]['url'] = 'imagenes/avatar.png';
   $imagen[]['url'] = 'imagenes/avatar2.png';
   $imagen[]['url'] = 'imagenes/avatar3.png';
   $imagen[]['url'] = 'imagenes/a.png';
   $imagen[]['url'] = 'imagenes/a.png';
   $imagen[]['url'] = 'imagenes/a.png';
   $threat = App\Threat::find(2);
   $threat->images()->createMany($imagen);
  
   return  $threat->images;
   
   //$user = User::find(1)->threats;
  //  return $user;
  // $type = Type::find(1)->threat;
  
  //  
  //prueba para editar un tipo
 // $type = App\Type::with('images')->orderby('id')->get();
  
 // $producto = App\Product::with('images','category')->find(3);

});

Auth::routes();

Route::get('/planemergencias', 'HomeController@index')->name('login');

//RUTAS DE ADMINISTRADOR
Route::get('/administrador','Admin\AdminController@index');
//RUTAS DE AMENAZAS
Route::resource('/amenazas', 'Admin\AdminThreatController');
//RUTAS DE TIPOS AMENAZAS
Route::resource('/tipoamenazas', 'Admin\AdminTypeController');
//RUTAS DE BRIGADAS
Route::resource('/brigadas', 'Admin\AdminBrigadeController');


Route::delete('/eliminarimagen/{id}','Admin\AdminTypeController@eliminarimagen');













//IMAGENES

Route::get('/prueba', function (){
  
 
    //15 carga previa (eager loading()  
    $threat = App\Threat::with('images')->get();
    return $threat;

});

Route::get('/resultados', function (){
    
    $image = App\Image::orderBy('id', 'Desc')->get();
    return $image;
});

Route::get('/pruebaeditar', function (){
  
 
    //15 carga previa (eager loading()  
return view('adminlte.types.edit');

});


Route::get('/pruebabri', function (){
  
 //return 'hola muadno';
    //15 carga previa (eager loading()  
  return view('adminlte.brigades.index');

});