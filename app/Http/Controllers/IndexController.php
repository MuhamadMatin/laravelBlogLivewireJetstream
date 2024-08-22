<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('index', [
            'featuredPosts' => Post::published()->featured()->latest('published_at')->take(3)->get(),
            'lastestPosts' => Post::published()->featured()->take(9)->get()
        ]);
    }
}
