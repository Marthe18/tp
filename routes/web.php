<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PropertyController;
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
$idRegex = '[0-9a-z]+';
$slug = '[0-9a-z\-]+';

Route::get('/', [HomeController::class, 'index']);
Route::get('/biens', [PropertyController::class, 'index'])->name('property.index');
Route::get('/biens/{slug}-{property}', [PropertyController::class, 'show'])
    ->name('property.show')
    ->where([
        'property' => $idRegex,
        'slug' => '[a-z0-9-]+',
    ]);

Route::post('/biens/{property}/contact',[PropertyController::class,'contact'])->name('property.contact')->where([
    'property' => $idRegex,

]);

Route::get('/login', [App\Http\Controllers\AuthController::class, 'login'])->middleware('guest')->name('login');
Route::post('/login', [App\Http\Controllers\AuthController::class, 'dologin']);
Route::delete('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->middleware('auth')->name('logout');


Route::prefix('admin')->name('admin.')->middleware('auth')->group(function(){
    Route::resource('property', App\Http\Controllers\Admin\PropertyController::class)->except(['show']);
    Route::post('/property', [App\Http\Controllers\Admin\PropertyController::class, 'store'])->name('property.new');
    Route::resource('option', App\Http\Controllers\Admin\OptionController::class)->except(['show']);


});
