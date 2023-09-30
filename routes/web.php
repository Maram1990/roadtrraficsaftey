<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/signs', function () {
    return view('signs');
});
Route::get('/ma', function () {
    return view('newfolder.ma');
});



route::get('/ma/{id}', function($id){
    return $id;
});

route::get('ma/{id}', function($id){
    return view('newfolder.ma',[
        'id'=>$id]);
});

route::get('/category/{id}', function($id){
    $cat=[
        1=>"games",
        2=>"tools",
        3=>"books",
    ];

    return view('newfolder.category',[
        'cat'=>$cat[$id]??"notfound"
    ]);
});

Route::get('/test', function () {
    return view('test');
});

route::get('contact',function(){
    $name=request("name");
    return $name;
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
