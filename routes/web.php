<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\CollectionController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PostController;


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

// Route::get('/', function () {
//     return view('greeting', ['records' => []]);
// });

Route::get('blade', function () {
    return view('child');
});

// Route::get('/', function () {
//     return view('greeting', ['values' => ['a', 'b', 'c']]);
// });

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

Route::get(
    'collect1',
    [CollectionController::class, 'collection_class']
);
Route::get(
    'collect2',
    [CollectionController::class, 'collect_method']
);
Route::get(
    'src_collection',
    [CollectionController::class, 'search_data']
);

Route::get(
    'filter_collection',
    [CollectionController::class, 'filter_data']
);

Route::get(
    'sort_collection',
    [CollectionController::class, 'sort_data']
);

Route::get(
    'key_collection',
    [CollectionController::class, 'read_keys']
);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('add-blog-post-form', [PostController::class, 'index']);
Route::post('store-form', [PostController::class, 'store']);


Route::get(
    'json',
    function () {
        return response()->json([
            'name' => 'Barack Obama',
            'state' => 'Illinois'
        ]);
    }
);
