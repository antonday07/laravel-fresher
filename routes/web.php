<?php

use App\Http\Controllers\QuickmetricsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Home', [
        'name' => 'Antonday',
        'stacks' => [
            'Laravel',
            'Vuejs',
            'Inertiajs',
            'Taiwindcss'
        ]
    ]);
    
});

Route::get('/users', function() {
    return Inertia::render('Users', [
        'time' => now()->toTimeString()
    ]);
});

Route::get('/settings', function() {
    return Inertia::render('Settings');
});


Route::post('/logout', function(Request $request) {
    dd($request->user . ' has logout !');
   
});

Route::get('/test', [QuickmetricsController::class, 'test']);