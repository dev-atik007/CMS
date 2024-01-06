<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function website()
    {
        // dd(Post::published);
        $latestPosts = Post::take(5)->get();
        // dd($latestPosts);
        $categories = Category::all();
        $posts = Post::where('is_publish',1)->get();
        return view('website.master', compact('posts','categories','latestPosts'));
    }

    public function singlePage(post $post)
    {
        $latestPosts = Post::all();
        // dd($latestPosts);
        return view('website.single_page.page', compact('post','latestPosts'));
    }
}
