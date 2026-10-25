<?php
//rutas de carpetas

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

//para traer información de la bases de datos ejemplo
// $posts = [
//     ["title" => "First Post"],
//     ["title" => "Second Post"],
//     ["title" => "Third Post"],
//     ["title" => "Fourt Post"],
//     ["title" => "Other Post"]
// ];

// Route::view('/blog', 'blog', ['posts' => $posts])->name('blog');
// Route::get('/blog', function () {
//     $posts = [
//         ["title" => "First Post"],
//         ["title" => "Second Post"],
//         ["title" => "Third Post"],
//         ["title" => "Fourt Post"],
//         ["title" => "Other Post"]
//     ];
//     return view('blog', ['posts' => $posts]);
// })->name('blog');
//..........

// Route::get('/blog', [PostController::class, 'method'])->name('blog');
//Ruta de la conexion de controller
Route::view('/', 'welcome');

Route::get('/blog', [PostController::class, 'index'])->name('blog'); //redenrizar informacion principal

Route::get('/blog/{post}', [PostController::class, 'show']); //para mostrar informacion especifica, {} es un variable que puede ser recibida en el controller

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/nosotros', 'about')->name('about'); //para darle un nombre a la ruta 
// Route::view('/blog', 'blog')->name('blog');
Route::view('/contacto', 'contacto')->name('contacto');

//Tipo de rutas 
// Route::post();
// Route::put();
// Route::patch();
// Route::delete();
// Route::options();
// Route::match(['put', 'patch'], '/user/profile', function(){

// });
// Route::any('/', function(){

// });