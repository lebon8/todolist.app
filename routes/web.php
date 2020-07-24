<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
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

Route::get('/', function () {

    return view('welcome');
});

Route::get('toliste', function () {

    $lestaches = App\Tache::all();
    return view('todolist',compact('lestaches'));
})->name('liste');

Route::get('/newadd', function () {

    return view('ajout');
});

Route::post('enregistre', function (Request $request) {
    
    $verify = App\Tache::whereDescription($request->desc)->get();
    if(! $verify->first()){
        App\Tache::create([
            'description' => $request->desc,
            'from_id' => Auth()->User()->id

        ]); 
    }
    return redirect()->route('liste');
});

Route::get('delete/{id}', function ($id) {
    
    App\Tache::destroy($id);

    return redirect()->route('liste');
});
Route::get('edit/{id}', function ($id) {

    $latache=App\Tache::findOrFail($id);
     return view('modifier',compact('latache'));
 
 });
Route::post('modifier/{id}', function (Request $request, $id) {
    $latache=App\Tache::findOrFail($id);
    $verification = App\Tache::whereDescription($request->description)->get();
    if(! $verification->first()){
        $latache->update([
         'description' => $request->description
     ]);
      return redirect()->route('liste');
    }
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
