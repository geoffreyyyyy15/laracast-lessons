<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Log\Logger;
use Illuminate\Support\Facades\DB;
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

Route::get('/', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);
// Route::get('categories/{category:slug}', function (Category $category){
//     return view('posts')
//             ->with('posts', $category->posts)
//             ->with('currentCategory', $category)
//             ->with('categories', Category::all());
// }
// );
Route::get('author/{author:username}', function (User $author){
    return view('posts.index')
            ->with('posts', $author->posts);
}
);
Route::get('/index', [UserController::class, 'index']);
