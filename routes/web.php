<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\SubmitProperty;
use App\Http\Controllers\homeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PropertyController;




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

    $properties = Property::all();
    return view('index', ['properties' => $properties]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
   
    Route::get('/dashboard', function () {
         $properties = Property::all();
        return view('index', ['properties' => $properties]);
    })->name('dashboard');
});
Route::middleware(['auth'])->group(function () {
    
Route::get('/submitproperty', [PropertyController::class,'ShowSubmitProperty'])->name('submitproperty');
 Route::post('/submitproperty', [PropertyController::class, 'SubmitProperty']);
});

// Auth controller.
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//
Route::get("policy",function(){
    return view("policy");
   }); 
