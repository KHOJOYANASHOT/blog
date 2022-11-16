<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\FlightController;

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
    return view('welcome');
});

Route::get('/', function () {
    return view('greeting', ['records' => []]);
});

Route::get('blade', function () {
    return view('child');
});

Route::get('/', function () {
    return view('greeting', ['values' => ['a', 'b', 'c']]);
});

Route::get('user/{id}', function ($id) {
    return 'User ' . $id;
});

Route::get(
    'posts/{post}/comments/{comment}',
    function ($postId, $commentId) {
        //
    }
);

Route::prefix('admin')->group(function () {
    Route::get('/users', function () {
        return "Matches The /admin/users";
    });
    Route::get('/managers', function () {
        return "Matches The /admin/managers";
    });
});


Route::get('/user/{id}', [
    UserController::class,
    'show'
]);

Route::resource('photos', PhotoController::class);

Route::get('countries', [
    CountryController::class,
    'index'
]);

Route::get('users', [
    UserController::class,
    'index'
]);

Route::get('flights', [
    FlightController::class,
    'index'
]);
