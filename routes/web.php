<?php

use App\Models\User;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\Auth\LoginController;

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

Route::get('login', [LoginController::class,'create'])->name('login');
Route::post('login', [LoginController::class,'store']);
Route::post('logout', [LoginController::class,'destroy'])->middleware('auth');



Route::middleware('auth')->group(function(){

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
        return Inertia::render('Users/Index',[
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

    Route::get('/users/create', function () {
        return Inertia::render('Users/Create');
    });

    Route::post('/users', function () {

        //validate request
        $attributes = Request::validate([
            'name' => 'required',
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => 'required',
        ]);

        //create user
        User::create($attributes);

        //redirect
        return redirect('/users');
    });

    Route::post('/test', function () {
        dump(request('foo'));
        dd('Logging the user out');
    });
});


