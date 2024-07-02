<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('tasks');
})->name('tasks');



Route::get('/article/{any}', [TaskController::class, 'readPost'])->name('read_post');


// ... (Uitgecommentarieerde code)

// Voor de bovenstaande code moet je ervoor zorgen dat de genoemde controllers en views bestaan en correct zijn geconfigureerd.



// Route::get('list', [MemberController::class, 'show']);
// // Route::view('profile', 'profile');

// Route::view('login', "users");
// Route::view("home", "home");
// Route::view("noaccess", "noaccess");

// Route::view("user", "users");
// Route::view("about", "about");

// Route::view('upload', "upload");
// Route::post('upload', [uploadController::class, 'index']);

// Route::view('add', 'add');
// Route::post("addmember", [AddMember::class, 'add']);


// Route::view("contact", 'contact');

// Route::get("paht", "controller file"); 

// Route::get("users", "users@index");

// Route::get("users/{user}", [Users::class, 'index']);

// Route::get("/user/{name}", function ($name) {
//     return view("users", ['user' => $name]);
// });

// Route::get("user/{name}", [UsersController::class, 'loadView']);

// Route::get("users", [UsersController::class, 'viewLoad']);

// Route::get("users", [UsersController::class, 'getData']);
// Route::view("users", "users");

// Route::group(['middleware' => ['projectedPage']], function () {
//     Route::view("users", 'users');
//     Route::view("home", "home");
// });
// Route::delete("users", [UserController::class, 'testReqeust']);

// Route::view("users", "users")->middleware('protectedPage');
