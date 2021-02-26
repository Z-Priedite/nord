<?php
use App\Models\Contact;
use Illuminate\Support\Facades\Route;

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
    return view('pages.first');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/project', function () {
    return view('pages.project');
});


Route::get('/contact', function () {
    return view('pages.contact');
});

Route::post('/contact', function () {
   // $var = request()->all();
  //  $specvar = request()->input('name');
    // dd($var, $specvar);
 

    $newpost = new Contact;

    $newpost->name = request()->input('name');
    $newpost->email = request()->input('email');
    $newpost->telephone = request()->input('telephone');
    $newpost->message = request()->input('message');
    $newpost->save();

    return redirect('/contact')
    ->with('message','Ziņa ir nosūtīta');
});


 
 
 
