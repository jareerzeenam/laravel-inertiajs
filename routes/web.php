<?php

use App\Models\User;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;

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

    // return User::paginate(10);
    return Inertia::render('Users',[
        'time' => now()->toTimeString(),
        // 'users' => User::all()->map(fn($user) => [
        //     'id' => $user->id,
        //     'name' => $user->name
        // ]),
        // 'users' => User::paginate(10),
        'users' => User::query()
            ->when(Request::input('search'), function($query, $search){
                $query->where('name','like',"%{$search }%");
            })
            ->paginate(10)
            ->withQueryString()
            ->through(fn($user) => [
                'id' => $user->id,
                'name' => $user->name
        ]),
        'filters' => Request::only(['search'])
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
