<?php

use App\Models\User;
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
    return Inertia::render('Home',[
        'name' => 'Jareer Zeenam',
        'frameworks'=>[
            'Laravel',
            'Vue',
            'Inertia'
        ]
    ]);
});


Route::get('/users', function () {
    return Inertia::render('Users',[
        'time' => now()->toTimeString(),
        'users' => User::all()->map(fn($user) => [
            'name' => $user->name
        ]),
    ]);
});

Route::get('/settings', function () {
    sleep(2);
    return Inertia::render('Settings');
});

Route::post('/logout', function () {
    dump(request('foo'));
    dd('Logging the user out');
});
