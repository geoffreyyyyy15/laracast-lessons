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

    //   $path =  request()->file('thumbnail')->store('thumbnails');

    //     return 'Done: ' . $path;

       $attributes = request()->validate([
            'title' => ['required', 'max:255'],
            'thumbnail' => ['required', 'image'],
            'slug' =>  ['required', Rule::unique('posts', 'slug')],
            'excerpt' => ['required', 'max:255'],
            'body' => ['required'],
            'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);
        $attributes['user_id'] = auth()->id();
        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');

        Post::create($attributes);

        return redirect('admin/dashboard')->with('success', 'Post Published!');
    }

    public function showDashboard() {
        return view('admin.dashboard')
        ->with('posts', Post::latest()->where('user_id', auth()->id())
        ->filter(request(['search', 'category', 'author']))->paginate(15)->withQueryString());
    }
}
