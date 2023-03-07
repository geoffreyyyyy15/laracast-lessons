<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Log\Logger;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;



Route::get('/', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);
// Route::get('categories/{category:slug}', function (Category $category){
//     return view('posts')
//             ->with('posts', $category->posts)
//             ->with('currentCategory', $category)
//             ->with('categories', Category::all());
// }
// );

// );
// Route::get('/index', [UserController::class, 'index']);
