<?php
use App\Http\Controllers\UserController;
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
//Route::get('/', function() { return view('welcome');});

//Route::get('/',[UserController::class, 'welcome'])->name('user.welcome');
Route::get('/login', [App\Http\Controllers\LoginController::class, 'index'])->name('user.login');
Route::post('/login', [App\Http\Controllers\LoginController::class, 'autenticar'])->name('user.login');

Route::prefix('users')->name('user.')->controller(UserController::class)->group(function (){
    Route::get('/','index')->name('index');
    Route::get('/create','create')->name('create');
    Route::post('/create','store')->name('store');
    Route::get('/edit/{user}','edit')->name('edit');
    Route::put('/update/{user}','update')->name('update');
    Route::delete('/destroy/{user}','destroy')->name('destroy');
    Route::get('/{user}','show')->missing(function (Illuminate\Http\Request $request) {
        return redirect()->route('user.index');
    })->name('show');
    Route::fallback(function () {
        return redirect()->route('user.index');
    });
        //Route::resource('/', UserController::class)->middleware('MyfirstMiddleware');
});