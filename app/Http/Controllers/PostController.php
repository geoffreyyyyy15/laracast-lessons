<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;

class PostController extends Controller
{
    public function index() {

        return view('posts.index')
            ->with('posts', Post::latest()
            ->filter(request(['search', 'category', 'author']))->paginate(5)->withQueryString());

    }
    public function show(Post $post)
    {
        return view('posts.show')
            ->with('post', $post);
    }
    public function create() {

        return view('posts.create');
    }
    public function store() {

       $attributes = request()->validate([
            'title' => ['required', 'max:255'],
            'slug' =>  ['required', Rule::unique('posts', 'slug')],
            'excerpt' => ['required', 'max:255'],
            'body' => ['required'],
            'category' => ['required', Rule::exists('categories', 'id')]
        ]);
        $attributes['user_id'] = auth()->id();

        Post::create($attributes);

        return redirect('/');
    }
}
